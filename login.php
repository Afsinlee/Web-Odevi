<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
     <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>LOGIN SAYFASI</title>
    <style>
    .navbar-nav a {
    font-family: poppins;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: bold;
}

.navbar-light .navbar-brand {
    color: black;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 2px;
    text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px white;
}

.navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
    color: black;
}

.navbar-light .navbar-nav .nav-link {
    color: black;
    text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px white;
    border-block-end: solid black;
}

.navbar-nav {
    text-align: center;
}

.nav-link {
    padding: .2rem 1rem;
}

    .nav-link.active, .nav-link:focus {
        color: #fff;
    }

.navbar-toggler {
    padding: 1px 5px;
    font-size: 18px;
    line-height: 0.3;
    background: #fff;
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: #fff;
}

.w-100 {
    height: 100vh;
}

@media only screen and (max-width: 767px) {
    .navbar-nav.ml-auto {
        background: rgba(0, 0, 0, 0.5);
    }

    .navbar-nav a {
        font-size: 14px;
        font-weight: normal;
    }
}



.login-data{
    text-align: center
}

/***************************************/
footer {
    width: 100%;
    height: 200px;
}
/*Big footer*/
.b-footer {
    width: 100%;
    height: 80%;
    background-color: rgb(58, 54, 54);
    opacity: 0.5;
}

.links {
    color: white;
    font-size: 25px;
    text-align: center;
    padding-top: 15px;
}

.b-footer ul {
    list-style-type: none;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 1;
}

.fab {
    color: white;
    font-size: 30px;
    padding: 25px;
    display-
}

    .fab:hover {
        color: white;
    }

.fa:hover {
    color: blue;
}

.ig:hover {
    color: purple;
}

.you:hover {
    color: red;
}

.fa {
    padding-left: 0;
}


/*Big footer*/


/*small footer*/

.s-footer {
    width: 100%;
    height: 20%;
    background-color: black;
    opacity: 1;
    color: white;
    position: relative;
}

    .s-footer div {
        width: 100%;
        height: 100%;
        text-align: center;
        justify-content: center;
        position: absolute;
    }

/*/small footer*/
    </style>
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Mesut</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">ANA SAYFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda.html">HAKKIMDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Memleketim.html">MEMLEKETİM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CV.html">ÖZGEÇMİŞ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br /><br /><br /><br /><br /><br /><br />
    <div class=login-data>
                    <b>
                        <h3>
                        <?php
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            if ($email == "u111210027@sakarya.edu.tr" && $password == "u111210027") {  
                                echo "HOŞGELDİNİZ: " . $email;
                                }
                            else {
                                echo "Hatalı!! email veya password hatalıdır";
                                }

                        ?>
                        </h3>
                    <b>    
    </div>

   <br/><br/><br/><br/><br/><br/><br/><br/>
<footer>

        <div class="b-footer">
            <div class="links">My Social Links</div>
            <ul>
                <li>
                    <a href="https://www.facebook.com/masoudkasom">
                        <i class="fab fa fa-facebook fa"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/mesut_alkassum/">
                        <i class="fab fa fa-instagram ig"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UC50nN1694O62O8K9pka0HBg">
                        <i class="fab fa fa-youtube you"></i>
                    </a>
                </li>
            </ul>

        </div>
        <div class="s-footer">
            <div>Bu Proje Sakarya Üniversitesi için yapıldı 2022</div>
        </div>


    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>