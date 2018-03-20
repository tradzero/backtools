<?php

/*
 * 获取表单数据 或 old() 数据
 */
if (!function_exists('get_blade_input_value')) {
    function get_blade_input_value($origin = null, $target)
    {
        if(old($target) !== null) {
            return old($target);
        }

        $errors = session('errors');
        if($origin && $errors && $errors->getBag('default')->has($target)) {
            return request()->get($target) ? : '';
        }

        return $origin ? $origin->$target : '';
    }
}

/*
 * 获取 YYYY-MM-DD 类型数据
 */
if (!function_exists('get_blade_date_string_value')) {
    function get_blade_date_string_value($origin, $target)
    {
        $carbon = get_blade_carbon_value($origin, $target);
        return $carbon->toDateString();
    }
}

/*
 * 获取 Carbon 类型数据
 */
if (!function_exists('get_blade_carbon_value')) {
    function get_blade_carbon_value($origin, $target)
    {
        $value = get_blade_input_value($origin, $target);
        return ($value === '' || !strtotime($value))
            ? now() : new Carbon($value);
    }
}

/**
 * 获取 option 数据
 */
if (!function_exists('get_blade_option_selected'))  {
    function get_blade_option_selected($origin, $target, $index)
    {
        $value = get_blade_input_value($origin, $target);

        if ($value === '') {
            return '';
        }

        if (is_object($value)) {
            return $value->keyBy('id')->has($index) ? 'selected' : '';
        }

        return $value == $index ? 'selected' : '';
    }
}

/**
 * 获取 checkbox 数据
 */
if (!function_exists('get_blade_checkbox_checked'))  {
    function get_blade_checkbox_checked($origin, $target, $index)
    {
        $value = get_blade_input_value($origin, $target);

        if ($value === '') {
            return '';
        }

        if (is_object($value)) {
            return $value->keyBy('id')->has($index) ? 'checked' : '';
        }

        return in_array($index, $value) ? 'checked' : '';
    }
}
