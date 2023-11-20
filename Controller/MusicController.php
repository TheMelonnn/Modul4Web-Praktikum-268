<?php

#namespace
namespace Controller;

include "Traits/ResponseFormatter.php";
include "Traits/ControllerAttribute.php";
include "Controller/MusicMethod.php";

use MusicMethod;
use traits\ResponseFormatter;
use traits\ControllerAttribute;

#inheritance
#class
class MusicController extends MusicMethod
{
    use ResponseFormatter;
    use ControllerAttribute;

    #magic method
    public function __construct()
    {
        $this->controllerName = "Music Controller";
    }

    #method
    public function getAllMusic()
    {
        $dummyData = [
            ["name" => "Racing Into the Night", "genre" => "Pop"],
            ["name" => "Lemon", "genre" => "Pop"],
            ["name" => "Orange!", "genre" => "Pop"],
            ["name" => "Just The Two of Us", "genre" => "Jazz"],
            ["name" => "Stay With Me", "genre" => "Pop"],
            ["name" => "Happy!", "genre" => "Lofi"]
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "music" => $dummyData
        ];

        return $this->responseFormatter(200, "Success", $response);
    }

    #method
    public function getTotalMusic()
    {
        $dummyData = [
            ["name" => "Racing Into the Night", "genre" => "Pop"],
            ["name" => "Lemon", "genre" => "Pop"],
            ["name" => "Orange!", "genre" => "Pop"],
            ["name" => "Just The Two of Us", "genre" => "Jazz"],
            ["name" => "Stay With Me", "genre" => "Pop"],
            ["name" => "Happy!", "genre" => "Lofi"]
        ];

        $totalMusic = count($dummyData);

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "total_music" => $totalMusic
        ];

        return $this->responseFormatter(200, "Success", $response);
    }

    #method
    public function getMusicGenre($genre)
    {
        $dummyData = [
            ["name" => "Racing Into the Night", "genre" => "Pop"],
            ["name" => "Lemon", "genre" => "Pop"],
            ["name" => "Orange!", "genre" => "Pop"],
            ["name" => "Just The Two of Us", "genre" => "Jazz"],
            ["name" => "Stay With Me", "genre" => "Pop"],
            ["name" => "Happy!", "genre" => "Lofi"]
        ];

        $filteredData = [];
        foreach ($dummyData as $dummy) {
            if ($dummy["genre"] == $genre) {
                $filteredData[] = $dummy;
            }
        }

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "music" => $filteredData
        ];

        return $this->responseFormatter(200, "Success", $response);
    }

}
