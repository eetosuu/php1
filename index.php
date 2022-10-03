<?php
while (true) {
    $res = readline("В каком году произошло крещение Руси?\n");
    switch ($res) {
        case 810:
            echo "Неверно\n";
            break 2;
        case 990:
            echo "Верно\n";
            break 2;
        case 740:
            echo "Неверно\n";
            break 2;
    }
}