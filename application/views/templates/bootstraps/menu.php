<style media="screen">
	.logo-text-tb{
		font-size: 17px;
		font-weight: bold;
    text-transform: uppercase;
    letter-spacing: -0.5px;
		vertical-align: middle;
	}

	@media only screen and (max-width: 600px) {
		.logo img {
			position: relative;
			z-index: 2;

			width: auto;
			height: 50px;
		}

		.logo-text-tb{
			position: absolute;
			top: 15px;
			z-index: 2;
			margin:30px -155px;

			font-size: 13px;
		}
	}

	.subdropdown-number{


		font-family: "Montserrat", sans-serif;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 700;
    line-height: normal;
    text-decoration: none;
    letter-spacing: 1px;
    color: #333333;

		padding: 0 10px;
    /* padding-left: 30px; */
    min-width: 300px;
    /* margin-left: 10px; */
	}

	.divtb-overlay{
		list-style-type: number;

		overflow: auto;
		height: 365px;
	}
</style>

<!-- Header start -->
<header id="header" class="header-one">

  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">

            <div class="logo col-md-6 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">

							<a class="d-block" href="<?=base_url()?>">

								<img loading="lazy" src="<?=base_url()?>assets/img/logo_ah2_transparent.png" alt="Asosiasi Himpunan">
								<!-- <img loading="lazy" src="<?=base_url()?>assets/img/logo_kadin_hires_black.png" alt="Kadin"> -->

								<span class="logo-text-tb">Asosiasi & Himpunan Bersama Kadin</span>
							</a>

            </div><!-- logo end -->

						<div class="logo col-md-6 text-center text-lg-right mb-3 mb-md-5 mb-lg-0">

							<a class="d-block" href="<?=base_url()?>">

								<img loading="lazy" src="<?=base_url()?>assets/img/logo_kadin_hires_black.png" alt="Kadin">
							</a>

            </div><!-- logo end -->

            <!-- <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Call Us</p>
                          <p class="info-box-subtitle">(+9) 847-291-4353</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle">office@Constra.com</p>
                      </div>
                    </div>
                  </li>
                  <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                  </li>
                </ul>
            </div> -->
          </div><!-- logo area end -->

      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">

											<li class="nav-item active">
												<a class="nav-link" href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a>
											</li>

											<li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Kelompok Asosiasi</a>
                                <ul class="dropdown-menu subdropdown-number">
                                  <a href="#!">Cluster Industri</a>

																	<ol class="divtb-overlay">
																		<li><a href="#">Asosiasi Industri Pertanian & Kehutanan</a></li>
																		<li><a href="#">Asosiasi Peternakan Perikanan & Pengolahan Makanan </a></li>
																		<li><a href="#">Asosiasi Industri Pertambangan & Energi</a></li>
																		<li><a href="#">Asosiasi Industri Pengelolaan Kimia</a></li>
																		<li><a href="#">Asosiasi Industri Pengelolaan Logam & Mesin</a></li>
																		<li><a href="#">Asosiasi Industri Pengelolaan Lain-Lain</a></li>
																		<li><a href="#">Asosiasi Jasa Perdagangan & Jasa Import Export</a></li>
																		<li><a href="#">Asosiasi Kontruksi & Properti</a></li>
																		<li><a href="#">Asosiasi Keuangan & Jasa Profesi</a></li>
																		<li><a href="#">Asosiasi Perhubungan & Logistik</a></li>
																		<li><a href="#">Asosiasi Perposan Media Masa</a></li>
																		<li><a href="#">Asosiasi Pariwisata Hotel , Restoran & Mice</a></li>
																		<li><a href="#">Asosiasi Penyediaan Jasa Tenaga Kerja & Haji</a></li>
																		<li><a href="#">Asosiasi Penyediaan Jasa Lainnya</a></li>
																		<li><a href="#">Asosiasi Himpunan & Dewan Bisnis</a></li>
																	</ol>



																	<!-- <li><a href="#">1. Asosiasi Industri Pertanian & Kehutanan</a></li>
																	<li><a href="#">2. Asosiasi Peternakan Perikanan & Pengolahan Makanan </a></li>
																	<li><a href="#">3. Asosiasi Industri Pertambangan & Energi</a></li>
																	<li><a href="#">4. Asosiasi Industri Pengelolaan Kimia</a></li>
																	<li><a href="#">5. Asosiasi Industri Pengelolaan Logam & Mesin</a></li>
																	<li><a href="#">6. Asosiasi Industri Pengelolaan Lain-Lain</a></li>
																	<li><a href="#">7. Asosiasi Jasa Perdagangan & Jasa Import Export</a></li>
																	<li><a href="#">8. Asosiasi Kontruksi & Properti</a></li>
																	<li><a href="#">9. Asosiasi Keuangan & Jasa Profesi</a></li>
																	<li><a href="#">10. Asosiasi Perhubungan & Logistik</a></li>
																	<li><a href="#">11. Asosiasi Perposan Media Masa</a></li>
																	<li><a href="#">12. Asosiasi Pariwisata Hotel , Restoran & Mice</a></li>
																	<li><a href="#">13. Asosiasi Penyediaan Jasa Tenaga Kerja & Haji</a></li>
																	<li><a href="#">14. Asosiasi Penyediaan Jasa Lainnya</a></li>
																	<li><a href="#">15. Asosiasi Himpunan & Dewan Bisnis</a></li> -->
                                </ul>

                            </li>

														<li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">UMKM</a>
                                <ul class="dropdown-menu subdropdown-number">
																	<li><a href="#">INDUSTRI PERTANIAN & KEHUTANAN</a></li>
			                            <li><a href="#">INDUSTI PETERNAKAN PERIKANAN & PENGOLAHAN MAKANAN</a></li>
																	<li><a href="#">INDUSTRI PERTAMBANGAN & ENERGI</a></li>
																	<li><a href="#">INDUSTRI PENGELOLAAN KIMIA</a></li>
																	<li><a href="#">INDUSTRI PENGELOLAAN LOGAM & MESIN</a></li>
																	<li><a href="#">INDUSTRI PENGELOLAAN LAIN-LAIN</a></li>
                                </ul>
                            </li>

														<li><a href="#">Struktur Organisasi</a></li>

                          </ul>
                      </li>



											<li class="nav-item">
												<a class="nav-link" href="<?=base_url()?>galery"> Galleri</a>
											</li>

											<!-- <li class="nav-item">
												<a class="nav-link" href="<?=base_url()?>ketentuan-asosiasi"> Ketentuan</a>
											</li> -->

											<li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ketentuan <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
														<li><a href="<?=base_url()?>ketentuan-asosiasi">Persyaratan</a></li>
														<li><a href="<?=base_url()?>pojok-kebijakan">Pojok kebijakan</a></li>
                          </ul>
                      </li>

											<li class="nav-item">
												<a class="nav-link" href="<?=base_url()?>pendaftaran.html" target="_blank"> Pendaftaran</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" href="<?=base_url()?>kontak-kami"> Hubungi Kami</a>
											</li>

											<li class="nav-item">
												<!-- <a class="nav-link" href="#"> Login</a> -->
												<a href="javascript:void(0);" style="font-size:15px;" class="nav-link"  id="login-btn" data-toggle="modal" data-target="#loginModal" title="Login / Masuk">
						              <i class="fa fa-sign-in"></i>
						              <span class=""> Masuk </span>
						            </a>
											</li>

                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->


    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
