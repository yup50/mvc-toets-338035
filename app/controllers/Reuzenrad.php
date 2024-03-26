<?php

class Reuzenrad extends BaseController
{

    public function index()
    {
        /**
         * Met het $data-array geef ik informatie mee vanuit de controller
         * naar de view
         */
        $data = [
            'title' => 'Dit de pagina met de grootste Reuzenratte'
        ];

        /**
         * Met de view-method uit de BaseController-class roep je de
         * view aan en geef je de informatie uit het $data-array mee aan
         * de view
         */
        $this->view('Reuzenrat/index', $data);
    }

}