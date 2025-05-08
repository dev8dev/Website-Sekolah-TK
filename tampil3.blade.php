<!doctype html>
<html class="no-js" lang="zxx">
	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ url('/public') }}/assets4/images/ubhara.png" rel="icon">
    <!--Title-->
    <title>Fakultas Teknik Universitas Bhayangkara Surabaya</title>
    <link rel="stylesheet" href="{{ url('/public') }}/assets4/css/bootstrap.min.css">
    <!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/public') }}/assets4/css/bootstrap-icons.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{ url('/public') }}/assets4/css/simple-line-icons.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ url('/public') }}/assets4/css/themify-icons.css">
	<!-- Revolution Slider -->
	<link rel="stylesheet" type="text/css" href="{{ url('/public') }}/assets4/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/public') }}/assets4/rs-plugin/css/settings.css">
	<link rel="stylesheet" type="text/css" href="{{ url('/public') }}/assets4/rs-plugin/css/home-5/rs6.css">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{ url('/public') }}/assets4/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('/public') }}/assets4/css/owl.theme.default.min.css">
	<!-- Main Style -->
    <link rel="stylesheet" href="{{ url('/public') }}/assets4/css/style.css" class="main-style">
    <!-- Color Panel -->
    <link href="{{ url('/public') }}/assets4/css/color_panel.css" rel="stylesheet" type="text/css" /> 
    <link rel="stylesheet" href="{{ url('/public') }}/assets4/css/color-schemes/red.css" id="changeable-colors">	
	<!-- animations Css -->
	<link rel="stylesheet" href="{{ url('/public') }}/assets4/css/animate.min.css">

	<style>
		 /* Container background */
		 #section-contact {
      background-color: #ffc400;
      padding: 2rem 0;
    }

    /* Base untuk tombol sama lebar */
    .btn-equal {
      width: 300px;               /* Sesuaikan lebar */
      display: inline-block;
      text-align: center;
      font-size: 1.2rem;
      padding: 12px 16px;
      border-radius: 8px;
      border: 1px solid #ffc400;
      text-decoration: none;
      color: white;
      margin: 0 0.5rem;
    }

    .btn-consult { background-color: #666; }
    .btn-download { background-color: #000; }

    /* Span panah harus inline-block dan siap animasi */
    .btn-equal .panah,
    .btn-equal .icon-download {
      display: inline-block;
      transition: transform 0.3s ease;
    }

    /* Animasi saat tombol di-hover */
    .btn-consult:hover .panah {
      transform: translateX(8px);
    }
    .btn-download:hover .icon-download {
      transform: translateY(-6px);
    }

    /* Wrapper untuk center */
    .btn-wrapper {
      text-align: center;
    }

	</style>
	
</head>
<!--Body Start-->
<body data-res-from="1025">
	<div id="page">
	<!--Page Loader-->
	<div class="page-loader"></div>
    <!--Zmm Wrapper-->
    <div class="zmm-wrapper">
        <a href="{{route('teknik_ubhara')}}" class="zmm-close close"></a>
        <div class="zmm-inner bg-white typo-dark">
            <div class="text-center mobile-logo-part margin-bottom-30">
				<a href="{{route('teknik_ubhara')}}"><img src="{{ url('/public') }}/assets4/images/logoubhara.jpg" width="133" height="35" alt="Logo"></a>
            </div>
            <div class="zmm-main-nav">
            </div>            
			<div class="search-form-wrapper margin-top-30">
			    <form class="search-form" role="search">
			        <div class="input-group add-on">
			            <input class="form-control" placeholder="Search for.." name="srch-term" type="text">
			            <div class="input-group-btn">
			                <button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
			            </div>
			        </div>
			    </form>
			</div>
        </div>
    </div>
    <!-- Overlay Search -->
    <div class="overlay-search text-center hide">
		<a href="#" class="close close-light overlay-search-close"></a>
		<div class="search-form-wrapper">
			<form class="navbar-form search-form sliding-search-form" role="search">
				<div class="input-group add-on">
					<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
					<div class="input-group-btn">
						<button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
    <!-- Main wrapper-->
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
            <header>
                <!--Mobile Header-->
                <div class="mobile-header bg-white typo-dark">
                    <div class="mobile-header-inner">
                        <div class="sticky-outer">
                            <div class="sticky-head">
                                <div class="basic-container clearfix">
                                    <ul class="nav mobile-header-items pull-left">
                                        <li class="nav-item"><a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a></li>
                                    </ul>
                                    <ul class="nav mobile-header-items pull-center">
                                        <li>
                                            <a href="index.html" class="img-before"><img src="{{ url('/public') }}/assets4/images/logoubhara.jpg" class="img-fluid changeable-dark" width="133" height="35" alt="Logo"></a>
                                        </li>
                                    </ul>
                                    <ul class="nav mobile-header-items pull-right">
                                        <li class="nav-item"><a href="#" class="img-before overlay-search-switch"><i class="icon-magnifier icons"></i></a></li>
                                    </ul>
                                </div>
                                <!-- .basic-container -->
                            </div>
                            <!-- .sticky-head -->
                        </div>
                        <!-- .sticky-outer -->
                    </div>
                    <!-- .mobile-header-inner -->
                </div>
                <!-- .mobile-header -->
                <!--Header-->
                <div class="header-inner header-1">                    
					<!--Sticky part-->
                    <div class="sticky-outer full-dark">
                        <div class="sticky-head">
                            <!--Navbar-->
                            <nav class="navbar">
                                <div class="basic-container clearfix">
                                    <div class="navbar-inner">
										<!--Overlay Menu Switch-->
                                        <ul class="nav navbar-items pull-left">
                                            <li class="list-item">
                                                <a href="{{route('teknik_ubhara')}}" class="logo-general"><img src="{{ url('/public') }}/assets4/images/logoubhara.jpg" class="img-fluid changeable-dark" width="133" height="35" alt="Logo" /></a>
												<a href="{{route('teknik_ubhara')}}" class="logo-sticky"><img src="{{ url('/public') }}/assets4/images/logoubhara.jpg" class="img-fluid changeable-dark" width="114" height="30" alt="Logo" /></a>
                                            </li>
                                        </ul>
										<!-- Menu -->
                                        <ul class="nav navbar-items pull-right">
											<!--List Item-->
                                            <li class="list-item">
                                                <ul class="nav navbar-main theme-main-menu">
                                                    <li class="active dropdown menu-item dropdown-sub"><a
														href="{{route('teknik_ubhara')}}#section-top">Home</a>
													<ul class="dropdown-menu">
														<li><a href="{{route('sambutan_dekan')}}">Sambutan Dekan</a></li>
														<li class="dropdown"><a href=#>Profil</a>
															<ul class="dropdown-menu child-dropdown-menu">
																<li class="menu-item"><a href="{{route('sejarah')}}">Sejarah</a>
																</li>
																<li class="menu-item"><a href="{{route('visi_dan_tujuan')}}">Visi Dan tujuan</a>
																</li>
																<li class="menu-item"><a href="{{route('struktur_organisasi')}}">Struktur Organisasi</a>
																</li>
																<li class="menu-item"><a href="{{route('akreditasi_prodi')}}">Akreditasi Prodi</a>
																</li>
																<li class="menu-item"><a href="{{route('fasilitas')}}">Fasilitas</a>
																</li>
																<li class="menu-item"><a href="{{route('career_center')}}">Career Center</a>
																</li>
																<li class="menu-item"><a href="{{route('kerjasama_international')}}">Kerjasama International</a>
																</li>
													
															</ul>
														</li>
														<li class="dropdown"><a href=#>Akademik</a>
															<ul class="dropdown-menu child-dropdown-menu">
																<li class="menu-item"><a href="{{route('form_akademik')}}">Form Akademik</a>
																</li>
																<li class="menu-item"><a href="{{route('jadwal_ujian')}}">Jadwal Ujian</a>
																</li>
																<li class="menu-item"><a href="{{route('publikasi')}}">Publikasi</a>
																</li>
																<li class="menu-item"><a href="{{route('semester_antara')}}">Semester antara</a>
																</li>
																<li class="menu-item"><a href="{{route('kurikulum')}}">Kurikulum</a>
																</li>
															</ul>
														</li>
														<li class="dropdown"><a href=#>Alumni</a>
															<ul class="dropdown-menu child-dropdown-menu">
																<li class="menu-item"><a href="{{route('kisah_sukses')}}">Kisah Sukses</a>
																</li>
																<li class="menu-item"><a href="{{route('ikatan_alumni_informatika')}}">Ikatan Alumni Teknik</a>
																</li>
																<li class="menu-item"><a href="{{route('prestasi')}}">Prestasi
																		</a></li>
																<li class="menu-item"><a href="{{route('tracer_studi')}}">Tracer Studi</a>
																</li>
															</ul>
														</li>
													</ul>
													</li>
													<li class="dropdown menu-item"><a href="{{route('teknik_ubhara')}}#section-portfolio">Our Program</a></li>
													<li class="dropdown menu-item"><a href="{{route('teknik_ubhara')}}#section-latest">Latest Activity</a></li>
													<li class="dropdown menu-item"><a href="{{route('teknik_ubhara')}}#section-team">Our team</a></li>
													<li class="dropdown menu-item"><a href="{{route('teknik_ubhara')}}#section-services">Features</a></li>
													<li class="dropdown menu-item"><a href="{{route('teknik_ubhara')}}#section-testimonial">Testimonials</a></li>
													<li class="dropdown menu-item"><a href="{{route('teknik_ubhara')}}#section-contact">Contact Us</a></li>
                                                </ul>
                                            </li>
											<!--List Item-->
                                            <li class="list-item">												
												<a href="#" class="full-view-switch text-center"><i class="ti-search typo-dark"></i></a>
												<!--Search-->
												<div class="full-view-wrapper hide">
													<a href="#" class="close full-view-close"></a>
													<form class="navbar-form search-form" role="search">
														<div class="input-group">
															<input class="form-control" placeholder="Search hit enter.." name="srch-term" type="text">
														</div>
													</form>
												</div>												
											</li>
											<!--List Item End-->											
                                        </ul>
										<!-- Menu -->
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <!--sticky-head-->
                    </div>
                    <!--sticky-outer-->
                </div>
            </header>




            <div class="content-wrapper pad-none">
				<div class="content-inner">
					<!-- page-header -->
						
					<?php 
						echo $html
					?>
						
									<!-- isi konten dekan -->		


						<!-- Get a Quote Section End -->
				</div>
				<!-- .page-wrapper-inner -->
			</div>




 <footer id="footer" class="footer bg-dark footer-1">
        <!-- Footer Widgets Columns Posibilities 4 -->
        <div class="footer-widgets">
            <div class="footer-middle-wrap">				
                <div class="container">
                    <div class="row">
						<div class="col-lg-3 widget text-widget">
							
								<img src="{{ url('/public') }}/assets4/images/UbharaLogo8.jpg" class="img-fluid thumb w-100" width="270" height="270" alt="team-img" />	                         
							
						</div>
                         <div class="col-lg-3 widget text-widget">
							<div class="widget-title">
                                <!-- Title -->
                                <h3 class="title text-uppercase">About Us</h3>
                            </div>						
                            <!-- Text -->
                            <div class="widget-text margin-bottom-15">
								<p>Fakultas Teknik Universitas Bhayangkara Surabaya</p>
							</div>
							<nav>
                                <ul class="contact-info">
                                    <!-- List Items -->
                                    <li>
                                        <i aria-hidden="true" class="ti-location-pin theme-color"></i> <span> Jl. Ahmad Yani No.114, Ketintang,
											Kec. Gayungan, Kota SBY, Jawa Timur 60231, Indonesia</span>
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="ti-email theme-color"></i> <a href="mailto:info@zozothemes.com"> info@ubharateknik.ubhara.ac.id</a></span>
                                    </li>
									<li>
                                        <i aria-hidden="true" class="ti-headphone theme-color"></i> <a href="tel:+(123) 456-7890"> 031-8285602,8291055 Fax.031-8285601,8291107</a></span>
                                    </li>									
                                </ul>
                            </nav>
                        </div>
						<!-- Col -->
						
                        <!-- Col -->
                        <div class="col-lg-3 widget text-widget">
							<div class="widget-title">
                                <!-- Title -->
                                <h3 class="title text-uppercase">Prodi Fakultas Teknik</h3>
                            </div>
                            <!-- Text -->
                            <div class="menu-quick-links">
								<ul class="menu">
									<li class="menu-item"><a href="#">Teknik Sipil</a></li>
									<li class="menu-item"><a href="#">Teknik Elektro</a></li>
									<li class="menu-item"><a href="#">Teknik Informatika</a></li>								
								</ul>
							</div>                           
                        </div>
                        <!-- Col -->
                        <div class="col-lg-3 widget text-widget">
							<div class="widget-title">
                                <!-- Title -->
                                <h3 class="title text-uppercase">Link Cepat</h3>
                            </div>
                            <!-- Text -->
                            <div class="menu-quick-links">
								<ul class="menu">
									<li class="menu-item"><a href="#">Social Media</a></li>								
								</ul>
							</div>  
							<div class="social-icons mt-3 mb-3">
									<a href="#" class="social-fb"><span class="ti-facebook"></span></a>
									<a href="#" class="social-twitter"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="#" class="social-instagram"><span class="ti-instagram"></span></a>
									<a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
							</div>                         
                        </div>
						<!-- Col -->
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Copyright Columns Posibilities 4-->
        <div class="footer-copyright bg-grey">
            <div class="footer-bottom-wrap pad-tb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 copyright-section">
                            <ul class="footer-bottom-items pull-left">
                                <li class="nav-item">
                                    <div class="nav-item-inner copyright">
                                        Copyrights  © 2025 <a href="https://zozothemes.com/html/mist/index.html">Fakultas Teknik Ubhara</a>. Created By <a href="https://zozothemes.com/">Dev 8</a>
                                    </div>
                                </li>
									
                            </ul>
                            <ul class="footer-bottom-items pull-right">
								<div class="move-top page-scroll">
									<a href="#page">
										<i class="bi bi-arrow-up"></i>
									</a>
								</div>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
	</div>

    <!-- Color Switcher -->
	

    <!-- jQuery Lib -->
    <script src="{{ url('/public') }}/assets4/js/jquery.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{ url('/public') }}/assets4/js/bootstrap.bundle.min.js"></script>
	<!-- Popper Js Support for Bootstrap -->
    <script src="{{ url('/public') }}/assets4/js/popper.min.js"></script>
    <!-- Easing Js -->
    <script src="{{ url('/public') }}/assets4/js/jquery.easing.min.js"></script>
    <!-- Carousel Js Code -->
    <script src="{{ url('/public') }}/assets4/js/owl.carousel.min.js"></script> 
    <!-- Isotope Js -->
    <script src="{{ url('/public') }}/assets4/js/isotope.pkgd.min.js"></script>
	<!-- Validator Js -->
    <script src="{{ url('/public') }}/assets4/js/validator.min.js"></script>
    <!-- Smart Resize Js -->
    <script src="{{ url('/public') }}/assets4/js/smartresize.min.js"></script>
    <!-- Appear Js -->
    <script src="{{ url('/public') }}/assets4/js/jquery.appear.min.js"></script>
	<!-- Background youtube Video Js -->
    <script src="{{ url('/public') }}/assets4/js/jquery.youtube-background.js"></script>
	<!-- Color -->
	<script src="{{ url('/public') }}/assets4/js/color-panel.js"></script>
	<!-- REVOLUTION JS FILES -->
	<script src="{{ url('/public') }}/assets4/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{ url('/public') }}/assets4/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="{{ url('/public') }}/assets4/rs-plugin/js/home-5/rbtools.min.js"></script>
	<script src="{{ url('/public') }}/assets4/rs-plugin/js/home-5/rs6.min.js"></script>
	<script src="{{ url('/public') }}/assets4/rs-plugin/js/home-5/home-5.js"></script>
	<!-- Theme Custom Js -->
    <script src="{{ url('/public') }}/assets4/js/custom.js"></script>	
</body>
<!-- Body End -->
</html>