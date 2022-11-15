<?php

class User_model
{
    private $nama = 'muaz';
    private $table = 'user';
    private $table2 = 'transactions';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUser()
    {
        return $this->nama;
    }
    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getUserById()
    {
        $username = $_SESSION['username'];
        $this->db->query("SELECT * FROM user WHERE username=:username");
        $this->db->bind('username', $username);
        return $this->db->single();
    }
    public function getUserByTransactions()
    {
        $id = $_SESSION['id'];
        $this->db->query("SELECT * FROM " . $this->table2 . " WHERE user_id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    public function tambahKereta1()
    {
        $this->db->query("INSERT INTO " . $this->table2 . " (user_id, car_id, mode, value, usePeriod) VALUES(:userId, :carId, :hour, :kali1, :number1)");
        $userId = $_SESSION['id'];
        $carId = $_SESSION['dataKereta'];
        $kali1 = $_POST['kali1'];
        $number1 = $_POST['number1'];
        $hour = "hour";
        $this->db->bind('userId', $userId);
        $this->db->bind('carId', $carId);
        $this->db->bind('hour', $hour);
        $this->db->bind('kali1', $kali1);
        $this->db->bind('number1', $number1);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahKereta2()
    {
        $this->db->query("INSERT INTO " . $this->table2 . " (user_id, car_id, mode, value, usePeriod) VALUES(:userId, :carId, :day, :kali2, :number1)");
        $userId = $_SESSION['id'];
        $carId = $_SESSION['dataKereta'];
        $kali2 = $_POST['kali2'];
        $number1 = $_POST['number1'];
        $day = "day";
        $this->db->bind('userId', $userId);
        $this->db->bind('carId', $carId);
        $this->db->bind('day', $day);
        $this->db->bind('kali2', $kali2);
        $this->db->bind('number1', $number1);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahKereta3()
    {
        $this->db->query("INSERT INTO " . $this->table2 . " (user_id, car_id, mode, value, usePeriod) VALUES(:userId, :carId, :km, :kali3, :number1)");
        $userId = $_SESSION['id'];
        $carId = $_SESSION['dataKereta'];
        $kali3 = $_POST['kali3'];
        $number1 = $_POST['number1'];
        $km = "km";
        $this->db->bind('userId', $userId);
        $this->db->bind('carId', $carId);
        $this->db->bind('km', $km);
        $this->db->bind('kali3', $kali3);
        $this->db->bind('number1', $number1);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cancel($id)
    {
        $this->db->query("DELETE FROM " . $this->table2 . " WHERE _id = :id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function getAddressId()
    {
        $this->db->query("SELECT MAX(_id) FROM address");
        // $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataUser($data)
    {
        // $this->db->query('SET FOREIGN_kEY_CHECKS=0');
        $password = $data["password"];
        $password2 = $data["password2"];

        if ($password !== $password2) {
            echo "<script>
            alert('hang bawak masuk password kedua x sama dengan password pertama')
            </script>";
            return false;
        }

        // $address_iy("SELECT _id FROM address ORDER BY _d = $this->db->querid DESC LIMIT 1");
        // $transactionId = $_SESSION['transactionId'];
        $this->db->query("INSERT INTO user (id, first_name, last_name, username, password, email, gender, address_id)VALUES('', :first_name, :last_name, :username, :password, :email, :gender, :address_id)");
        $this->db->bind('first_name',  $data["firstName"]);
        $this->db->bind('last_name',  $data["lastName"]);
        $this->db->bind('username',  $data["username"]);
        $this->db->bind('password',  $data["password"]);
        $this->db->bind('email',  $data["email"]);
        $this->db->bind('gender',  $_POST["flexRadioDefault"]);
        $this->db->bind('address_id', $data["address_id"] + 1);
        // $this->db->query('SET FOREIGN_kEY_CHECKS=1');
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahDataAddress($data)
    {
        $this->db->query("INSERT INTO address(_id, street, city, state, country, zip)VALUES('', :street, :city, :state, :country, :zip )");
        $this->db->bind('street',  $data["street"]);
        $this->db->bind('city',  $data["city"]);
        $this->db->bind('state',  $data["state"]);
        $this->db->bind('country',  $data["country"]);
        $this->db->bind('zip',  $data["zipCode"]);

        $this->db->execute();
        return $this->db->rowCount();
    }

    // public function tambahDataKenalan($data)
    // {
    //     $query = "INSERT INTO mahasiswa
    //                 VALUES
    //                 ('', :nama, :kp, :email, :pekerjaan)";
    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('kp', $data['kp']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('pekerjaan', $data['pekerjaan']);

    //     $this->db->execute();
    //     // function rowCount diambil dari file database.php, fungsi ini akan mengembalikan angka kalau dbs nya jalan
    //     return $this->db->rowCount();
    // }


    // DIBAWAH INI ADALAH FUNCTION resultSet YANG TERDAPAT DALAM FILE DATABASE

    //     public function execute()
    //     {
    //         $this->stmt->execute();
    //     }

    //  public function resultSet()
    //     {
    //         $this->execute();
    //         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }























    // public function userId($id)
    // {
    //     $query = "SELECT * FROM user WHERE id = :id";
    //     $this->db->query($query);
    //     $this->db->bind('id', $id);

    //     // $this->db->execute();

    //     return $this->db->resultSet();
    // }
    // public function getTransactionsById()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table2 . ' WHERE user_id=:id');
    //     $this->db->bind('id', $_SESSION['id']);
    //     return $this->db->single();
    // }
}
