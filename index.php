<?php
include "Controller/MusicController.php";

use Controller\MusicController;

$musicController = new MusicController;

echo $musicController->getAllMusic();
echo ("\n\n");

echo $musicController->getTotalMusic();
echo ("\n\n");

echo $musicController->getMusicGenre("Pop");
