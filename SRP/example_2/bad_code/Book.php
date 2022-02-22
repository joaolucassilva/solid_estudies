<?php

use JetBrains\PhpStorm\Pure;

class Book
{
    private string $text;

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function replaceWordInText(string $word): string
    {
        $this->setText(str_replace("word", "", $this->getText()));
        return $this->getText();
    }

    #[Pure] public function isWordInText(string $word): bool
    {
        return str_contains($this->getText(), $word);
    }

    /**
     * @param string $word
     * @return void
     * Ao adicionar esse novo método o código, no entanto, viola o SRP
     * Para implementar uma classe separada que se preocupe apenas com a impressão
     * de nossos textos.
     */
    public function printTextToConsole(string $word)
    {
        printf("Nome do livro: ${word}");
    }


}