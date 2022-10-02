<?php
$name = readline("Как вас зовут?\n");
$age = readline("Сколько вам лет?\n");
echo "Вас зовут $name, вам $age лет\n";
$task1 = readline("Какая задача стоит перед вами сегодня?\n");
$task1Time = readline("Сколько примерно времени эта задача займет?\n");
$task2 = readline("Какая задача стоит перед вами сегодня?\n");
$task2Time = readline("Сколько примерно времени эта задача займет?\n");
$task3 = readline("Какая задача стоит перед вами сегодня?\n");
$task3Time = readline("Сколько примерно времени эта задача займет?\n");
$tasksTime = $task1Time + $task2Time + $task3Time;
echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $task1 ($task1Time ч)\n
- $task2 ($task2Time ч)\n
- $task3 ($task3Time ч)\n
Примерное время выполнения плана = $tasksTime";
