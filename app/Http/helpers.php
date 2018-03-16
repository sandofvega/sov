<?php

if (!function_exists('public_folder')) {
    /**
     * Assets path
     *
     * @param $path
     * @param null $secure
     * @return mixed
     */
    function public_folder($path, $secure = null)
    {
        return app('url')->asset('public/'.$path, $secure);
    }
}