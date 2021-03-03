<?php
    if (!function_exists('assets_path')) {
        function assets_path(string $path = '') {
            return public_path("assets/{$path}");
        }
    }

    if (!function_exists('css_path')) {
        function css_path(string $path = '') {
            return assets_path("css/{$path}");
        }
    }

    if (!function_exists('js_path')) {
        function js_path(string $path = '') {
            return assets_path("js/{$path}");
        }
    }

    if (!function_exists('plugin_path')) {
        function plugin_path(string $path = '') {
            return assets_path("plugins/{$path}");
        }
    }

    if (!function_exists('image_path')) {
        function image_path(string $path = '') {
            return assets_path("images/{$path}");
        }
    }

    if (!function_exists('video_path')) {
        function video_path(string $path = '') {
            return assets_path("videos/{$path}");
        }
    }

    if (!function_exists('module_path')) {
        function module_path(string $path = '') {
            return public_path("node_modules/{$path}");
        }
    }

    if (!function_exists('upload_path')) {
        function upload_path(string $path = '') {
            return assets_path("uploads/{$path}");
        }
    }

    if (!function_exists('layout_path')) {
        function layout_path(string $path = '') {
            return assets_path("layouts/{$path}");
        }
    }

    if (!function_exists('plugin_js_path')) {
        function plugin_js_path(string $path = '') {
            return assets_path("js/plugins/{$path}");
        }
    }
?>