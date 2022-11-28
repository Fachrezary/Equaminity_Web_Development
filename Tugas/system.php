<?php 
$data = array();

function Register($username, $fname, $lname, $email, $password) {
    global $data;
    $new = ['username' => $username, 
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email, 
            'password' => $password];
    array_push($data, $new);
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    if (!empty($username) && !empty($email) && !empty($fname) && !empty($lname) && !empty($pwd) && !empty($pwd2)) {
        if ($pwd != $pwd2) {
            echo "<body>
                <script>
                    alert('Password tidak sama');
                    // window.location.replace('../register.html');
                </script>
            </body>";
        } else {
            global $username, $email, $fname, $lname, $pwd;
            Register($username, $email, $fname, $lname, $pwd);
        }
    }
}
print_r($data);

?>