
<html lang="en">
    <head>

        <?php
          // if ($ket_filter != "") {
          //   $fbr = str_replace('%20',' ',$ket_filter);
          // }else {
          //   $fbr = "One Step Solution for Your Home";
          // }
        ?>

        <title>
    			<?php
            // echo $aplikasi->singkatan_unit.' - '.$fbr
          ?>
          Asosiasi & Himpunan Bersama Kadin
    		</title>

        <!-- Favicon -->
    		<link rel="shortcut icon" href="<?=base_url()?>assets/img/logo_transparent.png" type="image/x-icon" />
    		<link rel="apple-touch-icon" href="<?=base_url()?>assets/img/logo_transparent.png">

        <!-- Mobile Metas -->
    		<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
        <!-- <meta name="viewport" content="width=device-width" /> -->
    		<meta content="width=device-width, initial-scale=1" name="viewport" />


        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index, follow" />
        <meta name="description" content="Asosiasi & Himpunan Bersama Kadin" />
        <meta name="keywords" content="A & H Bersama Kadin, Asosiasi & Himpunan Bersama Kadin" />
        <meta http-equiv="Copyright" content="tera_byte" />
        <meta name="author" content="tera_byte" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="language" content="Indonesia" />
        <meta name="revisit-after" content="7" />
        <meta name="webcrawlers" content="all" />
        <meta name="rating" content="general" />
        <meta name="spiders" content="all" />

        <!-- Social Media Meta -->
        <meta property="place:location:latitude" content="13.062616" /> <!-- Silahkan disesuaikan -->
        <meta property="place:location:longitude" content="80.229508" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:street_address" content="Cimanggis Elok B12" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:locality" content="City Name" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:postal_code" content="ZIP Code" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:country_name" content="Indonesia" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:email" content="tubagus.aom.swk@gmail.com" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:phone_number" content="085737744383" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:website" content="https://it.konsultan.com" />

        <meta property="og:type" content="article" /> <!-- Card type bisa di ganti article, website, blog dan profile -->
        <meta property="profile:first_name" content="TB" /> <!-- Silahkan disesuaikan -->
        <meta property="profile:last_name" content="AOM" /> <!-- Silahkan disesuaikan -->
        <meta property="profile:username" content="Facebook_Username" /> <!-- Silahkan disesuaikan -->
        <meta property="og:title" content="Home - Asosiasi & Himpunan Bersama Kadin" />
        <meta property="og:description" content="Asosiasi & Himpunan Bersama Kadin" />
        <meta property="og:image" content="https://it.konsultan.com/favicon.ico" />
        <meta property="og:url" content="https://it.konsultan.com/" />
        <meta property="og:site_name" content="A & H Bersama Kadin" />
        <meta property="fb:admins" content="Facebook_ID" /> <!-- Silahkan disesuaikan -->

        <meta name="twitter:card" content="summary" />  <!-- Card type jangan di ganti -->
        <meta name="twitter:site" content="Asosiasi & Himpunan Bersama Kadin" />
        <meta name="twitter:title" content="Home - A & H Bersama Kadin" />
        <meta name="twitter:description" content="Asosiasi & Himpunan Bersama Kadin" />
        <meta name="twitter:creator" content="Twitter_Username" /> <!-- Silahkan disesuaikan -->
        <meta name="twitter:image:src" content="https://it.konsultan.com/favicon.ico" />
        <meta name="twitter:domain" content="https://it.konsultan.com/" />

        <meta itemprop="name" content="Home - A & H Bersama Kadin" />
        <meta itemprop="description" content="Asosiasi & Himpunan Bersama Kadin" />
        <meta itemprop="image" content="https://it.konsultan.com/favicon.ico" />



        <script src="<?php echo base_url() ?>assets/js/jquery.v2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstraps/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstraps/bootbox.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/public/login.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/public/bootstrap-datepicker.js" type="text/javascript"></script>

        <script type="text/javascript">
            var base_url = "<?php echo base_url() ?>";
        </script>

        <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstraps/font-awesome.min.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datepicker.css" type="text/css"/> -->


        <!-- CSS
      ================================================== -->
        <!-- Bootstrap -->
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/plugins/bootstrap/bootstrap.min.css">
          <!-- FontAwesome -->
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/plugins/fontawesome/css/all.min.css">
          <!-- Animation -->
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/plugins/animate-css/animate.css">
          <!-- slick Carousel -->
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/plugins/slick/slick.css">
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/plugins/slick/slick-theme.css">
          <!-- Colorbox -->
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/plugins/colorbox/colorbox.css">
          <!-- Template styles-->
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/_tera_byte/css/style.css">

    </head>

    <body>


      <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
              <div class="row">

                  <div class="col-lg-12 col-md-12">
                    <ul class="top-info text-center text-md-left">
                        <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Menara Kadin Indonesia Lt.29, Jakarta</p>
                        </li>
                    </ul>
                  </div>
                  <!--/ Top info end -->

                  <div class="col-lg-4 col-md-4 top-social text-center text-md-right">

                    <!-- <ul class="list-unstyled">
                        <li>
                          <a title="Facebook" href="https://facebbok.com/themefisher.com">
                              <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                          </a>
                          <a title="Twitter" href="https://twitter.com/themefisher.com">
                              <span class="social-icon"><i class="fab fa-twitter"></i></span>
                          </a>
                          <a title="Instagram" href="https://instagram.com/themefisher.com">
                              <span class="social-icon"><i class="fab fa-instagram"></i></span>
                          </a>
                          <a title="Linkdin" href="https://github.com/themefisher.com">
                              <span class="social-icon"><i class="fab fa-github"></i></span>
                          </a>
                        </li>
                    </ul> -->
                  </div>
                  <!--/ Top social end -->
              </div>
              <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->

        <?=$this->load->view('templates/bootstraps/menu'); ?>


        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content rounded-0 border-0 p-4">
                    <div class="modal-header border-0">
                        <h3>Login</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="row">
                            <div class="col-12">
                                <!-- <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone"> -->
                                <input type="text" placeholder="Username" class="form-control mb-3 login-control" aria-describedby="basic-addon1" name="inputUsername" id="inputUsername">
                            </div>
                            <div class="col-12">
                                <!-- <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password"> -->
                                <input type="password" placeholder="Password" class="form-control mb-3 login-control" aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if (event.keyCode == 13) login_click();">
                            </div>
                            <div class="col-12">
                                <!-- <button type="button" class="btn btn-primary" id="btn-login">LOGIN</button> -->
                                <button type="button" class="btn btn-primary disabled" id="btn-login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->

                <script>
                    function login_click() {
                        $('#btn-login').click();
                    }
                </script>
