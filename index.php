<?php
require './class/User.php';
require './lib/UsersSearchFunctions.php';
require './lib/JSONReader.php';
require './lib/sanitizeSurname.php';


$personeList = JSONReader('./dataset/users-management-system.json');

$userJson=[];


foreach ($personeList as $valore){

    $persona=new User();
    $persona->setUserId($valore['id']);
    $persona->setFirstName($valore['firstName']);
    $persona->setLastName(cambia_mayus($valore['lastName']));
    $persona->setEmail($valore['email']);
    $persona->setBirthday($valore['birthday']);

$userJson[]=$persona;


}



if(isset($_GET['nome']) && trim($_GET['nome'])!==''){
    $name=$_GET['nome'];
    $userJson = array_filter($userJson, searchTextNome($name));
        
            
    }else{
        $name='';
    }

if(isset($_GET['cognome']) && trim($_GET['cognome'])!==''){
    $apellido=cambia_mayus($_GET['cognome']);
    $userJson = array_filter($userJson, searchTextCognome($apellido));
            
                
    }else{
        $apellido='';
    }

if (isset($_GET['età'])&& trim($_GET['età']) !== '')
    {
        $edad=$_GET['età'];
        $userJson=array_filter($userJson , searchTextEdad($edad));
    }
    else
    {
        $edad='';
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        input.form-control {
            padding: 2px;
            line-height: 100%;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>

    <header class="container-fluid bg-secondary text-light p-2">
        <div class="container">
            <h1 class="display-3 mb-0">
                User management system
            </h1>
            <h2 class="display-6">user list</h2>
        </div>
    </header>
    <div class="container">
    <form action="index.php" method="get">
        <table class="table">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>cognome</th>
                <th>email</th>
                <th cellspan="2">età</th>
            </tr>
            <tr>
                <th>
                    <input class="form-control" type="text" name="id" >
                </th>

                <th>
                    <input class="form-control" type="text" name="nome" value="<?=$name?>">
                </th>

                <th>
                    <input class="form-control" type="text" name="cognome"value="<?=$apellido?>">
                </th>

                <th>
                    <input class="form-control" type="text" name="email"value=" ">
                </th>

                <th>
                    <input class="form-control" type="text" name="età"value="<?=$edad?> ">
                </th>
                <th>
                    <button type="submit" class="btn btn-primary">cerca</button>
                </th>
            </tr>

            </form>

            <?php foreach ($userJson as $key => $valore){?>
            <tr>
                <td><?= $valore->getUserId() ?></td>
                <td><?= $valore->getFirstName() ?></td>
                <td><?= $valore->getLastName() ?></td>
                <td><?= $valore->getEmail() ?></td>
                <td><?= $valore->getAge() ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
   
</body>

</html>