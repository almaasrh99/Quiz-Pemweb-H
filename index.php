<?php
session_start();
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header("location: profile.php"); // Redirect ke halaman profile.php
}
$username = 'admin';
$password = 'pw123';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["berhasil_login"]=1;
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
        setcookie("message","delete",time()-1); //delete cookie message
        header("location:profile.php");
    }else {
        // Tampilkan Pesan Error
        setcookie("message", "Maaf, Username atau Password salah", time()+10);
        header("location: index.php?login=gagal"); // Redirect kembali ke halaman index.php
    } 
           
}  else{
    echo '<script type="text/javascript">',
     'validateForm();',
     '</script>'
    ;
}  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script> -->
</head>

<body>
    <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="submit">
    </form> -->

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="./assets/img/mobile.svg" class="img-fluid" alt="Phone image">
                    <!-- <div class="row">
                        <h3 class="text-center text-primary">Enter City Name</h3>
                        <span id="error"></span>
                    </div>
                    <div class="row form-group form-inline" id="rowDiv">
                        <input id="city" type="text" name="city" class="form-control" placeholder="City Name">
                        <button id="submitWeather" class="btn btn-primary">Search City</button>
                    </div>
                    <div id="show"></div> -->
                </div>
                <div class="col-md-8 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="form-box">
                        <center><a href="index.php"><img src="./assets/img/logo2.png" class="img-fluid mb-3"
                                    alt="Logo image" height="50px"></a>
                            <marquee><span class="badge badge-info mb-3">
                                    <h6>! Silahkan login terlebih dahulu</h6>
                                </span>
                            </marquee>
                            <?php if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
                                header("location: profile.php"); // Redirect ke halaman profile.php
                            }else if(isset($_GET['logout']))
	                        {
		                        echo '<span class="badge badge-success mb-2"><h7>Kamu berhasil logout!</h7></span>';
	                        }?>
                        </center>
                        <form name="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                            onsubmit="return validateForm()" method='post'>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="username" name="username" class="form-control form-control-lg" />
                                <label class="form-label" for="username">Username</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mr-4 mb-4">
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <!-- Submit button -->

                            <!-- <button id="button" type="button">Click</button>

                            <div id="overlay">
                                <div class="cv-spinner">
                                    <span class="spinner"></span>
                                </div>
                            </div> -->
                            <input type="submit" id="submit" name="submit" value="Login"
                                class="btn btn-outline-primary btn-lg btn-block mb-3"></input>
                            <?php
                            // Cek apakah terdapat cookie dengan nama message
                            if(isset($_COOKIE["message"])){ // Jika ada
                              echo ('<span class="badge badge-danger">'.$_COOKIE["message"].'</span>'); // Tampilkan pesannya
                              // Tampilkan pesannya
                            }
                            ?>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
function validateForm() {
    let x = document.forms["myForm"]["username"].value;
    let y = document.forms["myForm"]["password"].value;
    if (x == "" && y == "") {
        alert("Mohon isi username dan password !");
        return false;
    } else if (x == "") {
        alert("Username harus diisi");
        return false;
    } else if (y == "" && y == "") {
        alert("Password harus diisi !")
        return false;
    }

}
</script>

<!-- <script src="assets/js/weather.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>