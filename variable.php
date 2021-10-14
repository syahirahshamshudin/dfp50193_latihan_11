<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
    <style>
        * {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande';
            font-size: 18pt;
        }
    </style>
</head>
<body>
    <?php
    $jab = 'Jabatan Teknologi Maklumat dan Komunikasi';
    echo tajuk();
    ?>
    
</body>
</html>

<?php
function tajuk() {
    global $jab; //global tarik declaration luar masuk dalam tajuk @ panggil variable luar
    //local hanya panggil variable di dalam sahaja
    echo "<h1>$jab</h1>";
}