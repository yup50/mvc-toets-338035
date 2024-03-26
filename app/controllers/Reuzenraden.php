<?php

class Reuzenraden extends BaseController
{

    private $reuzenradModel;

    public function __construct()
    {
        $this->reuzenradModel = $this->model('Reuzenrad');
    }

    public function index()
    {
        $reuzenraden = $this->reuzenradModel->getReuzenraden();
        
        // var_dump($reuzenraden);exit();

        $dataRows = "";

        foreach ($reuzenraden as $reuzenrad) {
            $dataRows .= "<tr>
                            <td>{$reuzenrad->Naam}</td>
                            <td>{$reuzenrad->Hoogte}</td>
                            <td>{$reuzenrad->Land}</td>
                            <td>{$reuzenrad->Kosten}</td>
                            <td>{$reuzenrad->AantalPassagiers}</td>            
                        </tr>";
        }

        $data = [
            'title' => 'De Top 5 rijkste reuzenraden ter wereld',
            'dataRows' => $dataRows
        ];

        $this->view('reuzenraden/index', $data);
    }

}