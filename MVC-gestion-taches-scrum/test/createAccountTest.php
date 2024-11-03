<?php
$entityManager = require_once __DIR__."/../config/bootstrap.php";
$user=new App\UserStory\CreateAccount($entityManager);

try {
    $user->execute("", "dd", "");
}catch (\Exception $e){
    echo $e->getMessage();
}

echo PHP_EOL;

try {
    $user->execute("zizi","dephong","1233");
}catch (\Exception $e){
    echo $e->getMessage();
}

echo PHP_EOL;

try {
    $user->execute("r","dephong@gmail.com","de");
}catch (\Exception $e){
    echo $e->getMessage();
}