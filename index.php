<?php
// 6 kyu Pyramid Array
// Напишите функцию, которая при задании числа >= 0 
// возвращает массив подмассивов возрастающей длины.
// pyramid(0) => [ ]
// pyramid(1) => [ [1] ]
// pyramid(2) => [ [1], [1, 1] ]
// pyramid(3) => [ [1], [1, 1], [1, 1, 1] ]
// Примечание: подмассивы должны быть заполнены единицами


function pyramid(int $n) {
    $result = [];

    for($i = 1; $i <= $n; $i++) {
        array_push($result, array_pad(array(), $i, 1));
    }        

    return $result;   
}


var_dump(pyramid(2));