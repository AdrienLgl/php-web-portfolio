<?php

$datas = require 'data/gallery.php';

function findOneById(int $id): array{
    global $datas;
    foreach($datas as $data){
        if ($id == $data['id']){
            return $data;
        }
       
    }
    return false;
}



function getCount($datas): int{
    $a = count($datas['id']);
    return $a;

}


function findPaged(int $limit, int $offset = 0): array{

    $tableau = [];
    $compteur = 0;
    global $datas;
    foreach ($datas as $data){

        $compteur = $compteur + 1;
            $tableau[] = $data;

        if ($compteur>=$limit ){
            
        break;

        }

    }

    return $tableau;

}


function findLatest(int $limit): array{

}






?>