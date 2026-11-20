<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\ValidationException;

class BlockDangerousHtmlTagsMiddleware
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    /**
     * Dangerous tags list (can be extended)
     */
    protected $blockedTags = [
        'script',
        'iframe',
        'object',
        'embed',
        'link',
        'style',
        'meta',
        'base',
        'form',
        'svg',
    ];

    protected $except = [
        // example: 'html_editor'
    ];

    protected function containsBlockedTag($value)
    {
        foreach ($this->blockedTags as $tag) {
            if (preg_match("/<\s*\/?\s*{$tag}[^>]*>/i", $value)) {
                return $tag;
            }
        }
        return false;
    }

    protected function checkFields($inputs, $prefix = '')
    {
        $errors = [];

        foreach ($inputs as $key => $value) {
            $fieldKey = $prefix ? "{$prefix}.{$key}" : $key;

            if (in_array($key, $this->except)) {
                continue;
            }

            if (is_array($value)) {
                $errors = array_merge($errors, $this->checkFields($value, $fieldKey));
            } elseif (is_string($value)) {
                $blockedTag = $this->containsBlockedTag($value);
                if ($blockedTag) {
                    $errors[$fieldKey] = ["The <$blockedTag> tag is not allowed."];
                }
            }
        }

        return $errors;
    }

    public function handle(Request $request, Closure $next)
    {
        $inputs = $request->all();
        $errors = $this->checkFields($inputs);

        if (!empty($errors)) {
            throw ValidationException::withMessages($errors);
        }

        return $next($request);
    }
}
