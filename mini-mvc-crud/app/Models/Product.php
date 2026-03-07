<?php

require_once "app/Core/Database.php";

class Product
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function all()
    {
        $stmt = $this->conn->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO products (name, price, stock) VALUES (?, ?, ?)"
        );

        return $stmt->execute([
            $data["name"],
            $data["price"],
            $data["stock"]
        ]);
    }

    public function update($id, $data)
    {
        $stmt = $this->conn->prepare(
            "UPDATE products SET name=?, price=?, stock=? WHERE id=?"
        );

        return $stmt->execute([
            $data["name"],
            $data["price"],
            $data["stock"],
            $id
        ]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM products WHERE id=?");
        return $stmt->execute([$id]);
    }
}
