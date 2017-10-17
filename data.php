<?php

  declare(strict_types=1);


  $currentDate = date('l, F d, Y');


  // This is the file where you can keep all your data such as articles and
  // authors.


  // All the data of the posts are stored in the array below
$posts = [
    [
        'author' => ['name' => 'Master Yoda', 'id' => '001'],
        'headline' => 'Tatooine kessel ackbar solo lando calrissian - Antilles ackbar moff',
        'title' => 'Feature Writer',
        'content' => 'Do. Or do not. There is no try. Also, watch out for the seagulls.
                      Or they will poke you in the..',
        'release' => '2017-10-17',
        'profilePic' => 'images/yoda.png',
        'sharedImg' => 'images/pic1.jpeg',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],
    [
        'author' => ['name' => 'Luke Skywalker', 'id' => '002'],
        'headline' => 'K-3po organa han leia - Skywalker palpatine baba',
        'title' => 'Contributing Columnist',
        'content' => 'I am a Jedi, like my father before me. I am also a big boy
                      who can handle himself...',
        'release' => '2017-03-22',
        'profilePic' => 'images/luke.png',
        'sharedImg' => 'images/pic2.png',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],
    [
        'author' => ['name' => 'Jabba the Hutt', 'id' => '003'],
        'headline' => 'Antilles moff leia darth luke sebulba',
        'title' => 'Editor in Chief',
        'content' => 'Solo! Solo! Too Nakma Noya Solo! Poh N’wah dweepay?
                    Han ma boo-kee, keelee ka-lya dooka...',
        'release' => '2017-10-03',
        'profilePic' => 'images/jabba.jpg',
        'sharedImg' => 'images/pic3.jpg',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],
    [
        'author' => ['name' => 'Darth Vader', 'id' => '005'],
        'headline' => 'Anakin ahsoka jade jango kit windu skywalker',
        'title' => 'Sports Reporter',
        'content' => 'I find your lack of faith rather pleasing. But do consider...',
        'release' => '2017-10-14',
        'profilePic' => 'images/vader.png',
        'sharedImg' => 'images/pic4.jpg',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)

    ],
    [
        'author' => ['name' => 'Han Solo', 'id'=> '004'],
        'headline' => 'Organa skywalker antilles darth wedge',
        'title' => 'Intern',
        'content' => 'You’ve never heard of the Millennium Falcon?
                        It’s the ship that made the Kessel run in less than...',
        'release' => '2017-05-19',
        'profilePic' => 'images/han.png',
        'sharedImg' => 'images/pic5.jpg',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],
    [
        'author' => ['name' => 'Jabba the Hutt', 'id' => '003'],
        'headline' => 'Mothma skywalker antilles k-3po boba tatooine',
        'title' => 'Editor in chief',
        'content' => 'Wadja da boolya ra Moy ka cheesa crispa Greedo ra Moy ka cheesa
                      ra Moy ka cheesa crispa Greedo...',
        'release' => '2017-10-03',
        'profilePic' => 'images/jabba.jpg',
        'sharedImg' => 'images/pic6.jpg',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],
    [
        'author' => ['name' => 'Luke Skywalker', 'id' => '002'],
        'headline' => 'Darth organa kit darth - Calrissian obi-wan darth',
        'title' => 'Contributing Columnist',
        'content' => 'I like turtles, and grapes, and pasta,
                      like my father before me...',
        'release' => '2017-08-22',
        'profilePic' => 'images/luke.png',
        'sharedImg' => 'images/pic7.png',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],
    [
        'author' => ['name' => 'Master Yoda', 'id' => '001'],
        'headline' => 'Ventress fett antilles wampa palpatine calamari moff hutt',
        'title' => 'Feature Writer',
        'content' => 'When nine hundred years old you reach...',
        'release' => '2017-06-03',
        'profilePic' => 'images/yoda.png',
        'sharedImg' => 'images/pic8.jpg',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],
    [
        'author' => ['name' => 'Han Solo', 'id'=> '004'],
        'headline' => 'Yoda anakin kenobi hutt boba bespin',
        'title' => 'Intern',
        'content' => 'Im being paid way to little for this gig...',
        'release' => '2017-09-21',
        'profilePic' => 'images/han.png',
        'sharedImg' => 'images/pic9.png',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],
    [
        'author' => ['name' => 'Darth Vader', 'id' => '005'],
        'headline' => 'Darth padme yavin darth bespin solo darth skywalker lars',
        'title' => 'Sports Reporter',
        'content' => 'Disturbing. That is how i find your lack of faith.
                      Disturbing. That is how i find your lack of...',
        'release' => '2017-07-19',
        'profilePic' => 'images/vader.png',
        'sharedImg' => 'images/pic10.png',
        'thumb' => 'images/like.png',
        'likes' => rand(10, 99)
    ],

        ];
