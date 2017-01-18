<?php

require 'User.php';
// équivalent à
// require  __DIR__.'/User.php';

class Client extends User {

    public function buy(){
      return;
    }
}
