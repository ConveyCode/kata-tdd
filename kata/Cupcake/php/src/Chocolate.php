<?php

declare(strict_types=1);

namespace Cupcake;

final class Chocolate extends BaseIngredient
{
    public function emoji(): string
    {
        return '🍫';
    }

    public static function name(): string
    {
        return 'chocolate';
    }
}
