# Mastermind

Have you ever played Mastermind ? This game where one player, a codemaker, has to choose a secret combination of colored pegs and then make it guess to someone else, a codebreaker. The codemaker is answering to each guess attempt of the codebreaker by indicating only the number of well placed colors and the number of correct but misplaced colors.

If you remember playing the game, being the one who guesses is very brain demanding, whereas the other player get bored rapidly.

## Problem Description

The idea of this Kata is to code an algorithm capable of playing this boring role: answering the number of well placed and misplaced colors.

Therefore, your function should return, for a secret and a guessing combination:
- the number of well placed colors
- the number of correct but misplaced colors

A combination can contain any number of pegs but you’d better give the same number for the secret and the guessing. You can use any number of colors.

## Clues

- It’s better to start by detecting well placed colors.
- Detecting misplaced colors is about counting them…

## Suggested Test Cases

For a secret `[blue, red, green, pink]` and a guess `[yellow, red, blue, purple]` the answer should be: 1 well placed and 1 misplaced.

Some other basic examples:

```php
    public static function guessDataProvider(): array
    {
        return [
            'Correct guess' => [
                'secret' => new Code(Peg::Red, Peg::Green, Peg::Blue, Peg::Yellow),
                'guess' => new Code(Peg::Red, Peg::Green, Peg::Blue, Peg::Yellow),
                'expectedResult' => new Evaluation(numberOfCorrectPegs: 4, numberOfMisplacedPegs: 0),
            ],
            'Completely incorrect guess' => [
                'secret' => new Code(Peg::Red, Peg::Green, Peg::Purple, Peg::Yellow),
                'guess' => new Code(Peg::Blue, Peg::Blue, Peg::Blue, Peg::Blue),
                'expectedResult' => new Evaluation(numberOfCorrectPegs: 0, numberOfMisplacedPegs: 0),
            ],
            'All colors correct but misplaced' => [
                'secret' => new Code(Peg::Red, Peg::Green, Peg::Blue, Peg::Yellow),
                'guess' => new Code(Peg::Yellow, Peg::Blue, Peg::Green, Peg::Red),
                'expectedResult' => new Evaluation(numberOfCorrectPegs: 0, numberOfMisplacedPegs: 4),
            ],
            'Some correct, some misplaced' => [
                'secret' => new Code(Peg::Red, Peg::Green, Peg::Blue, Peg::Yellow),
                'guess' => new Code(Peg::Red, Peg::Blue, Peg::Green, Peg::Blue),
                'expectedResult' => new Evaluation(numberOfCorrectPegs: 1, numberOfMisplacedPegs: 2),
            ],
            'One correct, others incorrect' => [
                'secret' => new Code(Peg::Red, Peg::Green, Peg::Purple, Peg::Yellow),
                'guess' => new Code(Peg::Red, Peg::Blue, Peg::Blue, Peg::Blue),
                'expectedResult' => new Evaluation(numberOfCorrectPegs: 1, numberOfMisplacedPegs: 0),
            ],
            'Correct and misplaced pegs #1' => [
                'secret' => new Code(Peg::Red, Peg::Red, Peg::Green, Peg::Green),
                'guess' => new Code(Peg::Red, Peg::Green, Peg::Blue, Peg::Blue),
                'expectedResult' => new Evaluation(numberOfCorrectPegs: 1, numberOfMisplacedPegs: 1),
            ],
            'Correct and misplaced pegs #2' => [
                'secret' => new Code(Peg::Green, Peg::Yellow, Peg::Red, Peg::Red),
                'guess' => new Code(Peg::Yellow, Peg::Green, Peg::Red, Peg::Red),
                'expectedResult' => new Evaluation(numberOfCorrectPegs: 2, numberOfMisplacedPegs: 2),
            ],
            'Correct cannot count as misplaced' => [
                'secret' => new Code(Peg::Green, Peg::Orange, Peg::Orange, Peg::Red),
                'guess' => new Code(Peg::Orange, Peg::Orange, Peg::Orange, Peg::Orange),
                'expectedResult' => new Evaluation(numberOfCorrectPegs: 2, numberOfMisplacedPegs: 0),
            ],
        ];
    }
```

Take care to start simple and choose wisely the following tests in order to have a nice TDD progression…
