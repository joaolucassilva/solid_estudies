<?php

use JetBrains\PhpStorm\Pure;

class Book
{
    private string $name;
    private string $author;
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
}