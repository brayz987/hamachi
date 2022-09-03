<?php 

require './DataBase1.php';
require './DataBase2.php';

extract($_POST);


function saveDatabase1($name,$lastname)
{
    $db = new Database1(); {
        $consulta = $db->prepare('INSERT INTO form (`name`, `lastname`) VALUES (:name, :lastname)');
        $consulta->execute(array(
            ':name' => $name,
            ':lastname' => $lastname,
        ));
    }
    $db = null;
}

function saveDatabase2($email,$phone)
{
    $db = new Database2(); {
        $consulta = $db->prepare('INSERT INTO form2 (`email`, `phone`) VALUES (:email, :phone)');
        $consulta->execute(array(
            ':email' => $email,
            ':phone' => $phone,
        ));
    }
    $db = null;
}



saveDatabase1($name,$lastname);
saveDatabase2($email,$phone);
?>