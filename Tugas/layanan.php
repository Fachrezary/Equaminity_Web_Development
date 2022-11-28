<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/remixicons/fonts/remixicon.css">
    <link rel="stylesheet" href="./assets/css/aos.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Layanan</title>
</head>
<body>
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <div class="intro text-center">
                        <div class="hr-line"></div>
                        <h1 class="display-4">Pemesanan<br>
                        Layanan</h1>
                        <p class="mx-auto">Silahkan mengisi form dibawah ini untuk menggunakan jasa kami !</p>
                    </div>
                </div>
            </div>
              <form method="POST" name="frmpost" action="session_layanan.php">
                <table align="center" border="1" cellpadding="0" cellspacing="0"> 
                  <tr align="center"><td><h2> <b>Form Pemesanan Layanan</b></h2></td></tr>
                  <tr> 
                    <td>
                    <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                      <tr>
                        <td>Nama</td>
                        <td> : </td>
                        <td><input name="nama[]" type="text" size="40" /></td>
                      </tr>
                      <tr>
                        <td>Tanggal</td>
                        <td> : </td>
                        <td><input name="tgl[]" type="text" size="40" /></td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td> : </td>
                        <td>
                          <input type="radio" name="jk" value="Laki - Laki"><label for="laki">Laki - Laki</label>
                          <input type="radio" name="jk" value="Perempuan"><label for="Perempuan">Perempuan</label>
                        </td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td> : </td>
                        <td><input name="alamat[]" type="text" size="40" /></td>
                      </tr>
                      <tr>
                      </tr>
                      <tr>
                        <td>No Handphone</td>
                        <td> : </td>
                        <td><input name="nohp[]" type="text" size="40" /></td>
                      </tr>
                      <tr>
                        <br>
                        <td   colspan="4" align="center"><input type="submit" name="btnOk" value="Simpan" /></td>
                      </tr>
                    </table>
                    </td>
                  </tr>
                </table>
              </form>
          </div>
    </section>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.min.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>