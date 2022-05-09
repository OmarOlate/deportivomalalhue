<?php

    class Main extends Controller{
        function __construct()
        {
            parent::__construct();
            $this->view->render('main/home');
           // echo "<p> Controlador Main </p>";
        }
        //function saludo(){
            //echo "<p> Ejecutaste el metodo saludo </p>";
        //}
    }

?>