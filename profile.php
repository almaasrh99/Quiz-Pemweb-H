<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/jquery.fancyMessenger.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Profile</title>
    <style>
    body {
        background: #ececec;
    }

    .lds-dual-ring.hidden {
        display: none;
    }

    .lds-dual-ring {
        display: inline-block;
        width: 80px;
        height: 80px;
        justify-content: center;
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 5% auto;
        border-radius: 50%;
        border: 6px solid #128bca;
        border-color: #128bca transparent #128bca transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>
</head>

<body>
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
         <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav">

                <a class="nav-link navlogo text-center" href="profile.php">
                    <img src="assets/img/logo3.png" alt="Logo">
                </a>
                <li class="nav-item">
                    <a class="nav-link sidefrst" href="#home">
                        <span class="textside"><b>Dashboard</b> </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link sidesecnd" href="#product">
                        <span class="textside"><b>Product</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidesthrd" href="#service">
                        <span class="textside"><b>Service</b>
                        </span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link sidesforth" href="#contact">
                        <span class="textside">  Contact</span>
                    </a>
                </li> -->

            </ul>
        </div>
    </nav>
    <section id="home">
        <div class="content-wrapper">
            <?php
        session_start();
if(!isset($_SESSION["berhasil_login"]) and !isset($_SESSION["username"]) and !isset($_SESSION["password"])){
    die("<center><h2>Maaf, anda tidak mempunyai akses ke halaman ini, silahkan <a href=\"index.php\">login</a></h2><img src=assets/img/stop.png width=500px></center>");
   
}else{
   
    echo ('<a href=logout.php><button type="button" class="btn btn-danger ">'.'<i class="fa fa-power-off" aria-hidden="true"> Logout</i></button></a><button type="button" class="btn btn-success ">'.'<i class="fa fa-user" aria-hidden="true"> '.$_SESSION["username"].'</button></i></a>');
    echo ('<h3>Login berhasil,selamat datang!</h3>');
    echo "<center>";
    // echo ('<img src="./assets/img/user1.svg" class="img-fluid" alt="User image" width=80px"><h3><span class="badge badge-success">'.$_SESSION["username"].'</span></h3>');
    echo "</center>";
}
?>
            <div class="container">
                <div class="row">
                    <div class="jumbotron">
                        <h4 class="display-4">Halo</h4>
                        <p class="lead">Ini merupakan halaman dashboard admin, kamu bisa melihat data-data yang tersedia
                            di
                            halaman
                            ini. Mulai dari daftar produk, klien, hingga penghasilan yang diperoleh. </p>
                        <hr class="my-4">
                        <p>Kami bergerak dalam bidang jual beli property, sebisa mungkin kami akan melayani customer
                            dengan baik
                            dan profesional.</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Icon Cards-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                                    <img src="assets/img/property.svg" class="img-fluid " alt="">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Product</h4>
                                    <h2>20</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                                    <img src="assets/img/people.svg" class="img-fluid " alt="">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Clients</h4>
                                    <h2>520</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                        <div class="inforide">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                                    <img src="assets/img/money.svg" class="img-fluid " alt="">
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                                    <h4>Income</h4>
                                    <h2>$ 500000</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center mt-3">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="col-lg-12 col-md-6 col-sm-12 col-12">
                                <center> <button id='getDataBtn' class="btn btn-primary mb-2">
                                        <h5>Get Data</h5>
                                    </button>
                                </center>
                            </div>
                            <div id="richList"></div>
                            <div id="loader" class="lds-dual-ring hidden overlay"></div>
                            <div class="card-header">
                                <h4>Top Client</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">20 Daftar Top Client</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table">
                                            <td></td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="product">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 text-center mt-5">
                                        <div class="portofolio-content">
                                            <h2 class="portofolio-title">
                                                <span class="text-black">Produk</span>
                                                <hr>
                                            </h2>
                                        </div>
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100"
                                                        src="https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/advisor/wp-content/uploads/2021/08/download-23.jpg"
                                                        alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                        src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/advisor/wp-content/uploads/2021/09/loft-apartment.jpeg.jpg"
                                                        alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                        src="https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/advisor/wp-content/uploads/2020/11/winding-river-landscape-e1606232166498.jpg"
                                                        alt="Third slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                        src="https://www.galleryparquet.com/wp-content/uploads/2017/12/starbuck-lumberceiling.jpg"
                                                        alt="Fourth slide">
                                                </div>

                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                        src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/advisor/wp-content/uploads/2021/09/high-rise-apartment.jpeg.jpg"
                                                        alt="Fifth slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                        src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/advisor/wp-content/uploads/2021/08/download-8.jpg"
                                                        alt="Sixth slide">
                                                </div>

                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <section id="service">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12"></div>
                        <div class="card">
                            <div class="col-md-12 text-center mb-3">
                                <h2 class="section-title"><span class="text-black">Layanan</span>
                                </h2>
                                <hr>
                                <p class="lead">
                                    Kami melayani berbagai macam keperluan barang property,
                                    seperti
                                    kontrakan, apartemen, kost, dan lain-lain.Dengan harga
                                    yang bersaing
                                    dan kualitas yang baik, kami akan menjamin kepuasan
                                    customer.
                                    Tunggu apalagi, buruan beli.
                                </p>
                            </div>
                        </div>
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card border-0 text-center">
                                        <div class="card-body">
                                            <img src="assets/img/house.svg" class="filter-blue" width="80px" alt=""
                                                class="mb-2">
                                            <h5 class="card-title">Rumah</h5>
                                            <p class="card-desc"> Kami menyediakan berbagai
                                                macam tipe rumah
                                                dengan
                                                harga yang bersaing dan kualitas yang baik.
                                                Desain indah
                                                dengan
                                                konsep modern.Serta lingkungan yang nyaman
                                                membuat anda
                                                betah tinggal disana.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card border-0 text-center">
                                        <div class="card-body">
                                            <img src="assets/img/hotel.svg" class="filter-blue" width="80px" alt=""
                                                class="mb-2">
                                            <h5 class="card-title">Apartemen</h5>
                                            <p class="card-desc">
                                                Tersedia berbagai macam tipe apartemen
                                                dengan harga yang
                                                bersaing dan kualitas yang terbaik. Desain
                                                interior indah
                                                dengan konsep modern.Tersedia
                                                juga toko dan restoran yang dekat dengan
                                                lokasi.

                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card border-0 text-center">
                                        <div class="card-body">
                                            <img src="assets/img/farm.svg" class="filter-blue" width="80px" alt=""
                                                class="mb-2">
                                            <h5 class="card-title"> Lahan</h5>
                                            <p class="card-desc"> Kami juga menyediakan
                                                lahan untuk
                                                pertanian atau perkebunan dengan kualitas
                                                tanah yang subur,
                                                kami menawarkan harga yang bersaing dan luas
                                                yang
                                                bervariatif, siap selalu
                                                memenuhi kebutuhan anda kapanpun.

                                            </p>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card border-0 text-center">
                                        <div class="card-body">
                                            <img src="assets/img/store.svg" class="filter-blue" width="80px" alt=""
                                                class="mb-2">
                                            <h5 class="card-title">Kios</h5>
                                            <p class="card-desc">Bagi anda yang sudah
                                                memiliki usaha
                                                ataupun ingin memulai usaha baru, kami siap
                                                membantu anda.
                                                Kami menyediakan berbagai macam tipe kios
                                                dengan harga
                                                yang bersaing dan lokasi yang strategis.
                                            </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
            <section id="contact">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                        </div>
                    </div>
                </div>
            </section>

</body>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="assets/js/contact.js"></script>
<!-- <script src="assets/js/jquery.fancyMessenger.js"></script> -->
<script src="assets/js/jquery.fancyMessenger.min.js"></script>
<script>
$('#getDataBtn').click(function() {

    $.ajax({
        type: "GET",
        url: "https://forbes400.herokuapp.com/api/forbes400?limit=20",
        dataType: 'json',
        beforeSend: function() {
            $('#loader').removeClass('hidden')
        },
        success: function(data) {
            console.log(data);
            let richList = "<ol>";
            for (let i = 0; i < data.length; i++) {
                console.log(data[i].uri);
                richList += "<h6><li>" + data[i].uri + "</li></h6>";
            }
            richList += "</ol>"
            $('#table').html(richList);
        },
        complete: function() {
            $('#loader').addClass('hidden')
        },
    });
});
</script>
<script>
window.onscroll = () => {
    var current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop) {
            current = section.getAttribute("id");
        }
    });
};
</script>


</html>