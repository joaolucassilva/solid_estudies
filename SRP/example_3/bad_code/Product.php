<?php

class Product
{
    public int $id;
    public string $description;
    public float $price;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return void
     * A classe tem duas responsabilidades,
     * a primeira representar um produto e a segunda calcular ICMS.
     * Não é de responsabilidade da classe Product calcular impostos,
     * essa responsabilidade deve estar em outra classe. Se um novo imposto
     * surgir, deveremos alterar a classe Product para adicionar uma nova regra,
     * violando assim o SRP.
     * Para resolver devemos criar uma classe especifica para calcular impostos.
     */
    public function CalculationICMS(): void
    {
        // regra de negócio
    }

}