<?php

namespace App\Controllers;
session_start();

use \Core\Controller;



class Language extends Controller {
  public function changeAction()
  {
    if( isset( $_POST['language'] ) ){
      $_SESSION['Language'] = $_POST['language'];

      header("Location: /");
    }
    else{
      header("Location: /");
    }
  }
}


/* End of file Language.php */
