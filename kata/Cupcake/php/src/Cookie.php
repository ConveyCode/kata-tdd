<?php

declare(strict_types=1);

namespace Cupcake;

final class Cookie extends BaseIngredient
{
    public function emoji(): string
    {
        return '🍪';
    }

    public static function name(): string
    {
        return 'cookie';
    }
}
