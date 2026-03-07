<?php

require_once "app/Models/Product.php";
require_once "app/Core/Response.php";

class ProductController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $data = $this->product->all();
        Response::json(true, $data);
    }

    public function show($id)
    {
        $data = $this->product->find($id);

        if (!$data) {
            Response::json(false, null, "Produk tidak ditemukan", 404);
        }

        Response::json(true, $data);
    }

    public function store()
    {
        $data = $_POST;

        if (!$data["name"] || !$data["price"] || !$data["stock"]) {
            Response::json(false, null, "Data tidak lengkap", 400);
        }

        $this->product->create($data);

        Response::json(true, null, "Produk berhasil ditambahkan");
    }

    public function update($id)
    {
        $data = $_POST;

        if (!$this->product->find($id)) {
            Response::json(false, null, "Produk tidak ditemukan", 404);
        }

        $this->product->update($id, $data);

        Response::json(true, null, "Produk berhasil diupdate");
    }

    public function delete($id)
    {
        if (!$this->product->find($id)) {
            Response::json(false, null, "Produk tidak ditemukan", 404);
        }

        $this->product->delete($id);

        Response::json(true, null, "Produk berhasil dihapus");
    }
}
