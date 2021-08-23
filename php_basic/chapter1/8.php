<?php
$ninjas = ['linh', 'mai', 'dao', 'ngoc'];
// for ($i = 0; $i < count($ninjas); $i++) {
//     echo $ninjas[$i] . "<br>";
// }
// foreach ($ninjas as $ninja) {
//     echo $ninja . "<br>";
// }
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
foreach($blogs as $blog){
    print_r($blog);
}