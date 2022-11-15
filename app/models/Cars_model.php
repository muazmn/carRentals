<?php

class Cars_model
{
    private $table = 'cars';
    private $table2 = 'car_rates';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKereta()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getAllKereta2()
    {
        $dua =  $_SESSION['awalData'];
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT :2,:jmlahDataPerHalaman');
        $this->db->bind('jmlahDataPerHalaman', $_SESSION['jmlahDataPerHalaman']);
        $this->db->bind("2", $_SESSION['awalData']);
        // $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    public function getCarById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE _id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function hargaKereta()
    {
        $this->db->query("SELECT * FROM " . $this->table2);
        return $this->db->resultSet();
    }
    public function hargaKeretaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table2 . ' WHERE car_id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function cariDataKereta()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM cars WHERE name LIKE :keyword LIMIT :2,:jmlahDataPerHalaman";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        $this->db->bind('jmlahDataPerHalaman', 4);
        $this->db->bind("2", $_SESSION['awalData']);
        return $this->db->resultSet();
    }
}
