<?php

$data = require('data/gallery.php');

function findOneByID($id){
	global $data;

	foreach ($data as $gallery){
		if($id==$gallery['id']){
			return $gallery;
		}
	}
	return false;
}


function getCount($data){
	global $data;
	return count ($data);
}


 function findPaged($limit, $offset=0){
 	global $data;
    $compteur = 0;
    $tableau = [];

    	foreach ($data as $photo){
        $tableau[]=$photo;
        $compteur ++;
        if ($compteur == $limit)
        {
            break;
        }
    }
    return $tableau;     
}