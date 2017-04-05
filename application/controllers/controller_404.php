<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 01.04.17
 * Time: 11:57
 */

class Controller404 extends Controller {

    function index(){
        $this->view->generate('404_view.php', 'template_view.php');
    }
}