<?php
    if (!function_exists('title')) {
        function title () {
            return config('environment.title');
        }
    }

    if (!function_exists('description')) {
        function description () {
            return config('environment.description');
        }
    }

    if (!function_exists('version')) {
        function version () {
            return config('environment.version');
        }
    }

    if (!function_exists('favicon')) {
        function favicon (int $size = 32) {
            return image("icons/favicon/{$size}.png");
        }
    }

    if (!function_exists('logo')) {
        function logo (string $logo = '') {
            $version = version();
            return image("icons/{$version}/{$logo}.png");
        }
    }
?>