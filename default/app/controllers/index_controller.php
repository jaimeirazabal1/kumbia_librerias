<?php

/**
 * Controller por defecto si no se usa el routes
 * 
 */
class IndexController extends AppController
{

    public function index()
    {
        if (!Auth::is_valid()) {
        	Router::redirect("sesion/login");
        }
    }

}
