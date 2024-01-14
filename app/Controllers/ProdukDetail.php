<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProdukDetail extends BaseController
{
    public function index(): string
    {
        // Get the 'id' parameter from the URL
        $id = $this->request->uri->getSegment(2);

        // Validate the id (you may want to add more robust validation)
        if (!is_numeric($id)) {
            die("Invalid ID parameter");
        }

        $model = new \App\Models\ProdukDetailModel(); // Replace 'ProdukDetailModel' with the actual model name

        // Get the product details by ID
        $product = $model->find($id);

        // Pass the product data to the view
        return view('produk-detail', ['product' => $product]);
    }
}