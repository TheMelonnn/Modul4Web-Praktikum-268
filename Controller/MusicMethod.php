<?php

#abstract Class
abstract class MusicMethod {
    #abstract Method
    abstract public function getAllMusic();
    abstract public function getTotalMusic();
    abstract public function getMusicGenre($genre);
}