<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    protected $newsModel;
    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }

    public function index()
    {
        $news = $this->newsModel->findAll();

        $data = [
            'title' => 'Daftar News',
            'news' => $news
        ];

        // Chek Model Connection
        // $newsModel = new NewsModel();
        // $news = $newsModel->findAll();
        // dd($news); 

        return view('admin/news/news', $data);
    }

    // public function detail($slug)
    // {
        
    //     $data = [

    //         'title' => 'Detail News',
    //         'equipment' => $this->newsModel->getNews($slug)
    //     ];

    //     // Jika equipment tidak ada pada table
    //     if(empty($data['news'])) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul ' . $slug . ' tidak ditemukan');
    //     }

    //     return view('admin/news/detail', $data);
    // }

    public function create()
    {
        $data = [
            
            'title' => 'Form Create Content'
        ];

        return view('admin/news/addcontent', $data);
    }

    public function save()
    {
        
        // if(!$this->validate([
        //     'sampul' => [
        //         'rules' => 'uploaded[sampul]|max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,
        //         img/jpeg,img/png]',
        //         'errors' => [
        //             'uploaded' => 'Pilih gambar sampul terlebih dahulu',
        //             'max_size' => 'Ukuran gambar terlalu besar',
        //             'is_image' => 'Yang anda pilih bukan gambar',
        //             'mime_in' => 'Yang anda pilih bukan gambar',
        //         ]
        //     ]
        // ]))

        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        // dd($fileSampul);

        // generate nama Sampul random
        $namaSampul = $fileSampul->getRandomName();

        // movement folder img
        $fileSampul->move('img', $namaSampul);

        // ambil nama file sampul
        // $namaSampul = $fileSampul->getName();


        // dd($this->request->getVar());
        // $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->newsModel->save([
            'judul' => $this->request->getVar('judul'),
            // 'slug' => $slug,
            'description' => $this->request->getVar('description'),
            'sampul' => $namaSampul,
        ]);

        session()->setFlashdata('pesan', 'Content berhasil ditambahkan');

        return redirect()->to('/content');
    }



    public function delete($id)
    {
        $this->newsModel->delete($id);
        session()->setFlashdata('pesan', 'Content berhasil dihapus');
        return redirect()->to('/content');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Content',
            'validation' => \Config\Services::validation(),
            'news' => $this->newsModel->getNews($id)
        ];

        return view('admin/news/edit', $data);
    }

    public function detail($id)
    {
        
        $data = [

            'title' => 'Latest Update',
            'news' => $this->newsModel->getNews($id)
        ];

        // Jika news tidak ada pada table
        if(empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('content ' . $id . ' tidak ditemukan');
        }

        // dd($data);

        return view('/admin/news/detail', $data);
    }

    public function update($id)
    {
        $fileSampul = $this->request->getFile('sampul');
        // dd($fileSampul);


        $slug = url_title($this->request->getVar('nama_alat'),'-',true);
        $this->newsModel->save([
            'id' => $id,
            'nama_alat' => $this->request->getVar('nama_alat'),
            'slug' => $slug,
            'brand' => $this->request->getVar('brand'),
            'capacity' => $this->request->getVar('capacity'),
            'sampul' => $fileSampul,
            'pdf' => $this->request->getVar('pdf')
        ]);

        session()->setFlashdata('pesan', 'news berhasil diubah');

        return redirect()->to('/content');
    }


}