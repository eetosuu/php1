<?php

require 'User.php';
require 'Task.php';
require 'TaskService.php';
require 'Comment.php';


$user = new User('Никита', 'n@g.com');
$task = new Task($user);

TaskService::addComment($user, $task, 'коммент');

var_dump($task);
//   object(Task)#2 (2) {
//     ["description":"Task":private]=>
//     uninitialized(?string)
//     ["dateCreated":"Task":private]=>
//     uninitialized(?int)
//     ["dateUpdated":"Task":private]=>
//     uninitialized(?int)
//     ["dateDone":"Task":private]=>
//     uninitialized(?string)
//     ["priority":"Task":private]=>
//     uninitialized(?int)
//     ["isDone":"Task":private]=>
//     uninitialized(?bool)
//     ["comment":"Task":private]=>
//     object(Comment)#3 (3) {
//       ["author":"Comment":private]=>
//       object(User)#1 (3) {
//         ["username":"User":private]=>
//         string(12) "Никита"
//         ["email":"User":private]=>
//         string(7) "n@g.com"
//         ["sex":"User":private]=>
//         uninitialized(?string)
//         ["age":"User":private]=>
//         uninitialized(?int)
//         ["isActive":"User":private]=>
//         bool(true)
//       }
//       ["task":"Comment":private]=>
//       *RECURSION*
//       ["text":"Comment":private]=>
//       string(17) "мама Димы"
//     }
//     ["user":"Task":private]=>
//     object(User)#1 (3) {
//       ["username":"User":private]=>
//       string(12) "Никита"
//       ["email":"User":private]=>
//       string(7) "n@g.com"
//       ["sex":"User":private]=>
//       uninitialized(?string)
//       ["age":"User":private]=>
//       uninitialized(?int)
//       ["isActive":"User":private]=>
//       bool(true)
//     }
//   }