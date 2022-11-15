<?php

class Home extends Controller
{
    public function index()
    {
        // if (isset($_POST['username'])) {
        //     header('Location: ' . BASEURL . '/home/index');
        // }
        $data['judul'] = 'login';
        // $this->view('templates/header2', $data);
        // $this->view('login/index', $data);
        // $this->view('templates/footer');
        require_once '../app/views/templates/header2.php';
        require_once '../app/views/login/index.php';
        require_once '../app/views/templates/footer.php';
    }
    public function index2($id = 1)
    {
        // pagination formula
        $_SESSION['jmlahDataPerHalaman'] = 6;
        // $_SESSION['jmlahDataPerhalaman2'] = 2 - 1;
        $data['jmlahData'] = count($this->model('Cars_model')->getAllKereta());
        $data['jmlahHalaman'] = ceil($data['jmlahData'] / $_SESSION['jmlahDataPerHalaman']);
        $_GET['id'] = $id;
        $data['halamanAktif'] = (isset($_GET["id"])) ? $_GET['id'] : 1;
        // if ($data['halamanAktif'] > $data['jmlahLink'] || $data['halamanAktif'] == 0) {
        //     header('Location: ' . BASEURL . '/home/index2');
        // }
        $data["jmlahLink"] = 1;
        if ($data['halamanAktif'] > $data['jmlahLink']) {
            $data["start_number"] = $data['halamanAktif'] - $data['jmlahLink'];
        } else {
            $data["start_number"] = 1;
        }
        if ($data['halamanAktif'] < ($data["jmlahHalaman"] - $data["jmlahLink"]) && $data['halamanAktif'] > 1) { //5
            $data['end_number'] = $data["halamanAktif"] + $data["jmlahLink"];
            // } elseif ($data['halamanAktif'] == 1) {
            //     $data["end_number"] = $data['halamanAktif'] + 2;
            //
        } else {
            $data["end_number"] = $data["jmlahHalaman"];
            // $data["start_number"] = $data["jmlahHalaman"] - 2;
        }

        $data['awalData'] = ($_SESSION['jmlahDataPerHalaman'] * $data['halamanAktif']) - $_SESSION['jmlahDataPerHalaman'];
        $_SESSION['awalData'] = $data['awalData'];
        // cari tau halaman yg sedang aktif

        $data['judul'] = 'Home';
        $data['cars'] = $this->model('Cars_model')->getAllKereta2();
        $data['user'] = $this->model('User_model')->getAllUser();
        $data['harga'] = $this->model('Cars_model')->hargaKereta();

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
    public function pagination($id = 1)
    {
        // pagination formula
        $_SESSION['jmlahDataPerHalaman'] = 6;
        // $_SESSION['jmlahDataPerhalaman2'] = 2 - 1;
        $data['jmlahData'] = count($this->model('Cars_model')->getAllKereta());
        $data['jmlahHalaman'] = ceil($data['jmlahData'] / $_SESSION['jmlahDataPerHalaman']);
        $_GET['id'] = $id;
        $data['halamanAktif'] = (isset($_GET["id"])) ? $_GET['id'] : 1;
        // if ($data['halamanAktif'] > $data['jmlahLink'] || $data['halamanAktif'] == 0) {
        //     header('Location: ' . BASEURL . '/home/index2');
        // }
        $data["jmlahLink"] = 1;
        if ($data['halamanAktif'] > $data['jmlahLink']) {
            $data["start_number"] = $data['halamanAktif'] - $data['jmlahLink'];
        } else {
            $data["start_number"] = 1;
        }
        if ($data['halamanAktif'] < ($data["jmlahHalaman"] - $data["jmlahLink"])) { //5
            $data['end_number'] = $data["halamanAktif"] + $data["jmlahLink"];
        }
        // elseif ($data['halamanAktif'] == 1) {
        //     $data["end_number"] = $data['halamanAktif'] + 2;
        // } 
        else {
            $data["end_number"] = $data["jmlahHalaman"];
            // $data["start_number"] = $data["jmlahHalaman"] - 2;
        }

        if (!isset($id)) {
            header('Location: ' . BASEURL . '/home/index2');
        }
        // kalau berada di halaman 2, maka data dgn indeks ke enam akan tampil
        $data['awalData'] = ($_SESSION['jmlahDataPerHalaman'] * $data['halamanAktif']) - $_SESSION['jmlahDataPerHalaman'];
        $_SESSION['awalData'] = $data['awalData'];
        // cari tau halaman yg sedang aktif

        $data['judul'] = 'Home';
        $data['cars'] = $this->model('Cars_model')->getAllKereta2($id);
        $data['user'] = $this->model('User_model')->getAllUser();
        $data['harga'] = $this->model('Cars_model')->hargaKereta();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
    // public function pagination($id)
    // {
    // }

    public function detail()
    {
        $data['judul'] = 'Profile';
        $data['user'] = $this->model('User_model')->getUserById();
        $data['transactions'] = $this->model('User_model')->getUserByTransactions();
        $data['cars_id'] = $this->model('Cars_model')->getAllKereta();
        $data['user_id'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('home/details', $data);
        $this->view('templates/footer');
    }
    public function rent($id)
    {
        $data['judul'] = 'Sewa';
        $data['harga'] = $this->model('Cars_model')->hargaKereta();
        $data['user'] = $this->model('User_model')->getUserById();
        $data['car'] = $this->model('Cars_model')->getCarById($id);
        $data['idHarga'] = $this->model('Cars_model')->hargaKeretaById($id);
        $_SESSION['dataKereta'] = $data['car']['_id'];
        if (isset($_SESSION['dataKereta'])) {
            if (isset($_POST['rented'])) {
                $radio = $_POST['inlineRadioOptions'];
                // var_dump($_POST['inlineRadioOptions']);
                if ($radio == "option1" && $this->model('User_model')->tambahKereta1($_POST) > 0) {
                    echo "
                    <script>
                    var base_url = window.location.origin;
                    var host = window.location.host;
                    var pathArray = window.location.pathname.split('/');
                    console.log(pathArray)
                    pathArray.splice(6, 2, 'detail')
                    console.log(pathArray.join('/'))
                    alert('car successfully added');  
                    window.location.href = pathArray.join('/')
                    
                    </script>
                    ";
                    // window.location.href = ' . BASEURL . '/home/details'
                    // header('Location: ' . BASEURL . '/home/details');
                } elseif ($radio == "option2" &&  $this->model('User_model')->tambahKereta2($_POST) > 0) {
                    echo "
                    <script>
                    var base_url = window.location.origin;
                    var host = window.location.host;
                    var pathArray = window.location.pathname.split('/');
                    console.log(pathArray)
                    pathArray.splice(6, 2, 'detail')
                    console.log(pathArray.join('/'))
                    alert('car successfully added');  
                    window.location.href = pathArray.join('/')
                    </script>
                    ";
                    // window.location.href = ' . BASEURL . '/home/details'
                } elseif ($radio == "option3" &&  $this->model('User_model')->tambahKereta3($_POST) > 0) {
                    echo "
                    <script>
                    var base_url = window.location.origin;
                    var host = window.location.host;
                    var pathArray = window.location.pathname.split('/');
                    console.log(pathArray)
                    pathArray.splice(6, 2, 'detail')
                    console.log(pathArray.join('/'))
                    alert('car successfully added');  
                    window.location.href = pathArray.join('/')
                    
                    </script>
                    ";
                    // window.location.href = ' . BASEURL . '/home/details'
                    //  window.location.href = pathArr▬ay
                }
            }
        }

        $this->view('templates/header', $data);
        $this->view('rentals/rentals', $data);
        $this->view('templates/footer');
    }
    public function hapus($id)
    {
        $data['jdul'] = $this->model('User_model')->cancel($id);
        if ($data['jdul'] > 0) {
            echo "
            <script>
            consle.log('fdafsdf');        
            </script>
             ";
            header('Location: ' . BASEURL . '/home/detail');
        }
        $this->view('templates/header', $data);
        $this->view('home/details', $data);
        $this->view('templates/footer');
    }
    public function rentalPage()
    {
        $data['user'] = $this->model('User_model')->getAllUser();
        $data['cars'] = $this->model('Cars_model')->getAllKereta();


        $this->view('templates/header', $data);
        $this->view('rentals/index', $data);
        $this->view('templates/footer');
    }
    // public function cari($id = 1)
    // {

    //     if (isset($_POST["tombolCari"])) {
    //         $cari = $_POST['keyword'];
    //         $_SESSION['cari'] = $cari;
    //     } else {
    //         $cari = $_SESSION['cari'];
    //     }

    //     // pagination formula
    //     $_SESSION['jmlahDataPerHalaman'] = 4;
    //     // $_SESSION['jmlahDataPerhalaman2'] = 2 - 1;
    //     $data['jmlahData'] = count($this->model('Cars_model')->cariDataKereta());
    //     $data['jmlahDataSemua'] = count($this->model('Cars_model')->getAllKereta());
    //     echo $data['jmlahData']; //eko
    //     echo "jmlahData"; //eko
    //     $data['jmlahHalaman'] = ceil($data['jmlahDataSemua'] + $data['jmlahData'] - $data['jmlahData']) / $_SESSION['jmlahDataPerHalaman'];
    //     echo "<br>"; //eko
    //     echo $data['jmlahHalaman']; //eko
    //     echo "jmlahHalaman"; //eko
    //     $_GET['id'] = $id;
    //     $data['halamanAktif'] = (isset($_GET["id"])) ? $_GET['id'] : 1;
    //     // kalau berada di halaman 2, maka data dgn indeks ke enam akan tampil
    //     $data['awalData'] = ($_SESSION['jmlahDataPerHalaman'] * $data['halamanAktif']) - $_SESSION['jmlahDataPerHalaman'];
    //     $_SESSION['awalData'] = $data['awalData'];
    //     // cari tau halaman yg sedang aktif
    //     // if ($data['halamanAktif'] > $data['jmlahLink'] || $data['halamanAktif'] == 0) {
    //     //     header('Location: ' . BASEURL . '/home/index2');
    //     // }
    //     $data["jmlahLink"] = 2;
    //     if ($data['halamanAktif'] >= $data['jmlahLink']) {
    //         $data["start_number"] = $data['halamanAktif'] - $data['jmlahLink'] + 2;
    //     } else {
    //         $data["start_number"] = 1;
    //     }


    //     if ($data['halamanAktif'] < ($data["jmlahHalaman"] - $data["jmlahLink"]) && $data['halamanAktif'] > 1) { //5
    //         $data['end_number'] = $data["halamanAktif"] + $data["jmlahLink"];
    //     }
    //     // elseif ($data['jmlahHalaman'] == 1) {
    //     //     $data["end_number"] = $data['halamanAktif'] + 1;
    //     // } 
    //     else {
    //         $data["end_number"] = $data["jmlahHalaman"];
    //         // $data["start_number"] = $data["jmlahHalaman"] - 2;
    //     }

    //     if (!isset($id)) {
    //         header('Location: ' . BASEURL . '/home/index2');
    //     }

    //     $data['judul'] = 'Home';
    //     $data['cars'] = $this->model('Cars_model')->getAllKereta2($id);
    //     $data['user'] = $this->model('User_model')->getAllUser();
    //     $data['harga'] = $this->model('Cars_model')->hargaKereta();
    //     $data['judul'] = 'Daftar ';
    //     $data['cars2'] = $this->model('Cars_model')->cariDataKereta();
    //     $this->view('templates/header', $data);
    //     $this->view('home/index2', $data);
    //     $this->view('templates/footer');
    // }
}
// if (isset($_POST['cancel'])) {
//     $car_id = mysqli_real_escape_string($db, $_POST['cancel']);
//     $query = "DELETE FROM transactions WHERE _id = '$car_id'";
//     $query_run = mysqli_query($db, $query);
//     if ($query_run) {
//         echo "
//            <script>
//            alert('data berhasil dihapuskan');
//            </script>";
//         // exit(0);
//     } else {
//         echo "
//            <script>
//            alert('data gagal dihapuskan');
//            </script>";
//         // exit(0);
//     }
// }


// tugas terakhir

//  buang search
// hilangkan err
// buat halaman rentals
// dalam halaman ini ada nama dan kereta yang telah disewa olehnya
// 
