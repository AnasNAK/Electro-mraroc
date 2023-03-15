<?php

class Categorie
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCategorie()
    {
        $this->db->query('SELECT * FROM categorie ');

        $result = $this->db->resultset();
        return $result;
    }
    public function getCategorieById($id) 
    {
        $this->db->query('SELECT * FROM categorie WHERE id = :id');
        $this->db->bind(':id', $id);
        $category = $this->db->single();

        if($category) {
            return $category;
        }else {
            return false;
        }
    }
    
    public function addCategorie($data){
        $this->db->query('INSERT INTO Categorie(name, image, description) VALUES (:name,:image,:description)');
        //bind values
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':image',$data['image']);
        
        //execute
        if($this->db->execute()){
            return true;

        }else{
            return false;
        }
        
    }
    public function findCategorieById($id)
    {
      $this->db->query('SELECT * FROM Categorie WHERE id = :id');
      $this->db->bind(':id', $id);
  
      $row = $this->db->single();
    
      return $row;
    }
    public function edit($data) {
        $this->db->query("UPDATE Categorie SET name = :name, description = :description,image = :image WHERE id = :id");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delet($id) {
        $this->db->query("DELETE FROM Categorie WHERE id = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // public function getCategorieByStock()
    // {
    //     $this->db->query('SELECT SUM(stock) as "sum" FROM product');

    //     $result = $this->db->single();
    //     return $result;
    // }

}
