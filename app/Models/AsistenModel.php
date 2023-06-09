<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'Asisten';
    protected $allowedFields =[
        'NIM',
        'NAMA',
        'PRAKTIKUM',
        'IPK'
    ];

    public function getasisten()
    {
        return $this->findAll();
    }

    public function simpan($record)
    {
        $this->save([
            'NIM' => $record['NIM'],
            'NAMA' => $record['NAMA'],
            'PRAKTIKUM' => $record['PRAKTIKUM'],
            'IPK' => $record['IPK'],
        ]);
    }

    public function ambil($NIM)
    {
        return $this->where(['NIM' =>$NIM])->first();
    }

}