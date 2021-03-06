<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Mahasiswa UI</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../font/montserrat.css" rel="stylesheet" type="text/css">
    <link href='../../font/kaushan-script.css' rel='stylesheet' type='text/css'>
    <link href='../../font/droid-serif.css' rel='stylesheet' type='text/css'>
    <link href='../../font/roboto-slab.css' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../../css/agency.css" rel="stylesheet">
    <link href="../../css/mystyle.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

   <?php 
        include '../Navigation/after_login.html';
    ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text min">
            </div>
        </div>
    </header>
    
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
    <div class="container">
        <div class="col-md-8 col-sm-6">
            <div class="new-activity">
                <div class="col-md-2">
                    <img src="../img/foto-profile.png" class="img-responsive">
                </div>
                <div class="col-md-10">
                    <textarea placeholder="Apa yang sedang kamu pikirkan? (max 255 karakter)"></textarea>
                    <button type="button" class="go-right btn btn-primary">Kirim</button>
                    <div class="post-option go-right">
                        <i class="fa fa-globe"></i> Publik<i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <div class="filter">
                <div class="filter-ops active"><a href="#">Semua</a></div>
                <div class="filter-ops"><a class="" href="#">Teman</a></div>
                <div class="filter-ops"><a class="" href="#">Group</a></div>
                <div class="col-md-4 go-right search">
                    <input class="search-field" type="text" name="key" placeholder="Cari artikel">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="row activity">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../../img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-8 col-sm-6 portfolio-item">
                    <span class="go-right"><h6>1 Dec 2016</h6></span>
                    <h4>Judul Artikel Jika Ada</h4>
                    <h6> Saqib, Sistem Informasi 2016</h6>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    <a href="#portfolioModal1" data-toggle="modal">read more...</a>
                    </p>
                    <a href="#"><i class="fa fa-smile-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-frown-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-lightbulb-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                    <span class="go-right share-btn">
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#portfolioModal1" data-toggle="modal">
                            <i class="fa fa-commenting fa-2x"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="row activity">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../../img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-8 col-sm-6 portfolio-item">
                    <span class="go-right"><h6>1 Dec 2016</h6></span>
                    <h4>Judul Artikel Jika Ada</h4>
                    <h6> Saqib, Sistem Informasi 2016</h6>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    <a href="#portfolioModal1" data-toggle="modal">read more...</a>
                    </p>
                    <a href="#"><i class="fa fa-smile-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-frown-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-lightbulb-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                    <span class="go-right share-btn">
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#portfolioModal1" data-toggle="modal">
                            <i class="fa fa-commenting fa-2x"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="row activity">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../../img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-8 col-sm-6 portfolio-item">
                    <span class="go-right"><h6>1 Dec 2016</h6></span>
                    <h4>Judul Artikel Jika Ada</h4>
                    <h6> Saqib, Sistem Informasi 2016</h6>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    <a href="#portfolioModal1" data-toggle="modal">read more...</a>
                    </p>
                    <a href="#"><i class="fa fa-smile-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-frown-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-lightbulb-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                    <span class="go-right share-btn">
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#portfolioModal1" data-toggle="modal">
                            <i class="fa fa-commenting fa-2x"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="row activity">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../../img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-8 col-sm-6 portfolio-item">
                    <span class="go-right"><h6>1 Dec 2016</h6></span>
                    <h4>Judul Artikel Jika Ada</h4>
                    <h6> Saqib, Sistem Informasi 2016</h6>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!
                    <a href="#portfolioModal1" data-toggle="modal">read more...</a>
                    </p>
                    <a href="#"><i class="fa fa-smile-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-frown-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-lightbulb-o fa-2x"></i></a>
                    <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                    <span class="go-right share-btn">
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#portfolioModal1" data-toggle="modal">
                            <i class="fa fa-commenting fa-2x"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="side-bar notifikasi">
                <div class="title">
                    Notifikasi
                    <!-- <span class="notif-num">9</span> -->
                    <i class="fa fa-angle-down go-right fa-2x"></i>
                </div>
                <div class="list-artikel">
                    <div class="artikel">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <h5>Komentar</h5>
                        </a><span class="notif-num">2</span>
                    </div>
                    <div class="artikel">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <h5>Teman</h5>
                        </a><span class="notif-num">3</span>
                    </div>
                    <div class="artikel">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <h5>Kelompok</h5>
                        </a><span class="notif-num">4</span>
                    </div>
                </div>
            </div>
            <div class="side-bar">
                <div class="title">Trending Artikel</div>
                <div class="list-artikel">
                    <div class="artikel">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <h5>Judul Artikel 1</h5>
                        </a>
                        <p class="author-name">oleh: Nama Penulisnya</p>
                    </div>
                    <div class="artikel">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <h5>Judul Artikel 2</h5>
                        </a>
                        <p class="author-name">oleh: Nama Penulisnya</p>
                    </div>
                    <div class="artikel">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <h5>Judul Artikel 1</h5>
                        </a>
                        <p class="author-name">oleh: Nama Penulisnya</p>
                    </div>
                    <div class="artikel">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <h5>Judul Artikel 1</h5>
                        </a>
                        <p class="author-name">oleh: Nama Penulisnya</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="bg-light-gray">
        <br>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- <div class="close-modal mini" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div> -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <div class="go-right">
                                    <button class="btn-primary"><i class="fa fa-globe"></i> Kunjungi situs</button>
                                </div></br>
                                <!-- Project Details Go Here -->
                                <h2>Cerita Satu</h2>
                                <h5 class="center item-intro text-muted">oleh : <a href=#>Saqib</a></h5>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <img class="img-responsive img-centered" src="img/portfolio/roundicons.png" alt="">
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.
                                </p>
                                <hr>
                                <div class="activity-response row">
                                    <a href="#"><i class="fa fa-smile-o fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-frown-o fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-lightbulb-o fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
                                    <span class="go-right share-btn">
                                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                    </span>
                                </div>
                                <div class="comments">
                                    <div class="comment new-comment">
                                        <div class="col-md-1">
                                            <img src="img/foto-profile.png" class="img-responsive">
                                        </div>
                                        <div class="col-md-11">
                                            <textarea placeholder="Tuliskan komentar kamu"></textarea>
                                            <button type="button" class="go-right btn btn-primary">Kirim</button>
                                        </div>    
                                    </div>
                                    <div class="comment">
                                        <h6>Nama Komenters</h6>
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
