<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158059697-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-158059697-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kuis berhadiah pulsa dan emas batangan</title>
    <meta name="description" content="Dapatkan Langsung Pulsa 25 Ribu dan Kesempatan Mendapatkan Emas Batangan" />
    <meta name="DC.title" content=">Kuis berhadiah pulsa dan emas batangan" />
    <meta name="geo.region" content="ID-JK" />
    <meta name="geo.placename" content="jakarta utara" />
    <meta name="geo.position" content="-0.789275;113.921327" />
    <meta name="ICBM" content="-0.789275, 113.921327" />

    <meta property="og:url" content="<?php echo current_url();?>" />
    <meta property="og:type" content="event" />
    <meta property="og:title" content="Dapatkan Langsung Pulsa 25 Ribu dan Kesempatan Mendapatkan Emas Batangan" />
    <meta property="og:description" content="Menangkan hadiah berupa voucher pulsa dan hadiah utama emas batangan" />
    <meta property="og:image" content="<?php echo base_url('assets/images/kuis-hadiah.jpeg');?>" />
    <meta property="og:image:type" content="image/png" /> 
    <meta property="og:image:width" content="894" /> 
    <meta property="og:image:height" content="657" />
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="<?php echo strtotime(date('Y-m-d H:i:s'));?>" />
    <meta property="og:app_id" content="1463119233924371"  />

    <meta name="twitter:card" content="event" />
    <meta name="twitter:site" content="@usman.raezra" />
    <meta name="twitter:creator" content="@nickbilton" />
    <meta property="og:url" content="<?php echo base_url();?>" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('themes/assets/images/favicon.ico');?>"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('themes/assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Slick slider -->
    <link href="<?php echo base_url('themes/assets/css/slick.css');?>" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url('themes/assets/css/theme-color/default-theme.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('themes/assets/css/slick.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker-1.9.0/dist/css/bootstrap-datepicker.min.css');?>" rel="stylesheet">
    <!-- Main Style -->
    <link href="<?php echo base_url('themes/style.css');?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jssocials-1.4.0/dist/font-awesome.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jssocials-1.4.0/dist/jssocials.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jssocials-1.4.0/dist/jssocials-theme-flat.css');?>" />

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
  </head>

  <body>

   	
  	<!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
			  	<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <!-- Text Logo -->
				      <!-- <a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i> DeCode</a> -->

				      <!-- Image Logo -->
				      <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->

				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav mu-menu navbar-right">
					        <li><a href="#">Beranda</a></li>
					        <li><a href="#mu-book-overview">Ikut Kuis!</a></li>
                            <li><a href="#mu-author">Term & Condition</a></li>
                            <?php if ($this->session->userdata('id') == NULL) { ?>

                            <?php } else { ?>
                            <li><a href="<?php echo base_url('welcome/logout');?>">Logout</a></li>
                            <li><a href="#">Hai, <?php echo $this->session->userdata('name');?></a></li>
                            <?php  } ?>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Featured Slider -->

	<section id="mu-hero">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img src="<?php echo base_url('assets/images/kuis-hadiah.jpeg');?>" alt="Ebook img">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1>Dapatkan Langsung Pulsa 25 Ribu dan Kesempatan Mendapatkan Voucher Belanja Jutaan Rupiah dan Emas Batangan</h1>
						<a href="#mu-book-overview" class="mu-primary-btn">Ikuti Kuisnya Sekarang!</a>
						<span>*Syarat dan Ketentuan Berlaku.</span>
					</div>
				</div>	

			</div>
		</div>
	</section>
	
	<!-- Start Featured Slider -->
	
	<!-- Start main content -->
		
	<main role="main">
		<!-- Start Book Overview -->
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Cara Mengikuti</h2>
                                <span class="mu-header-dot"></span>
                                <div class="text-left" style="font-weight: bolder;font-size:15px;">
                                    <p>
                                        1. Login/Daftar terlebih dahulu.
                                    </p>
                                    <?php if ($this->session->userdata('id') == NULL) { ?>
                                    <p>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
                                            <li role="presentation"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="register">
                                                <!-- Start Register Content -->
                                                <div class="mu-contact-content">

                                                    <div id="form-messages"></div>
                                                    <form id="ajax-register" method="post" action="<?php echo base_url('welcome/save_register');?>" class="mu-contact-form">
                                                        <div class="form-group">
                                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">             
                                                            <input type="text" class="form-control" placeholder="Nama" id="name" name="name" required>
                                                        </div>
                                                        <div class="form-group">                
                                                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                                                        </div>
                                                        <div class="form-group">                
                                                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                                        </div>
                                                        <div class="form-group">         
                                                            <input type="number" class="form-control" placeholder="No Handphone" id="handphone" name="handphone" required>
                                                        </div>
                                                        <div class="form-group">                
                                                            <input type="text" class="form-control datepicker" placeholder="Tgl Lahir" id="birth_date" name="birth_date" required>
                                                        </div>      
                                                        <div class="form-group">                
                                                            <select class="form-control" id="gender" name="gender">
                                                                <option value="P" selected>Pria</option>
                                                                <option value="W">Wanita</option>
                                                            </select>
                                                        </div>  
                                                        <button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
                                                    </form>

                                                </div>
                                                <!-- End Register Content -->
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="login">
                                                <!-- Start login Content -->
                                                <div class="mu-contact-content">
                                                    <div id="form-messages"></div>
                                                    <form id="ajax-login" method="post" action="<?php echo base_url('welcome/login');?>" class="mu-contact-form">
                                                        <div class="form-group">
                                                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">             
                                                            <input type="email" class="form-control" placeholder="Email" id="email_login" name="email_login" required>
                                                        </div>
                                                        <div class="form-group">                
                                                            <input type="password" class="form-control" placeholder="Password" id="password_login" name="password_login" required>
                                                        </div>
                                                        <button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
                                                    </form>
                                                </div>
                                                <!-- End Login Content -->
                                            </div>
                                        </div>
                                    </p>
                                    <?php } ?>
                                    <p>&nbsp;</p>
                                    <p>
                                        2. Isi form <a style="color: blue;" target="_blank" href="https://cost.affcost.com/click?campaign_id=156&pub_id=586&url_id=5&p1={rik-mem3}&source={rik-02}">KUIS DISINI</a>.
                                    </p>
                                    <p>
                                        3. Share link referal kamu ke 10 teman <i>(Login untuk mendapatkan link referal kamu)</i>.
                                    </p>
                                </div>
                                <?php if ($this->session->userdata('id') != NULL) { ?>
                                <div class="text-left">
                                    Share Link kamu ke teman-teman kamu melalui media social dibawah ini:
                                </div>
                                <div id="share" class="text-center" style="margin-top:20px;"></div>

                                <?php  if($this->session->userdata('point') >= 10 && $this->session->userdata('already_claim') == NULL) { ?>
                                    <br>
                                    <br>
                                    <p style="color:blue;"><b>Selamat, anda telah melakukan referal lebih dari 10X, Ambil Hadiahmu di sini: </b></p>
                                    <br>
                                    <a class="btn btn-success" href="<?php echo base_url('klaim-hadiah/'.$this->session->userdata('id'));?>"><b>Ambil Hadiah !!!</b></a>
                                <?php }} ?>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->
		<!-- Start Author -->
		<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Syarat dan Ketentuan</h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Author Content -->
							<div class="mu-author-content">
								<div class="row">
									<div class="col-md-12">
										<div class="mu-author-info">
                                            <p>1. Pemenang bisa langsung mendapatkan pulsa apabila; sudah share ke 10 teman dan semua mengisi form "KUIS DISINI".</p>
                                            <p>2. Perbayak share, karena kesempatan akan lebih besar untuk mendapatkan voucher belanja jutaan rupiah dan <b>Emas Batangan</b>.</p>
                                            <p>3. Akan ada 500 pemenang pulsa dan 1 pemenang Emas batangan setiap bulannya.</p>
                                        </div>
									</div>
                                    <div class="col-md-12">
                                        <div class="mu-author-info">
                                            <br>
                                            <br>
                                            <p style="text-align:center;"><i>"Seluruh Hadiah  disediakan dan diberikan hanya oleh pihak KuisHarianEkonomi,yang entitasnya 
                                            berbeda dengan rekan kerja dalam pelaksanaan kuis ini (DCODE & Provider yang tertera)"</i>
                                            </p>
                                        </div>
                                    </div>
								</div>
							</div>
							<!-- End Author Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- End Author -->
	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<!-- <div class="mu-social-media">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div> -->
				<p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
			</div>
		</div>

	</footer>
	<!-- End footer -->

    <!-- modal -->
    <!-- <div class="modal fade bs-example-modal-lg" tabindex="-1" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog  modal-dialog-center modal-lg" role="document">
            <div class="modal-content">
                <img class="img-responsive" src="<?php echo base_url('assets/images/modal-hadiah.jpeg');?>">
            </div>
        </div>
    </div> -->
<!-- end modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <button type="button" class="close button-closex" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <a style="color: blue;" target="_blank" href="https://cost.affcost.com/click?campaign_id=156&pub_id=586&url_id=5&p1={rik-mem3}&source={rik-02}">
                    <img class="img-responsive" src="<?php echo base_url('assets/images/modal-hadiah.jpeg');?>">
                </a>
            </div>
        </div>
    </div>
</div>


	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="<?php echo base_url('themes/assets/js/bootstrap.min.js');?>"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="<?php echo base_url('themes/assets/js/slick.min.js');?>"></script>
    <!-- Counter js -->
    <!-- <script type="text/javascript" src="<?php echo base_url('themes/assets/js/counter.js');?>"></script> -->
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="<?php echo base_url('themes/assets/js/app.js');?>"></script>
   
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap-datepicker-1.9.0/dist/js/bootstrap-datepicker.min.js');?>"></script>
	
    <!-- Custom js -->
	<script type="text/javascript" src="<?php echo base_url('themes/assets/js/custom.js');?>"></script>
	
    <script src="<?php echo base_url('assets/jssocials-1.4.0/dist/jssocials.min.js');?>"></script>
    <script>
        $(document).ready(function(){
            $('#myModal').modal('show');
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
            });

            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });

            $("#ajax-register").submit(function(e) {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var form = $(this);
                var url = form.attr('action');
                var type = form.attr('method');

                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: form.serialize(), // serializes the form's elements.
                    success: function(res){
                        if (res.status === 'error') {
                            alert(res.message); // show response from the php script.
                        } else {
                            alert('Selamat data anda berhasil disubmit. Selanjutnya lakukan login untuk dapat melakukan referral');
                        }
                        window.location.href = "<?php echo base_url();?>";
                    }
                });
            });

            $("#ajax-login").submit(function(e) {
                e.preventDefault(); // avoid to execute the actual submit of the form.
                var form = $(this);
                var url = form.attr('action');
                var type = form.attr('method');

                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: form.serialize(), // serializes the form's elements.
                    success: function(res){
                        console.log(res);
                        if (res.status === 'error') {
                            alert(res.message); // show response from the php script.
                        } else {
                            alert('Login berhasil');
                        }
                        window.location.href = "<?php echo base_url();?>";
                    }
                });
            });

        });
        var jsSocials = $("#share").jsSocials({
            url: "<?php echo base_url() . 'referral?code='. $this->session->userdata('referral');?>",
            text: "Yuk ikutan isi survey ini dan dapatkan hadiahnya!!!",
            showLabel: false,
            showCount: false,
            shareIn: "popup",
            shares: ["email", "twitter", "facebook", "whatsapp"]
        });
        jsSocials.setDefaults("twitter", {
            via: "artem_tabalin",
            hashtags: "jquery,plugin"
        });

        jsSocials.setDefaults("email", {
            label: "E-mail",
            logo: "fa fa-at",
            to: "my.address@test.com",
            shareIn: "self"
        });

    </script>
  </body>
</html>
