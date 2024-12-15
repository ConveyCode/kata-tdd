# Cupcake

**Niveau :** Moyen

## Problem Description

Écrire un programme qui permet de constituer un dessert avec plusieurs toppings à l'aide d'une phrase en anglais.

Le programme doit renvoyer le gâteau indiqué avec ses toppings dans l'ordre défini par la phrase, et les convertir en leur réprésentation en émoji.

### Règles de gestion

- La phrase doit contenir le séparateur "and" pour le dernier ingrédient qui est listé (dans le cas où il y en aurait).
- Si un ingrédient de la liste n'est pas le dernier, alors le séparateur est "with".

Ce problème est à résoudre en suivante quelques règles :

- TDD (et baby step)
- Utiliser le pattern decorator.
- Utiliser le pattern composite.

Liste des emojis disponibles :

- cupcake 🧁
- cookie 🍪
- nuts 🥜
- coconut 🥥
- banana 🍌
- honey 🍯

##### Exemple 1

Si je saisis "cupcake with chocolate and nuts" alors le programme me retourne "🧁 with 🍫 and 🥜".

##### Exemple 2

Si je saisis "cookie" alors le programme me retourne "🍪".

##### Exemple 3

Si je saisis "cupcake with coconut with nuts and chocolate" alors le programme me retourne "🧁 with 🥥 with 🥜 and 🍫".

## Tips

Pour construire un gâteau avec du chocolat, des noix et de la noix de coco, nous écrirons quelques choses comme :

```php
$cake = new Coconut(
    new Nuts(
        new Chocolate(
            new Cupcake()
        )
    )
);

echo (string) $cake; // Renvoie "cupcake with chocolate with nuts and coconut"
```
