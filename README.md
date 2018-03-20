# backtools

## 简介
Laravel 后台初始化脚手架，主题框架为基于 BootStrap 的 SlickLab

## 安装
* 添加 composer require tonglei/backtools 到项目
* 添加 TongLei\BackTools\ServiceProvider::class 到 config/app.php
* 运行 php artisan backtools:publishes 加载资源文件

## 帮助函数
### 后台表单

##### get_blade_carbon_value - 获取 Carbon 类型数据

```
<input type="data" value="{{ get_blade_carbon_value($model, $attr)->toDateString }}">
```

##### get_blade_date_string_value - 获取 YYYY-MM-DD 类型数据

```
<input type="data" value="{{ get_blade_date_string_value($model, $attr) }}">
```

##### get_blade_input_value - 获取表单数据 或 old() 数据

```
<input type="text" value="{{ get_blade_input_value($model, $attr) }}">
```

##### get_blade_option_selected - 获取 option 数据

```
<select name="attr">
    @foreach($models as $model)
        <option
            value="{{$loop->index}}"
            {{ get_blade_option_selected($model, 'attr', $loop->index) }}>
            {{$value}}
        </option>
    @endforeach
</select>
```

##### get_blade_checkbox_checked - 获取 checkbox 数据

```
@foreach($models as $model)
    <label class="checkbox-custom check-success">
    <input
        name="attrs[]"
        type="checkbox"
        value="{{$model->id}}"
        id="activity{{$model->id}}"
        {{ get_blade_checkbox_checked($model, 'attrs', $model->id) }}>
        <label for="activity{{$model->id}}">{{ $model->name }}</label>
    </label>
@endforeach
```
