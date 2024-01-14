<?php

namespace App\Controllers;

class TambahProduk extends BaseController
{
    public function index(): string
    {
        return view('tambah-produk');
    }

    function upload() { 
        helper(['form', 'url']);
         
        $database = \Config\Database::connect();
        $db = $database->table('users');
    
        $input = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file, 100000]',
            ]
        ]);
    
        if (!$input) {
            print_r('Choose a valid file');
        } else {
            $img = $this->request->getFile('file');
            $img->move(WRITEPATH . 'uploads');
    
            $data = [
               'name' =>  $img->getName(),
               'type'  => $img->getClientMimeType()
            ];
    
            $save = $db->insert($data);
            print_r('File has successfully uploaded');        
        }
    }
}
