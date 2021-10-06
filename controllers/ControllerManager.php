<?php

class ControllerManager
{

    /**
     * @return GenesisController
     */
    public static function getControllerGenesis()
    {
        require_once('controllers/GenesisController.php');
        $controller = new GenesisController();
        return $controller;
    }
}