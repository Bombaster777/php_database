<?php

function t2()
{
    $query = select('SELECT * from cars');
    return $query;
}

function t3()
{

    $query = 'SELECT * FROM cars';
    $queryResult = select($query);
    $out = [];

    for ($i = 0; $i < count($queryResult); $i++) {
        if ($queryResult[$i]['cost'] > 100000) {
            $out[] = $queryResult[$i]['cars'];
        }
    }
    return $out;

}

function t4()
{
    $query = 'SELECT * FROM cars';
    $queryResult = select($query);
    $out = [];

    for ($i = 0; $i < count($queryResult); $i++) {

        $out[] = $queryResult[$i]['cars'];

    }
    return $out;
}

function t5()
{

    execQuery("INSERT INTO `cars`(`cars`, `image`, `cost`) VALUES ('Cadillac Escalade Platinum','http://elite.cars.ua/img/upload/cache/zc-1_iar-1_h-357_w-570_5ecd1aa8a55af0_68546755.jpg',47777)");

}

function t6()
{
    execQuery("UPDATE `cars` SET `cars`='Cadillac Escalade',`cost`= 47500 WHERE id = 45");

}

function t7()
{

}

function t8()
{
    $query = 'SELECT * FROM cars';
    $queryResult = select($query);
    $totalPrice = [];
    for ($i = 0; $i < count($queryResult); $i++) {
        $totalPrice[] = $queryResult[$i]['cost'];
    }
    return 'Full Price ' . array_sum($totalPrice);
}

function t9()
{
    $query = 'SELECT * FROM cars';
    $queryResult = select($query);
    $t = [];

    for ($i = 0; $i < count($queryResult); $i++) {
        $t[$queryResult[$i]['cars']] = $queryResult[$i]['cost'];
    }

    print_r($t);
}

function t10()
{
    execQuery('DELETE FROM `cars` where id = 45');

}
