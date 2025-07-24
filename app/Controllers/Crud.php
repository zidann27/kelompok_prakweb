<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\Controller;

class Crud extends Controller
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        return view('view', $data);
    }

    public function tambah()
    {
        return view('upload');
    }

    public function simpan()
    {
        $model = new MahasiswaModel();

        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
            'universitas' => $this->request->getPost('universitas'),
            'nomor_handphone' => $this->request->getPost('nomor_handphone'),
        ];

        if (!$model->insert($data)) {
            dd($model->errors());
        }

        return redirect()->to('/crud');
    }

    public function edit($nim)
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->find($nim);
        return view('edit', $data);
    }

   public function update($nim)
{
    $model = new MahasiswaModel();

    $data = [
        'nim' => $this->request->getPost('nim_baru'), // NIM baru yang diinput user
        'nama' => $this->request->getPost('nama'),
        'prodi' => $this->request->getPost('prodi'),
        'universitas' => $this->request->getPost('universitas'),
        'nomor_handphone' => $this->request->getPost('nomor_handphone'),
    ];

    $model->update($nim, $data); // `$nim` = old NIM (primary key), diganti dengan yang baru

    return redirect()->to('/crud');
}


    public function delete($nim)
    {
        $model = new MahasiswaModel();
        $model->delete($nim);

        return redirect()->to('/crud');
    }
}