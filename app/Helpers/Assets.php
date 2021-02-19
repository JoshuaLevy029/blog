<?php
    if (!function_exists('assets')) {
        function assets(string $path = '') {
            return asset("assets/{$path}");
        }
    }

    if (!function_exists('css')) {
        function css(string $path = '') {
            return assets("css/{$path}");
        }
    }

    if (!function_exists('js')) {
        function js(string $path = '') {
            return assets("js/{$path}");
        }
    }

    if (!function_exists('plugin')) {
        function plugin(string $path = '') {
            return assets("plugins/{$path}");
        }
    }

    if (!function_exists('image')) {
        function image(string $path = '') {
            return assets("images/{$path}");
        }
    }

    if (!function_exists('video')) {
        function video(string $path = '') {
            return assets("videos/{$path}");
        }
    }

    if (!function_exists('module')) {
        function module(string $path = '') {
            return asset("node_modules/{$path}");
        }
    }

    if (!function_exists('upload')) {
        function upload(string $path = '') {
            return assets("uploads/{$path}");
        }
    }

    if (!function_exists('layout')) {
        function layout(string $path = '') {
            return assets("layouts/{$path}");
        }
    }
?>