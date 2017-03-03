<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="action.php" method="post">
            <p>Введите параметр 1: <input type="text" name="param_1" /></p>
            <p>Введите параметр 2: <input type="text" name="param_2" /></p>
            <p><input type="submit" /></p>
        </form>
        <div>
            <?php
            $param_1 = (int) $_POST['param_1'];
            $param_2 = (int) $_POST['param_2'];
            
            $result = $param_1 + $param_2;

            echo "Ответ: $param_1 + $param_2 = $result";
            ?>
        </div>
    </body>
</html>
