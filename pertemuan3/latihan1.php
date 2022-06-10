<?php
// pengulangan
// for | while | do.. while
// foreach : pengulangan khusus array

/* for ( $i = 0; $i <5; $i++ )
{
    echo "Hello World! <br>";
} */

/* $i = 0;
while ( $i < 5  ){
    echo "Hello World <br>";
$i++;
} */

// contoh true di ulang 5x */
/* $i = 1;
do{
  echo "Hello World! <br>";
    $i++;
} while ( $i < 5 ); */

// contoh false di ulang 5x */
/* $i = 6;
do{
  echo "Hello World! <br>";
    $i++;
} while ( $i < 5 ); */
 
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1 pertemuan 3</title>
    <style>
        .warna-baris {
            background-color: grey;
            color: white;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <=3; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?php echo "$i,$j"; ?> </td>
                <!-- <td><?= "$i,$j";?></td> bisa pilih salah satu ini atau atas ^^-->
                <?php endfor; ?>
        </tr>
    <?php endfor; ?>    
</table>

<!-- batas while -->
    <?php 
    $i = 1;
     while ( $i < 5 ) :?>
        <?php echo "yg ^^ pake for, vv pake while <br>"; ?>
        <?php $i++; ?>
     <?php endwhile; ?>

<table border="1" cellpadding="10" cellspacing="0">
    <?php $i = 1; while ($i <= 5 ) : ?>
        <?php if ($i % 2 == 0) : ?>
        <tr class="warna-baris">
            <?php else : ?>
                <tr></tr>
            <?php endif; ?>
            <?php $r = 0;
             while ($r < 5) : ?>
                <td>
                <?= "$i,$r";  ?>
                </td>
                <?php $r++ ?>
            <?php endwhile; ?>
        </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
</table>

</body>
</html>