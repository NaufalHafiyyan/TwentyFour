<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AnggotaModel;

class Anggota extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->findAll();
        return $this->respond($data);
    }

    public function show($id = null)
    {
        $model = new AnggotaModel();
        $data = $model->where('no_anggota', $id)->first();
        if ($dat) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    public function create()
    {
        $model = new AnggitaModel();
        $data = [
            'no_anggota' => $this->request->getVar('no_anggota'),
            'npm' => $this->request->getVAr('npm'),
            'nama' => $this->request->getVAr('nama'),
            'no_hp' => $this->request->getVAr('no_hp'),
        ];
        $model->insert($data);
        $response = [
            'status'  => 201,
            'error'   => null,
            'messages' => [
                'success' => 'Data anggota berhasil ditambahkan'
            ]
        ];
        return $this->respondCreated($response);
    }
    public function update($id = null)
    {
        $model = new AnggotaModel();
        $id = $this->request->getVar('no_anggota');
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
        ];
        $model->update($id, $data);
        $response = [
            'status'  => 200,
            'error'   => null,
            'messages'=> [
                'sucsess' => 'Data Anggota berhasil diubah'
            ]
        ];
        return $this->respond($response);

    }
    public function delete($id = null)
    {
        $model = new AnggotaModel();
        $data = $model->where('no_anggota', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'  => 200,
                'error'   => null,
                'messages'=> [
                    'success' => 'Data Anggota berhasil dihapus'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
    }
}
}
