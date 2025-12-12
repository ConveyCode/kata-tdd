<?php

declare(strict_types=1);

namespace Cupcake;

final class Request
{
    public static function fromEntry(string $entry): Ingredient
    {
        $entries = explode(' ', $entry);
        $ingredients = array_filter($entries, static fn ($entry) => !in_array($entry, ['with', 'and']));
        $latestIngredient = null ;

        foreach ($ingredients as $ingredient) {
            $latestIngredient = self::createIngredient($ingredient, $latestIngredient);
        }

        return $latestIngredient;
    }

    private static function createIngredient(string $ingredient, ?Ingredient $latestIngredient = null): Ingredient
    {
        return match($ingredient) {
            Cookie::name() => new Cookie($latestIngredient),
            Cupcake::name() => new Cupcake($latestIngredient),
            Nuts::name() => new Nuts($latestIngredient),
            Chocolate::name() => new Chocolate($latestIngredient),
            Banana::name() => new Banana($latestIngredient),
            default => throw new \InvalidArgumentException('Invalid ingredient'),
        };
    }
}
