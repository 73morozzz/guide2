<?php
class Controller_Cities extends Controller
{
    function action_index()
    {	
        $this->view->generate('cities_view.php', 'template_view.php');
    }
}