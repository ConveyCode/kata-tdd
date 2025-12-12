<?php

declare(strict_types=1);

namespace Cupcake;

final class Nuts extends BaseIngredient
{
    public function emoji(): string
    {
        return '🥜';
    }

    public static function name(): string
    {
        return 'nuts';
    }
}
