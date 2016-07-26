<?php

$game = ['Mass Effect', 'Super Mario Bro', 'Zelda', 'Fallout', 'Metal Gear'];

//sort($game);
//rsort($game);

usort($game, function($a, $b) {
    return $b <=> $a;
});

var_dump($game);
