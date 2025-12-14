<?php

namespace App;

class Zoo
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
        echo "Животное {$animal->getName()} добавлено в зоопарк\n";
    }

    public function listAnimals(): void
    {
        echo "=== Список животных в зоопарке ===\n";
        if (empty($this->animals)) {
            echo "В зоопарке пока нет животных\n";
            return;
        }

        foreach ($this->animals as $index => $animal) {
            echo ($index + 1) . ". " . $animal->getInfo() . "\n";
        }
    }

    public function animalSounds(): void
    {
        echo "=== Звуки животных в зоопарке ===\n";
        if (empty($this->animals)) {
            echo "В зоопарке пока нет животных\n";
            return;
        }

        foreach ($this->animals as $animal) {
            $animal->makeSound();
        }
    }

    public function getAnimalCount(): int
    {
        return count($this->animals);
    }
}