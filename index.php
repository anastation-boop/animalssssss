<?php

require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Zoo.php';

echo "=== Демонстрация работы классов ===\n";


$dog1 = new Dog("Барсик", 3, "Лабрадор");
$dog2 = new Dog("Рекс", 5, "Овчарка");
$cat1 = new Cat("Мурка", 2, "Серый");
$cat2 = new Cat("Васька", 4, "Рыжий");

$zoo = new Zoo();

$zoo->addAnimal($dog1);
$zoo->addAnimal($dog2);
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);

echo "\n";
$zoo->listAnimals();

echo "\n";
$zoo->animalSounds();

echo "\n";
echo "Всего животных в зоопарке: " . $zoo->getAnimalCount() . "\n";

echo "\n=== Дополнительные примеры ===\n";
$dog1->makeSound();
$cat2->makeSound();