<?php

declare(strict_types=1);

namespace LaraPkg\KeyChanger;

use RonAppleton\PhpKeyChanger\PhpKeyChanger;

class KeyChanger extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return PhpKeyChanger::class;
    }
}
