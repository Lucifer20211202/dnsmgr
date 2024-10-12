<?php
// +----------------------------------------------------------------------
// | 控制台配置
// +----------------------------------------------------------------------
use app\command\Dmtask;
use app\command\Opiptask;

return [
    // 指令定义
    'commands' => [
        'dmtask'   => Dmtask::class,
        'opiptask' => Opiptask::class,
    ],
];
