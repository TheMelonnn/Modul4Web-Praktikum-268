<?php

#namespace
namespace traits;

#traits
trait ControllerAttribute
{
    var $controllerName;

    public function getControllerAttribute()
    {
        return [
            "ControllerName" => $this->controllerName,
        ];
    }
}