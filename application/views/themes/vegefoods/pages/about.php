<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body class="goto-here">
	<div class="py-1 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text"><?php echo get_settings('store_phone_number'); ?></span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text"><?php echo get_settings('store_email'); ?></span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text"><?php echo get_settings('store_tagline'); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo get_store_name(); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?php echo base_url(); ?>" class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori Produk</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">           
							<a class="dropdown-item" href="<?php echo site_url('shop/productkategori/9'); ?>">Kaos</a>
              <a class="dropdown-item" href="<?php echo site_url('shop/productkategori/10'); ?>">Kemeja</a>
              <a class="dropdown-item" href="<?php echo site_url('shop/productkategori/11'); ?>">Celana</a>			
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Belanja</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="<?php echo site_url('shop/cart'); ?>">Keranjang Belanja</a>
							<a class="dropdown-item" href="<?php echo site_url('customer/payments/confirm'); ?>">Konfirmasi Pembayaran</a>

						</div>
					</li>
					<!-- <li class="nav-item"><a href="<?php echo site_url('pages/about'); ?>" class="nav-link">Tentang</a></li>
					<li class="nav-item"><a href="<?php echo site_url('pages/contact'); ?>" class="nav-link">Kontak</a></li> -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
						<div class="dropdown-menu" aria-labelledby="dropdown05">
							<?php if (is_login() && is_customer()) : ?>
								<a class="dropdown-item" href="<?php echo site_url('customer'); ?>">Akun saya</a>
								<a class="dropdown-item" href="<?php echo site_url('customer/orders'); ?>">Order</a>
								<div class="divider"></div>
								<a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
							<?php else : ?>
								<a class="dropdown-item" href="<?php echo site_url('auth/login'); ?>">Login</a>
								<a class="dropdown-item" href="<?php echo site_url('auth/register'); ?>">Daftar</a>
							<?php endif; ?>
						</div>
					</li>
					<li class="nav-item cta cta-colored"><a href="<?php echo site_url('shop/cart'); ?>" class="nav-link"><span class="icon-shopping_cart"></span>[<span class="cart-item-total">0</span>]</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
<!-- <div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/bg_2.jpg'); ?>');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Tentang Kami</span></p>
          <h1 class="mb-0 bread">Tentang Kami</h1>
        </div>
      </div>
    </div>
  </div> -->
<p></p><p></p>
  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
          <div class="container">
            <br> <br>
              <div class="row">
                  <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_theme_uri('images/manfaat.png'); ?>);">
                      <a href="https://www.youtube.com/watch?v=MmVhxh_SaHY" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                          <span class="icon-play"></span>
                      </a>
                  </div>
                  <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-4 mt-md-5">
                <div class="ml-md-0">
                  <h2 class="mb-4">Selamat Datang di Toko Online <?php echo get_store_name(); ?></h2>
              </div>
            </div>
            <div class="pb-md-5">
                <p><?php echo get_settings('store_description'); ?></p>
                          <p><a href="<?php echo site_url('browse'); ?>" class="btn btn-primary">Belanja sekarang!</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
 

  
<section class="ftco-section">
      <div class="container">
          <div class="row no-gutters ftco-services">
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Gratis Ongkir</h3>
          <span>Belanja minimal Rp <?php echo format_rupiah(get_settings('min_shop_to_free_shipping_cost')); ?></span>
        </div>
      </div>      
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-diet"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Selalu Segar</h3>
          <span>Dipetik Langsung dari Kebun</span>
        </div>
      </div>    
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Kualitas Terbaik</h3>
          <span>Kualitas dari Pertanian Terbaik</span>
        </div>
      </div>      
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Bantuan</h3>
          <span>Bantuan 24/7 Selalu Online</span>
        </div>
      </div>      
    </div>
  </div>
      </div>
  </section>