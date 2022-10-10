<?php
$firstMultiplier = [2, 4, 6, 8, 11, 3, 7, 12, 34, 124];
$secondMultiplier = [666, 37, 18, 94, 44, 71, 52, 51, 91, 26];

for ($index = 0; $index < count($firstMultiplier); $index++) {
    var_dump($firstMultiplier[$index] * $secondMultiplier[$index]);
};

$name = readline("Как вас зовут?\n");
$wishes = ['счастья', 'здоровья', 'воображения', 'успеха'];
$epithet = ['космического', 'бесконечного', 'безудержного', 'отличного'];
$congratulation = [];
for ($i = 1; $i <= 3; $i++) {
    $wishesRandom = array_rand($wishes);
    $epithetRandom = array_rand($epithet);
    $value = $epithet[$epithetRandom] . ' ' . $wishes[$wishesRandom];
    $congratulation[] = $value;
    unset($wishes[$wishesRandom]);
    unset($epithet[$epithetRandom]);
}
$stringCongratulation = implode(', ', $congratulation);

echo 'Дорогой ' . $name . ', от всего сердца поздравляю тебя с днем рождения, желаю ' . $stringCongratulation . '!';
