<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <p class="title_task">Задание 1. Таблица истинности PHP</p>
        <table class="center" border="1" cellpadding="5" cellspacing="5">
            <thead>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>!A</th>
                    <th>A || B</th>
                    <th>A && B</th>
                    <th>A xor B</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0</th>
                    <th>0</th>
                    <?php
                    $a = 0;
                    $b = 0;
                    ?>
                    <td><?= var_dump(!$a) ?></td>
                    <td><?= var_dump($a || $b) ?></td>
                    <td><?= var_dump($a && $b) ?></td>
                    <td><?= var_dump($a xor $b) ?></td>
                </tr>
                <tr>
                    <th>0</th>
                    <th>1</th>
                    <?php
                    $a = 0;
                    $b = 1;
                    ?>
                    <td><?= var_dump(!$a) ?></td>
                    <td><?= var_dump($a || $b) ?></td>
                    <td><?= var_dump($a && $b) ?></td>
                    <td><?= var_dump($a xor $b) ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <th>0</th>
                    <?php
                    $a = 1;
                    $b = 0;
                    ?>
                    <td><?= var_dump(!$a) ?></td>
                    <td><?= var_dump($a || $b) ?></td>
                    <td><?= var_dump($a && $b) ?></td>
                    <td><?= var_dump($a xor $b) ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <th>1</th>
                    <?php
                    $a = 1;
                    $b = 1;
                    ?>
                    <td><?= var_dump(!$a) ?></td>
                    <td><?= var_dump($a || $b) ?></td>
                    <td><?= var_dump($a && $b) ?></td>
                    <td><?= var_dump($a xor $b) ?></td>
                </tr>
            </tbody>
        </table>

        <br>
        <hr>
        <br>

        <p class="title_task">Задание 2. Таблица сравнения</p>



        <p class="description">гибкое сравнение ==</p>
        <table class="center" border="1" cellpadding="5" cellspacing="5">
            <thead>
                <tr>
                    <th></th>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th>-1</th>
                    <th>"1"</th>
                    <th>null</th>
                    <th>"php"</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>true</th>
                    <?php
                    $a = true;
                    ?>
                    <td><?php $b = true;
                        var_dump($a == $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a == $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a == $b); ?></td>
                </tr>
                <tr>
                    <th>false</th>
                    <?php
                    $a = false;
                    ?>
                    <td><?php $b = true;
                        var_dump($a == $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a == $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a == $b); ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <?php
                    $a = 1;
                    ?>
                    <td><?php $b = true;
                        var_dump($a == $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a == $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a == $b); ?></td>
                </tr>
                <tr>
                    <th>0</th>
                    <?php
                    $a = 0;
                    ?>
                    <td><?php $b = true;
                        var_dump($a == $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a == $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a == $b); ?></td>
                </tr>
                <tr>
                    <th>-1</th>
                    <?php
                    $a = -1;
                    ?>
                    <td><?php $b = true;
                        var_dump($a == $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a == $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a == $b); ?></td>
                </tr>
                <tr>
                    <th>"1"</th>
                    <?php
                    $a = "1";
                    ?>
                    <td><?php $b = true;
                        var_dump($a == $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a == $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a == $b); ?></td>
                </tr>
                <tr>
                    <th>null</th>
                    <?php
                    $a = null;
                    ?>
                    <td><?php $b = true;
                        var_dump($a == $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a == $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a == $b); ?></td>
                </tr>
                <tr>
                    <th>"php"</th>
                    <?php
                    $a = "php";
                    ?>
                    <td><?php $b = true;
                        var_dump($a == $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a == $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a == $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a == $b); ?></td>
                </tr>
            </tbody>
        </table>

        <br>

        <p class="description">жесткое сравнение === </p>
        <table class="center" cellpadding="5" cellspacing="5">
            <thead>
                <tr>
                    <th></th>
                    <th>true</th>
                    <th>false</th>
                    <th>1</th>
                    <th>0</th>
                    <th>-1</th>
                    <th>"1"</th>
                    <th>null</th>
                    <th>"php"</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>true</th>
                    <?php
                    $a = true;
                    ?>
                    <td><?php $b = true;
                        var_dump($a === $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a === $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a === $b); ?></td>
                </tr>
                <tr>
                    <th>false</th>
                    <?php
                    $a = false;
                    ?>
                    <td><?php $b = true;
                        var_dump($a === $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a === $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a === $b); ?></td>
                </tr>
                <tr>
                    <th>1</th>
                    <?php
                    $a = 1;
                    ?>
                    <td><?php $b = true;
                        var_dump($a === $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a === $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a === $b); ?></td>
                </tr>
                <tr>
                    <th>0</th>
                    <?php
                    $a = 0;
                    ?>
                    <td><?php $b = true;
                        var_dump($a === $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a === $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a === $b); ?></td>
                </tr>
                <tr>
                    <th>-1</th>
                    <?php
                    $a = -1;
                    ?>
                    <td><?php $b = true;
                        var_dump($a === $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a === $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a === $b); ?></td>
                </tr>
                <tr>
                    <th>"1"</th>
                    <?php
                    $a = "1";
                    ?>
                    <td><?php $b = true;
                        var_dump($a === $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a === $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a === $b); ?></td>
                </tr>
                <tr>
                    <th>null</th>
                    <?php
                    $a = null;
                    ?>
                    <td><?php $b = true;
                        var_dump($a === $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a === $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a === $b); ?></td>
                </tr>
                <tr>
                    <th>"php"</th>
                    <?php
                    $a = "php";
                    ?>
                    <td><?php $b = true;
                        var_dump($a === $b) ?></td>
                    <td><?php $b = false;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = 0;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = -1;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "1";
                        var_dump($a === $b); ?></td>
                    <td><?php $b = null;
                        var_dump($a === $b); ?></td>
                    <td><?php $b = "php";
                        var_dump($a === $b); ?></td>
                </tr>
            </tbody>
        </table>

        <br>
        <hr>
        <br>

        <p class="title_task">Выводы о сравнении в PHP:</p>

        <p>оператор "НЕ" "!" - инвертирует полученное значение</p>
        <p>оператор "И" "&&" - выводит истину, если оба операнда истинны, иначе выводит ложь</p>
        <p>оператор "ИЛИ" "||" - выводит истину, если один или все операнды истинны, иначе выводит ложь</p>
        <p>оператор "ИСКЛЮЧАЮЩЕЕ ИЛИ" "xor" - выводит истину, если только один из операндов истинен, иначе выводит ложь</p>

        <p>гибкое сравнение "==" сравнивает переменные по значению</p>
        <p>жесткое сравнение "===" - сравнивает переменные по значению и по типу</p>

    </div>

</body>
</html>
