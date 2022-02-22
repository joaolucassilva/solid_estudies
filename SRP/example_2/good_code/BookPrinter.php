<?php

class BookPrinter
{
    public function printTextToConsole(string $word): void
    {
        printf("Nome do livro: ${word}");
    }

    public function printTextToAnotherMedium(string $text): void
    {
        printf("{$text}");
    }
}