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

    /**
         * @return BooksController
         */
    public static function getControllerBooks()
    {
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return $controller;
    }
}