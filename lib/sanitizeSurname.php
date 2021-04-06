<?php



function cambia_mayus($param)
{
    $param=strtolower($param);
    $param=ucwords($param);

    
    return $param;

}