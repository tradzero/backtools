<?php

if (! function_exists('menuIsActive')) {
    /**
     * 判断当前菜单项是否被点击
     *
     * @param string $path
     * @return boolean
     */
    function menuIsActive($path)
    {
        $prefix = request()->route()->getPrefix();
        $prefix = str_replace('/', '', $prefix);
        $isActive = $path === ''
            ? $prefix === request()->decodedPath()
            : preg_match("/^{$prefix}\/{$path}/i", request()->decodedPath());

        return $isActive ? 'active' : '';
    }
}
