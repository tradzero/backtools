<?php

namespace TongLei\BackTools\Commands;

use Illuminate\Foundation\Console\VendorPublishCommand;

class InitCommands extends VendorPublishCommand
{
    protected $signature = 'backtools:init {--force : 强制覆盖已经存在的文件}';

    protected $description = '生成基础 blade 模板 和 配置数据';

    public function handle()
    {
        $files = [
            __DIR__ . "/../public" => public_path('backtools'),
            __DIR__ . '/../resources/views' => resource_path("views/backtools"),
            __DIR__ . '/../config' => config_path('/'),
        ];

        foreach ($files as $from => $to) {
            $this->publishItem($from, $to);
        }
    }
}
