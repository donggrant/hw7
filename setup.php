<?php

$grid = array();

if($_GET["rows"] * $_GET["columns"] > 4){
    for($i = 0; $i < $_GET["rows"]; $i++){
        for($j = 0; $j < $_GET["columns"]; $j++){
            if(rand() % 2 === 1){
                array_push($grid, [$i, $j]);
            }
        }
    }
} else {
    for($i = 0; $i < $_GET["rows"]; $i++){
        for($j = 0; $j < $_GET["columns"]; $j++){
            array_push($grid, [$i, $j]);
        }
    }
}

header('Content-type: application/json');
echo json_encode($grid);

//header('Location: index.html');

?>