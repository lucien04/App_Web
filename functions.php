<?php

function adduser($pdo, $login, $password) {
    $sql = "INSERT INTO `users`(`login`,`password`) VALUES (:login , :password)";

    $req = $pdo->prepare($sql);
    // lier la variable sql avec une valeur php
    $req->bindValue(':login' ,$login, PDO::PARAM_STR);
    $req->bindValue(':password' ,$password, PDO::PARAM_STR);


    try {
        // exécuter la requête
        $req->execute();
        // renvoie le nombre d'enregistrement créé.
        return $req->rowCount();
    }catch(PDOException $e){
        var_dump($e->getMessage());
        return false;
    }
}



function user_infos($pdo,$users)
{
    $sql = "SELECT
    `login`, 
    `password`
FROM
    `users`
LEFT JOIN `incomes` ON `users`.`user_id` = `incomes`.`user_id`
LEFT JOIN `expenses` ON `users`.`user_id`=`expenses`.`user_id` 
WHERE `users`.`user_id`= ?";

$req = $pdo->prepare($sql);

$req->execute(array($users));

$user_infos = $req->fetchAll(PDO::FETCH_ASSOC);

return $user_infos;
}

