<?php

class DBException extends Exception{

    public function action(){
        echo $this->getMessage();
        die;
    }

}