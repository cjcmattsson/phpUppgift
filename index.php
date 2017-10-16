<?php

  declare(strict_types=1);

  require __DIR__.'/data.php';
  require __DIR__.'/functions.php';

  // This is the file where you can keep your HTML markup. We should always try to
  // keep us much logic out of the HTML as possible. Put the PHP logic in the top
  // of the files containing HTML or even better; in another PHP-only file.
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

    <div class="wrapper">

        <!-- STRUKTUREN FÖR POSTSTEN SKALL SE UT SOM ENLIGT NEDAN
        LÖS MED PHP, SOM NEDAN!

         <div class="post">
            <div class="name"></div>
            <div class="content"></div>
            <div class="date"></div>
            <div class="profPic"></div>
            <div class="sharedImg"></div>

        </div> -->


        <?php foreach ($posts as $id => $post): ?>
            <div class="post">
                <div class="name"> <?php echo $post['name'];?></div>
                <div class="content"> <?php echo $post['content']; ?></div>
                <div class="profilePic"> <?php echo $post['profilePic']; ?></div>
                <div class="sharedImg"> <?php echo $post['sharedImg']; ?></div>
                <div class="release"> <?php echo $post['release']; ?></div>
             </div>
        <?php endforeach; ?>



    </div>


</body>
</html>
