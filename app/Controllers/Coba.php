<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Ini kontroler coba method index";
    }

    public function about($pesan = null)
    {
        echo "Nama saya : Ansgarius Prasetyo Muti" . $pesan;
    }
}
