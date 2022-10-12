<?php

if (isset($_SESSION['user']))
{
echo "<a href='/login'>Выйти</a>";
} else {
    echo "<a href='/login'>Войти</a>";
}