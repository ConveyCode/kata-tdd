# FizzBuzz

**Niveau :** Facile

Vous devez construire une fonction `String compute(String)` qui transforme un entier en chaîne de caractères selon les règles suivantes.

## Règles
- Si le nombre est divisible par 3, on le remplace par Foo
- si le nombre est divisible par 5, on le remplace par Bar
- si le nombre est divisible par 7, on le remplace par Qix
- si le nombre est divisible par 3, 5 et 7 alors on le remplace par Foo, Bar, Qix dans l'ordre des chiffres.

## Examples
```
1  => 1
2  => 2
3  => FooFoo (divisible by 3, contains 3)
4  => 4
5  => BarBar (divisible by 5, contains 5)
6  => Foo (divisible by 3)
7  => QixQix (divisible by 7, contains 7)
8  => 8
9  => Foo
10 => Bar
13 => Foo
15 => FooBarBar (divisible by 3, divisible by 5, contains 5)
21 => FooQix
33 => FooFooFoo (divisible by 3, contains two 3)
51 => FooBar
53 => BarFoo 
```

## Étape 2

Nous devons garder les traces des chiffres `0`. Chaque `0` doit être remplacé par `*` dans le résultat final.

## Examples
```
101   => 1*1
303   => FooFoo*Foo
105   => FooBarQix*Bar
10101 => FooQix**
```
