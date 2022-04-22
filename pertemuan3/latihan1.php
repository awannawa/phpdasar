<?php
// pengulangan
// for | while | do.. while
// foreach : pengulangan khusus array

/* for ( $i = 0; $i <5; $i++ )
{
    echo "Hello World! <br>";
} */

/* $i = 0;
while ( $i <5  ){
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
    <title>Document</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <=3; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <=5; $j++) : ?>
                <td><?php echo "$i,$j"; ?>
                <!-- <td><?= "$i,$j";?></td> bisa pilih salah satu ini atau atas ^^-->
                <?php endfor; ?>
        </tr>
    <?php endfor; ?>    

</table>


</body>
</html>
