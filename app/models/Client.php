<?php
class Client
{


    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }
    public function checkEmail($email)
    {
        $this->db->query('SELECT * FROM client WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->execute()) {
            return $row;
        } else {
            return false;
        }
    }
    //login admin 
    public function loginclient($email, $password)
    {
        $this->db->query('SELECT * FROM client WHERE email = :email AND password = :password');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);

        $row = $this->db->single();
        //
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
    //find user by email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM client WHERE email = :email');
        $this->db->bind(':email', $email);

        $this->db->single();
        //
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    //find user by id
    public function findUserById($id)
    {
        $this->db->query('SELECT * FROM client WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
    public function adduser($data){
        
        $this->db->query('INSERT INTO client(fullname, email,  password, phone ,status) VALUES (:fullname,:email ,:password,:phone ,:status)');
        //bind values
        $this->db->bind(':fullname',$data['fullname']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':phone',$data['phone']);
        $this->db->bind(':password',$data['password']);
        $this->db->bind(':status','Client');
     
    
        
        //execute
        if($this->db->execute()){
            return true;

        }else{
            return false;
        }
        
    }
}
