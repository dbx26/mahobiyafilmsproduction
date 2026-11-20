<?php

if (!function_exists('localized_url')) {
    /**
     * Generate a URL for a named route with the current locale prefixed.
     *
     * @param  string  $name
     * @param  array   $parameters
     * @param  bool    $absolute
     * @return string
     */
    function localized_url($name, $parameters = [], $absolute = true)
    {
        $locale = app()->getLocale();

        // Merge locale into route parameters
        $parameters = array_merge(['locale' => $locale], $parameters);

        return route($name, $parameters, $absolute);
    }
}
