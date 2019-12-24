<?php

 class Router {
     private $path;
     private $routes;


     public function __construct() {
         include './routes.php';
         
         //path from user utl example/gallery, /login or /
         $this->path =  $_SERVER['REQUEST_URI'];
         
         //array routes from routes.php
         $this->routes = $dataRoutes;
     }
     public function  executeController() {
         //get array route from routes.php by path
         //example/gallery, /login or /
         $dataController = $this->routes[$this->path];
         
         
         //get full path file controller
         //example ./controller/HomeController.php
         
         $pathController = $dataController['path'];
         
         //get name class in controller file
         //HomeController
         $nameController = $dataController['controller'];
         
         //get name function for execute
         $actionController = $dataController['action'];
         
         //connect controller file
         include $pathController;
         
         //create controller object by class
         $Controller = new $nameController();
         
         //execute controller funtion by name
         $Controller->$actionController();
         
     }
 }