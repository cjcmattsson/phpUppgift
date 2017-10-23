<?php

  declare(strict_types=1);

  // Getting the syntax/data from both documents below to use in
  // this document.
  require __DIR__.'/php/data.php';
  require __DIR__.'/php/functions.php';


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
      <link rel="stylesheet" href="styles/style.css">
      <title>Document</title>
    </head>
    <body>

        <!-- Button to scroll up to the top of the page,
             appears when page is scrolled X number of pixels -->
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            Hate scrolling? <br> Press me - Go to <br> the top!
        </button>

        <!-- Header and date -->
        <header>
            <h1>The Tatooine Times</h1>
            <div class="currentDate"><?php echo $currentDate ?></div>
        </header>

        <!-- The menu-items are stored in the UL below-->
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

        <!-- This is where all content below the header/menu goes -->
        <div class="fullPage">

            <!-- The left banner -->
            <div class="banner1">
                <img src="images/banner.png" alt="">
            </div>

            <!-- All content that goes in the news feed here.
                 Using a foreach-loop so as not having to write out all
                 divs needed for each and every news-item-->
            <div class="wrapper">
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <div class="sharedImg">
                            <img src="<?php echo $post['sharedImg'];?>" alt="">
                        </div>
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
                                <div class="profilePic">
                                    <img class="profImg" src="<?php echo $post['profilePic']; ?>">
                                </div>
                                <h3 class="author"> <?php echo $post['author']['name'];?></h3>
                                <h4 class="title"><?php echo $post['title'];?></h4>
                                <div class="release"> <?php echo $post['release']; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- The right banner -->
            <div class="banner2">
                <div class="innerBanner">
                    <img src="images/innerBanner2.png" alt="">
                </div>
                <div class="innerBanner">
                    <img class="innerBannerLower" src="images/innerBanner1.jpg" alt="">
                </div>
            </div>
            </div>

        <!-- Javascript used to sort all news-items in order by date-->
        <script src="jsScripts/functionsJS.js"></script>

        <!-- Javascript used to make left banner scroll down with page and also
             stick to the starting position when scrolling back up -->
        <script src="jsScripts/banner.js"></script>
    </body>
</html>
