<?php
//multi-dimensional arrays
$blogs = [
    'blog1' => [
        'name' => 'mario party',
        'author' => 'mario',
        'content' => 'lorem',
        'likes' => 30
    ],
    'blog2' => [
        'name' => 'mario kart cheats',
        'author' => 'toad',
        'content' => 'lorem',
        'likes' => 26
    ],
    'blog3' => [
        'name' => 'zelda hidden',
        'author' => 'link',
        'content' => 'lorem',
        'likes' => 18
    ]
];
// print_r($blogs);
// echo count($blogs);
$popped = array_pop($blogs);
print_r($popped);
