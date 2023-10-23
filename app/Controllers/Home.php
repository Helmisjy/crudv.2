<?php

namespace App\Controllers;

use App\Models\EquipmentModel;

class Home extends BaseController
{
    protected $equipmentModel;
    public function __construct()
    {
        $this->equipmentModel = new EquipmentModel();
    }

    public function index(): string
    {

        $equipment = $this->equipmentModel->findAll();

        $data = [
            'title' => 'Daftar News',
            'equipment' => $equipment
        ];

        // Chek Model Connection
        // $newsModel = new NewsModel();
        // $news = $newsModel->findAll();
        // dd($news); 

        
        return view('bap', $data);
    }
}
