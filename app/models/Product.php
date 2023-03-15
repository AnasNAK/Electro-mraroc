<?php

class Product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProduct()
    {
        $this->db->query('SELECT * FROM product ');

        $result = $this->db->resultset();
        return $result;
    }
    
    public function addProduct($data){
        $this->db->query('INSERT INTO product(name, price, image, stock, description ,categorie) VALUES (:name,:price,:image,:stock,:description ,:categorie)');
        //bind values
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':stock',$data['stock']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':image',$data['image']);
        $this->db->bind(':categorie',(int)$data['categorie']);
        
        //execute
        if($this->db->execute()){
            return true;

        }else{
            return false;
        }
        
    }
    public function findproductById($id)
    {
      $this->db->query('SELECT * FROM product WHERE id = :id');
      $this->db->bind(':id', $id);
  
      $row = $this->db->single();
    
      return $row;
    }
    public function edit($data) {
        $this->db->query("UPDATE product SET name = :name, description = :description, price = :price, stock = :stock, image = :image, categorie = :categorie WHERE id = :id");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':stock', $data['stock']);
        $this->db->bind(':categorie', (int)$data['categorie']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delet($id) {
        $this->db->query("DELETE FROM product WHERE id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getProductByStock()
    {
        $this->db->query('SELECT SUM(stock) as "sum" FROM product');

        $result = $this->db->single();
        return $result;
    }

}
