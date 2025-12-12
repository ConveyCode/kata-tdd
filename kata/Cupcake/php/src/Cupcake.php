<?php

declare(strict_types=1);

namespace Cupcake;

final class Cupcake extends BaseIngredient
{
    public function emoji(): string
    {
       return '🧁';
    }

    public static function name(): string
    {
        return 'cupcake';
    }
}
