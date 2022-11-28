<?php
session_start();

if (empty($_POST['username']) && empty($_POST['email']) 
    && empty($_POST['first_name']) && empty($_POST['last_name']) 
    && empty($_POST['pwd']) && empty($_POST['pwd2'])) 
    {
        echo "<body>
            <script>
                alert('belum ada data ! ')
                window.location.replace('../register.php')
            </script>
        </body>";
}

$username = $_POST['username'];
$email = $_POST['email'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

function set_cookie() {
    global $username, $email, $fname, $lname, $pwd;
    $new = ['username' => $username, 
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email, 
            'password' => $pwd];
    setcookie('user', json_encode($new));
}

if (isset($_POST['submit'])) {
    if (!empty($username) && !empty($email) && !empty($fname) && !empty($lname) && !empty($pwd) && !empty($pwd2)) {
        if ($pwd != $pwd2) {
            echo "<body>
                <script>
                    alert('Password tidak sama');
                    window.location.replace('register.php');
                </script>
            </body>";
        } else {
            set_cookie();
            header("location: login.php", true, 301);
            die();
        }
    } else {
        echo "<body>
                <script>
                    alert('Isi semua field!');
                    window.location.replace('register.php');
                </script>
            </body>";
    }
}

?>