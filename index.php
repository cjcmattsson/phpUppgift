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
    <button onclick="topFunction()" id="myBtn" title="Go to top">Hate scrolling?
      <br> Press me - Go to <br> the top!</button>

    <header>
        <h1>The Tatooine Times</h1>

     <div class="currentDate"><?php echo $currentDate ?></div>

     <div class="email">
         <!-- <p> Add some cool function-thingy</p> -->
     </div>
    </header>
    <div class="menu">
        <ul>
            <li>News</li>
            <li>Politics</li>
            <li>Sports</li>
            <li>Opinion</li>
            <li>Global</li>
            <li>Science</li>
            <li>Galaxy</li>
            <li>Force</li>
            <li>Weather</li>
            <li>Horses</li>
        </ul>
    </div>

    <div class="fullPage">


<div class="banner"> <img src="images/banner.png" alt=""></div>


    <div class="wrapper">


        <?php foreach ($posts as $post): ?>
            <div class="post">

                    <div class="sharedImg"> <img src="<?php echo $post['sharedImg'];?>" alt=""> </div>

                <div class="shared">

                    <div class="text">

                        <h2 class="headline"> <?php echo $post['headline']; ?></h2>
                        <div class="content"> <?php echo $post['content']; ?></div>

                        <div class="likeCounter">
                            <img class="thumb" src="<?php echo $post['thumb'];?>" alt="">
                            <p class="count"> <?php echo $post['likes'];?></p>
                        </div>


                    </div>

                    <div class="profile">
                        <div class="profilePic"> <img class="profImg" src="<?php echo $post['profilePic']; ?>"></div>
                        <h3 class="author"> <?php echo $post['author']['name'];?></h3>
                        <h4 class="title"><?php echo $post['title'];?></h4>
                        <div class="release"> <?php echo $post['release']; ?></div>
                    </div>

                </div>


             </div>
        <?php endforeach; ?>



    </div>

    <div class="banner2">
        <div class="innerBanner">
            <img src="images/innerBanner2.png" alt="">
        </div>
        <div class="innerBanner">
            <img class="innerBannerLower" src="images/innerBanner1.jpg" alt="">
        </div>
    </div>

    </div>

<script src="functionsJS.js"></script>
<script src="banner.js">

</script>
</body>
</html>
