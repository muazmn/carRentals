
<?php

class Log extends Controller
{
    public function index()
    {
        $data['judul'] = 'login';
        // $data['nama'] = $this->model('User_model')->getUser();
        // $this->view('templates/header', $data);
        $this->view('login/index', $data);
        // $this->view('templates/footer', $data);
    }
    public function halamanRegister()
    {

        $data['judul'] = 'register';
        $data['address'] = $this->model('User_model')->getAddressId();
        // $this->view('templates/header2', $data);
        // $this->view('registration/index', $data);
        // $this->view('templates/footer');
        require_once '../app/views/templates/header2.php';
        require_once '../app/views/registration/index.php';
        require_once '../app/views/templates/footer.php';
    }
    public function loginPage()
    {
        $data['judul'] = 'login';
        $this->view('templates/header2', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function register()
    {
        // $data['address'] = $this->model('User_model')->getAddressId();
        // foreach ($data['address'] as $tran) :
        //     echo " 
        //    <input type='hidden' name='address_id' value='$tran'>
        //     <h2> $tran;</h2>
        //     ";
        // endforeach;
        $_POST['address_id'] + 1;
        if ($this->model('User_model')->tambahDataAddress($_POST) > 0) {
            if ($this->model('User_model')->tambahDataUser($_POST) > 0) {

                echo "<script>
                    alert('data berjaya ditambahkan')
                    </script>";
                header('Location: ' . BASEURL . '/home/index2');
                exit;
            } elseif ($this->model('User_model')->tambahDataUser($_POST) < 0) {
                echo "
                <script>
                     alert('tambahkan data dahulu BODO!!!);        
                </script>
                     ";
            } else {
                echo "
                <script>
                     alert('data gagal ditambahkan);        
                </script>
                     ";
            }
        }
    }

    // LOGIN FUNCTION
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data['login'] = $this->model('Log_model')->getUser($username, $password);
        session_start();
        if ($data['login'] == NULL) {
            // if (isset($_POST['register'])) {
            //     header("Location:" . BASEURL . "/log/register");
            // }
            // echo "
            //     <script>
            //          alert('data gagal ditambahkan);        
            //     </script>
            //          ";
            header("Location:" . BASEURL . "/home/index");
            exit;
        } else {
            foreach ($data['login'] as $row) :
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location:" . BASEURL . "Home/index2");
                exit;
            endforeach;
        }
    }

    // LOGOUT FUNCTION
    public function logout()
    {
        $data['judul'] = "halaman login";
        // session_start();
        unset($_SESSION['username']);
        // session_destroy();
        $this->view('templates/header2', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
        // header("Location:../app/views/login/index.php");
    }
}
