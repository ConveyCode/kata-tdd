<?php

declare(strict_types=1);

namespace Cupcake;

interface Ingredient extends \Stringable
{
    public static function name(): string;
    public function emoji(): string;
}
