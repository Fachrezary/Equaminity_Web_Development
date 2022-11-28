<?php
    session_start();
    if (empty($_COOKIE['user'])) {
        echo "<body>
            <script>
                alert('Akun tidak terdaftar ! mohon buat akun terlebih dahulu')
                window.location.replace('login.php')
            </script>
        </body>";
    }
    $dec = json_decode($_COOKIE['user'], true);
    $get_uname = $_POST['username'];
    $get_pwd = $_POST['pwd'];

    function set_session() {
        global $get_uname, $dec;
        session_start();
        $_SESSION['username'] = $get_uname;
        $_SESSION['another'] = json_encode($dec);
        $_SESSION['name'] = $dec['fname'] . " " . $dec['lname'];
        setcookie('user', json_encode($dec));
    }

    if (isset($_POST['login'])) {
        if (in_array($get_uname, $dec) && in_array($get_pwd, $dec)) {
            set_session();
            header('Location: index.php');
        } else {
            echo "<body>
                <script>
                    alert('username atau password salah ! ')
                    window.location.replace('login.php')
                </script>
            </body>";
        }
    }
    
?>