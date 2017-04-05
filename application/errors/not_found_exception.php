<?php

class NotFoundException extends Exception{
    
    public function action(){
        header('Location:/404', 404);
        die;
    }

}