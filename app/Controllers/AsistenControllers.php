<?php

namespace App\Controllers;

use App\Models\AsistenModel;
use App\Models\LoginModel;

class AsistenControllers extends BaseController
{
    protected $asisten;
    public function __construct()
    {
        $this->asisten = new AsistenModel();
    }

    public function index()
    {
        return view('asisten/Asistenlogin');
    }
    public function login()
    {
        $model1 = model(AsistenModel::class);
        $data = [
            'List' => $model1->getasisten(),
            'title' => 'Daftar Asisten'
        ];
        $model = model(LoginModel::class);
        $post = $this->request->getPost(['username', 'password']);
        $user = $model->where('Username', $post['username'])->first();
        $password = $model->where('Password', $post['password'])->first();
        if ($user && $password) {
            $session = session();
            $session->set('pengguna', $post['username']);
            return view('asisten/AsistenView', $data);
        } else {
            return view('login/fail');
        }
    }
    public function simpan()
    {
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('/asisten/simpan');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'NIM', 'NAMA', "PRAKTIKUM",
            "IPK"
        ]);
        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);
        $model->simpan($post);
        return view('/asisten/succes');
    }
    public function search()
    {
        if (!$this->request->is('post')) {
            return view('/asisten/search');
        }

        $nim = $this->request->getPost(['key']);

        $model = model(AsistenModel::class);
        $asisten = $model->ambil($nim['key']);

        $data = ['hasil' => $asisten];
        return view('/asisten/search', $data);
    }

    public function edit()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/update');
        }
        $data = [
            'nama' => [$this->request->getPost('nama')],
            'praktikum' => [$this->request->getPost('praktikum')],
            'ipk' => [$this->request->getPost('ipk')],
        ];
        $builder->where('nim', $this->request->getPost('nim'));
        $builder->update($data);

        return view('/asisten/succes');
    }

    public function delete()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');
        if (!$this->request->is('post')) {
            return view('/asisten/delete');
        }
        $post = $this->request->getPost([
            'nim'
        ]);
        $builder->where('nim', $post);
        $builder->delete();
        return view('/asisten/succes');
    }
}
