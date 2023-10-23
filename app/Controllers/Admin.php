<?php

namespace App\Controllers;
use App\Models\EquipmentModel;

class Admin extends BaseController
{
    protected $equipmentModel;
    public function __construct()
    {
        $this->equipmentModel = new EquipmentModel();
    }

    public function index()
    {
        $equipment = $this->equipmentModel->findAll();

        $data = [
            'title' => 'Daftar equipment',
            'equipment' => $equipment
        ];

        // Chek Model Connection
        // $newsModel = new NewsModel();
        // $news = $newsModel->findAll();
        // dd($news); 
        

        return view('admin/dashboard', $data);
    }

    public function customer()
    {
        return view('admin/customer');
    }

    public function form()
    {
        return view('admin/form');  
    }
}
