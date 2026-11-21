<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class YouTubeService
{
    /**
     * Fetch the latest shorts dynamically from a YouTube channel.
     *
     * @param string $channelHandle e.g. '@MSERIES-BHILAI'
     * @param int $limit Number of shorts to return (default: 10)
     * @return array
     */
    public static function getLatestShorts(string $channelHandle = '@MSERIES-BHILAI', int $limit = 10): array
    {
        $cacheKey = 'yt_latest_shorts_' . md5($channelHandle) . "_{$limit}";

        return Cache::remember($cacheKey, now()->addMinutes(30), function () use ($channelHandle, $limit) {
            return self::fetchShortsFromYouTube($channelHandle, $limit);
        });
    }

    /**
     * Direct live fetch from YouTube channel shorts tab.
     */
    public static function fetchShortsFromYouTube(string $channelHandle, int $limit): array
    {
        try {
            $handle = ltrim($channelHandle, '@');
            $url = "https://www.youtube.com/@{$handle}/shorts";

            $response = Http::withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'Accept-Language' => 'en-US,en;q=0.9',
            ])->timeout(6)->get($url);

            if ($response->successful()) {
                $html = $response->body();

                if (preg_match('/var ytInitialData = (\{.*?\});<\/script>/s', $html, $matches)) {
                    $data = json_decode($matches[1], true);

                    if (is_array($data)) {
                        $rawItems = [];
                        $findShorts = function ($node) use (&$findShorts, &$rawItems) {
                            if (!is_array($node)) return;
                            if (isset($node['shortsLockupViewModel'])) {
                                $rawItems[] = $node['shortsLockupViewModel'];
                            }
                            foreach ($node as $child) {
                                $findShorts($child);
                            }
                        };
                        $findShorts($data);

                        if (!empty($rawItems)) {
                            $shorts = [];
                            foreach (array_slice($rawItems, 0, $limit) as $item) {
                                $entityId = $item['entityId'] ?? '';
                                $id = str_replace('shorts-shelf-item-', '', $entityId);
                                $accText = $item['accessibilityText'] ?? '';
                                $parts = explode(', ', $accText);
                                $rawTitle = $parts[0] ?? 'Reel';
                                $viewsRaw = isset($parts[1]) ? str_replace(' - play Short', '', $parts[1]) : '';

                                // Clean up title and remove hashtags
                                $title = preg_replace('/#\S+/', '', $rawTitle);
                                $title = trim(str_replace(['|', '  '], [' - ', ' '], $title), " - \t\n\r\0\x0B");

                                // Clean up views (e.g. 1.2 thousand views -> 1.2K Views)
                                $views = self::formatViews($viewsRaw);

                                // Detect / assign tag
                                $tag = self::detectTag($rawTitle);

                                $shorts[] = [
                                    'id' => $id,
                                    'title' => !empty($title) ? $title : 'Mahakavya Shri Ramayan Katha',
                                    'views' => $views,
                                    'tag' => $tag,
                                    'thumb_url' => "https://i.ytimg.com/vi/{$id}/oar2.jpg",
                                    'fallback_thumb' => "https://i.ytimg.com/vi/{$id}/hqdefault.jpg",
                                    'url' => "https://www.youtube.com/watch?v={$id}",
                                ];
                            }

                            if (count($shorts) >= 5) {
                                return $shorts;
                            }
                        }
                    }
                }
            }
        } catch (\Throwable $e) {
            Log::warning('YouTubeService: Failed to fetch live shorts: ' . $e->getMessage());
        }

        return self::fallbackShorts();
    }

    /**
     * Clean and format view count string.
     */
    protected static function formatViews(string $raw): string
    {
        if (empty($raw)) return '';
        $views = str_ireplace(['thousand views', 'views'], ['K Views', 'Views'], $raw);
        return trim($views);
    }

    /**
     * Detect a contextual tag from reel caption.
     */
    protected static function detectTag(string $text): string
    {
        $lower = strtolower($text);
        if (str_contains($lower, 'song') || str_contains($lower, 'vandana') || str_contains($lower, 'music')) {
            return 'Song Promo';
        }
        if (str_contains($lower, 'love') || str_contains($lower, 'thank you')) {
            return 'Audience Love';
        }
        if (str_contains($lower, 'premiere')) {
            return 'Premiere Night';
        }
        if (str_contains($lower, 'cinema') || str_contains($lower, 'theatre') || str_contains($lower, 'screen')) {
            return 'In Cinemas';
        }
        return 'Short Reel';
    }

    /**
     * Curated resilient fallback in case YouTube cannot be reached during offline/test environments.
     */
    public static function fallbackShorts(): array
    {
        return [
            [
                'id' => 'mdVdx-AGNV4',
                'title' => 'Shiv Vandana – Song Out Tomorrow',
                'views' => '1.2K Views',
                'tag' => 'Song Promo',
                'thumb_url' => 'https://i.ytimg.com/vi/mdVdx-AGNV4/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/mdVdx-AGNV4/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=mdVdx-AGNV4',
            ],
            [
                'id' => 'MoiqpwB5EeU',
                'title' => 'Thank You All For Your Love',
                'views' => '1.7K Views',
                'tag' => 'Audience Love',
                'thumb_url' => 'https://i.ytimg.com/vi/MoiqpwB5EeU/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/MoiqpwB5EeU/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=MoiqpwB5EeU',
            ],
            [
                'id' => 'b1bxtF8lHaA',
                'title' => 'Celebration & Gratitude From Cast',
                'views' => '445 Views',
                'tag' => 'Cast Update',
                'thumb_url' => 'https://i.ytimg.com/vi/b1bxtF8lHaA/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/b1bxtF8lHaA/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=b1bxtF8lHaA',
            ],
            [
                'id' => 'oLeaUJfQnu0',
                'title' => 'Mahakavya Shri Ramayan Katha In Theatres',
                'views' => '265 Views',
                'tag' => 'In Cinemas',
                'thumb_url' => 'https://i.ytimg.com/vi/oLeaUJfQnu0/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/oLeaUJfQnu0/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=oLeaUJfQnu0',
            ],
            [
                'id' => 'pIJGkb1CJz0',
                'title' => 'Siya Tum Kahan Ho – Track Out Now',
                'views' => '317 Views',
                'tag' => 'Song Promo',
                'thumb_url' => 'https://i.ytimg.com/vi/pIJGkb1CJz0/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/pIJGkb1CJz0/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=pIJGkb1CJz0',
            ],
            [
                'id' => '70pJQNIY4ek',
                'title' => 'Thank You Everyone From Bhilai',
                'views' => '64 Views',
                'tag' => 'Audience Love',
                'thumb_url' => 'https://i.ytimg.com/vi/70pJQNIY4ek/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/70pJQNIY4ek/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=70pJQNIY4ek',
            ],
            [
                'id' => 'CprzwkmSuVk',
                'title' => 'Overwhelming Love Across Audiences',
                'views' => '3.9K Views',
                'tag' => 'Trending',
                'thumb_url' => 'https://i.ytimg.com/vi/CprzwkmSuVk/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/CprzwkmSuVk/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=CprzwkmSuVk',
            ],
            [
                'id' => 'Lv6BEaGb2vE',
                'title' => 'Watch On The Big Screen Now',
                'views' => '878 Views',
                'tag' => 'In Cinemas',
                'thumb_url' => 'https://i.ytimg.com/vi/Lv6BEaGb2vE/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/Lv6BEaGb2vE/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=Lv6BEaGb2vE',
            ],
            [
                'id' => 'SYTLh9tZqSc',
                'title' => 'Key Highlights & Powerful Dialogue',
                'views' => '161 Views',
                'tag' => 'Highlight',
                'thumb_url' => 'https://i.ytimg.com/vi/SYTLh9tZqSc/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/SYTLh9tZqSc/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=SYTLh9tZqSc',
            ],
            [
                'id' => 'aGUBVEsaAxo',
                'title' => 'Grand Premiere Night Celebrations',
                'views' => '105 Views',
                'tag' => 'Premiere Night',
                'thumb_url' => 'https://i.ytimg.com/vi/aGUBVEsaAxo/oar2.jpg',
                'fallback_thumb' => 'https://i.ytimg.com/vi/aGUBVEsaAxo/hqdefault.jpg',
                'url' => 'https://www.youtube.com/watch?v=aGUBVEsaAxo',
            ],
        ];
    }
}
