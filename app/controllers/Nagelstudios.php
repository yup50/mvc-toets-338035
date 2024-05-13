<?php

class Nagelstudios extends BaseController
{

    private $nagelstudioModel;

    public function __construct()
    {
        $this->nagelstudioModel = $this->model('Nagelstudio');
    }

    public function index()
    {
        $nagelstudios = $this->nagelstudioModel->getNagelstudios();
        
        // var_dump($reuzenraden);exit();

        $dataRows = "";

        foreach ($nagelstudios as $nagelstudio) {
            $dataRows .= "<tr>
                            <td>{$nagelstudio->kleur1}</td>
                            <td>{$nagelstudio->kleur2}</td>
                            <td>{$nagelstudio->kleur3}</td>
                            <td>{$nagelstudio->kleur4}</td>
                            <td>{$nagelstudio->telefoonNummer}</td>
                            <td>{$nagelstudio->email}</td>
                            <td>{$nagelstudio->afspraakDatum}</td>   
                            <td>{$nagelstudio->luxeManicure}</td>            
                            <td>{$nagelstudio->nagelbijt}</td>            
                            <td>{$nagelstudio->nagelreparatie}</td>            
                            <td>{$nagelstudio->datumVanSchrijven}</td>
                        </tr>";
        }

        $data = [
            'title' => 'Overzicht van afspraken',
            'dataRows' => $dataRows
        ];

        $this->view('nagelstudios/index', $data);
    }

}