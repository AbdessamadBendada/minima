<?php

class Home{

  function index()
  {
    $this->view("home");
    // echo "Home page index method";
  }

  function view($view)
  {
    if(file_exists( "../app/views/". $view .".php" ))
    {
      include "../app/views/". $view .".php";
    }else{
      include "../app/views/404.php";
    }
  }
}
