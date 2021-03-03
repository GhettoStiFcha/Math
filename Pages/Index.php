<?php

require($_SERVER['DOCUMENT_ROOT'] ."/vendor/autoload.php");

use Contracts\Logic;

$logic = new Logic();

$result = '';

if(!empty($_POST)){
    $result = $logic->startThinking();
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="addition">
        <form method="POST">
            <div class="form-box">
                <input name="argument-a1" type="text" placeholder="a1">+
                <input name="argument-b1" type="text" placeholder="b1">i
                <select name="operation">
                    <option value="addition">+</option>
                    <option value="subtraction">-</option>
                    <option value="multiplication">*</option>
                    <option value="division">/</option>
                </select>
                <input name="argument-a2" type="text" placeholder="a2">+
                <input name="argument-b2" type="text" placeholder="b2">i
                <p>=</p>
                <div class="result"><?=$result?></div>
            </div>
            <input class="submit" type="submit" value="рассчитать">
        </form>
    </div>
</body>
</html>