<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\ContentModel;

class Home extends BaseController
{
    public function index(): string
    {
        $detail['nama_mhs'] = 'Mahasiswa 0001'; #UNTUK PASSING VARIABLE SECARA HARDCODE / DEFAULT
        $detail['nama_mhs'] = $this->request->getGet('nama_mhs'); #UNTUK PASSING VARIABLE SECARA DINAMIS DARI GET PARAM
        // data array tanpa key
        $detail['list_mhs'] = ['Mahasiswa 003', 'Mahasiswa 005', 'Mahasiswa 007', 'Mahasiswa 009', 'Mahasiswa 010'];

        // data array dengan menggunakan key -- untuk informasi news
        $detail['data_news'] = [
            [
                'title' => 'Apa itu Codeigniter?',
                'content' => 'Codeigniter adalah framework untuk membuat web',
                'tahun' => '2023'
            ],
            [
                'title' => 'Aplikasi berbasis Codeigniter?',
                'content' => 'Codeigniter merupakan framework untuk membuat web',
            ],
            [
                'title' => 'Codeigneter v4',
                'content' => 'Codeigniter menjadikan framework untuk membuat web',
                'tahun' => '2022'
            ]

        ];

        return view('welcome_message', $detail);
    }

    public function detail()
    {
        $contents = new ContentModel();
        $data['contents'] = $contents->where('draft', 0)->findAll();

        return view('welcome_home', $data);
    }

    public function profile()
    {
        $data['username'] = '';
        if ($this->request->getMethod() == 'post') {
            #UNTUK SAVE DATA TO DATABASE
            /*$profile = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'message' => $this->request->getPost('message')
            ];

            $profile_saved = $this->profile_model->insert($profile);

            if ($profile_saved) {
                return view('profile');
            }*/
            
            #UNTUK LOAD DATA FROM SUBMIT
            $data['username'] = $this->request->getPost('username');
            return view('profile', $data);
        }
        return view('profile', $data);
    }
}
