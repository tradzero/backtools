<?php

namespace TongLei\BackTools\Commands;

use Illuminate\Foundation\Console\VendorPublishCommand;

class PublishesCommands extends VendorPublishCommand
{
    protected $signature = 'backtools:publishes {--force : 强制覆盖已经存在的文件}';

    protected $description = '生成后台基础 blade 模板';

    public function handle()
    {
        $files = [
            __DIR__ . "/../public" => public_path('backtools'),
            __DIR__ . '/../resources/views' => resource_path("views/backtools"),
        ];

        foreach ($files as $from => $to) {
            $this->publishItem($from, $to);
        }
    }
}
