<?php

declare(strict_types=1);

namespace Cupcake;

abstract class BaseIngredient implements Ingredient
{
    public function __construct(private readonly ?Ingredient $ingredient = null)
    {
    }

    public function __toString(): string
    {
        return $this->toString($this->emoji(), true);
    }

    public function toString(string $emoji, bool $lastOne): string
    {
        if ($this->ingredient !== null) {
            if ($this->ingredient->ingredient !== null && $lastOne) {
                $emoji = $this->ingredient->toString($this->ingredient->emoji(), false) . ' and ' . $emoji;
            } else {
                $emoji = $this->ingredient->toString($this->ingredient->emoji(), false) . ' with ' . $emoji;
            }
        }

        return $emoji;
    }
}
