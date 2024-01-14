<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukDetailModel extends Model
{
    protected $table = 'barang'; // Replace 'barang' with the actual table name
    protected $primaryKey = 'id_barang'; // Replace 'id' with the actual primary key field name
    protected $allowedFields = ['nama_barang', 'deskripsi_barang', 'Harga_barang', 'Stok_barang', 'gambar']; // Replace with your actual fields

    // Add any additional model methods as needed
}