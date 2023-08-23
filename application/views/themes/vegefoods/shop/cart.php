<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="goto-here">
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark " id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo get_store_name(); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?php echo base_url(); ?>" class="nav-link">Home</a></li>
				
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


  <section class="ftco-section ftco-Keranjang Belanja">
          <div class="container">
          <?php if ( count($carts) > 0) : ?>
            <form action="<?php echo site_url('shop/checkout'); ?>" method="POST">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table class="table">
                          <thead class="thead-primary">
                            <tr class="text-center">
                              <th>&nbsp;</th>
                              <th>&nbsp;</th>
                              <th>Produk</th>
                              <th>Harga</th>
                              <th>Kuantitas</th>
                              <th>Sub Total</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($carts as $item) : ?>
                            <tr class="text-center cart-<?php echo $item['rowid']; ?>">
                              <td class="product-remove"><a href="#" class="remove-item" data-rowid="<?php echo $item['rowid']; ?>"><span class="ion-ios-close"></span></a></td>
                              
                              <td class="image-prod"><div class="img img-fluid rounded" style="background-image:url(<?php echo get_product_image($item['id']); ?>);"></div></td>
                              
                              <td class="product-name">
                                  <h3><?php echo $item['name']; ?></h3>
                              </td>
                              
                              <td class="price">Rp <?php echo format_rupiah($item['price']); ?></td>
                              
                              <td class="quantity">
                                  <div class="input-group mb-3">
                                   <input type="text" name="quantity[<?php echo $item['rowid']; ?>]" class="quantity form-control input-number" value="<?php echo $item['qty']; ?>" min="1" max="100">
                                </div>
                            </td>
                              
                              <td class="total">Rp <?php echo format_rupiah($item['subtotal']); ?></td>
                            </tr><!-- END TR-->
                              <?php endforeach; ?>
                          </tbody>
                        </table>
                    </div>
              </div>
          </div>
          <div class="row justify-content-end">
             
              
              <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>Rincian Keranjang</h3>
                      <p class="d-flex">
                          <span>Subtotal</span>
                          <span class="n-subtotal font-weight-bold">Rp <?php echo format_rupiah($total_cart); ?></span>
                      </p>
                      <p class="d-flex">
                          <span>Biaya pengiriman</span>
                          <?php if ( $total_cart >= get_settings('min_shop_to_free_shipping_cost')) : ?>
                          <span class="n-ongkir font-weight-bold">Gratis</span>
                          <?php else : ?>
                            <span class="n-ongkir font-weight-bold">Rp <?php echo format_rupiah(get_settings('shipping_cost')); ?></span>
                          <?php endif; ?>
                      </p>
                      <hr>
                      <p class="d-flex total-price">
                          <span>Total</span>
                          <span class="n-total font-weight-bold">Rp <?php echo format_rupiah($total_price); ?></span>
                      </p>
                  </div>
                  <p><button type="submit" class="btn btn-primary py-3 px-4">Checkout</button></p>
              </div>
          </div>
          </form>
          <?php else : ?>
            <div class="row">
              <div class="col-md-12 ftco-animate">
                <div class="alert alert-info">Tidak ada barang dalam keranjang.<br><?php echo anchor('browse', 'Jelajahi produk kami'); ?> dan mulailah berbelanja!</div>
              </div>
            </div>
          <?php endif; ?>
          </div>
      </section>

<script>
  $('.remove-item').click(function(e) {
    e.preventDefault();

    var rowid = $(this).data('rowid');
    var tr = $('.cart-'+ rowid);

    $('.product-name', tr).html('<i class="fa fa-spin fa-spinner"></i> Menghapus...');

    $.ajax({
      method: 'POST',
      url: '<?php echo site_url('shop/cart_api?action=remove_item'); ?>',
      data: { rowid: rowid },
      success: function (res) {
        if (res.code == 204) {
          tr.addClass('alert alert-danger');

          setTimeout(function(e) {
            tr.hide('fade');

            $('.n-subtotal').text(res.total.subtotal);
            $('.n-ongkir').text(res.total.ongkir);
            $('.n-total').text(res.total.total);
          }, 2000);
        }
      }
    })
  })
</script>