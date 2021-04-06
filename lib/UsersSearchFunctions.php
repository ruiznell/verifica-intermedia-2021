
<?php


function searchTextNome($catena)
{
    return function($objet) use ($catena)
    {
        $result=stripos($objet->getFirstName(), $catena) !==false;
        return $result;
    };
}

function searchTextCognome($catena)
{
    return function($objet) use ($catena)
    {
        $result=stripos($objet->getLastName(), $catena) !==false;
        return $result;
    };
}


function searchTextEdad($edad)
{
    return function($objet) use ($edad)
    {
        $result=stripos($objet->getAge(), $edad) !==false;
        return $result;
    };
}


?>
