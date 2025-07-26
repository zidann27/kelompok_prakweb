<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
{
    $model = new BukuModel();
    $keyword = $this->request->getGet('keyword');

    if ($keyword) {
        $buku = $model->like('judul', $keyword)->findAll();
    } else {
        $buku = $model->findAll();
    }

    $data = [
        'buku' => $buku,
        'keyword' => $keyword,
    ];

    return view('buku/index', $data);
}

    

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $model = new BukuModel();
        $model->insert([
            'judul' => $this->request->getPost('judul'),
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $model = new BukuModel();
        $model->update($id, [
            'judul' => $this->request->getPost('judul'),
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/buku');
    }
}