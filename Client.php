<?php

require 'User.php';
// équivalent à
// require  __DIR__.'/User.php';

class Client extends User {

    public function buy(){
      return;
    }
}

// Test
// $client = new Client("id3", "robert@deni.ro", date('d/m/Y', time()));
// var_dump($client);
