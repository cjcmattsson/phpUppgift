<?php

  declare(strict_types=1);

  require __DIR__.'/data.php';


  function sortByDate ($a, $b) {

      return strtotime($a['release']) < strtotime($b['release']);
  }

  usort($posts, 'sortByDate');





  // This is the file where you can keep all your functions.
