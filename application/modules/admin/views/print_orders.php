<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		window.print();
	</script>
  
	<center>
	  <h1> Data Order Customer</h1>
			<br />
		</center>
	 <div class="card-body p-0">
                <div class="table-responsive">
              <!-- Projects table -->
              <table border="1" solid:#000; padding:6px>
                <thead class="thead-light">
                   <tr align="center">
                    <td align="center">ID</td>
                    <td align="center">Customer</td>
                    <td align="center">Tanggal</td>
                    <td align="center">Jumlah Item</td>
                    <td align="center">Jumlah Harga</td>
                    <td align="center">Status</td>
                  </tr>
                </thead>
                <tbody>
                	
                <?php foreach ($orders as $order) : ?>
                  <tr>
                    <td align="center">
                      <?php echo anchor('admin/orders/view/'. $order->id, ''. $order->order_number); ?>
                    </td>
                    <td align="center"><?php echo $order->customer; ?></td>
                    <td align="center">
                      <?php echo get_formatted_date($order->order_date); ?>
                    </td>
                    <td align="center">
                      <?php echo $order->total_items; ?>
                    </td>
                    <td align="center">
                      Rp <?php echo format_rupiah($order->total_price); ?>
                    </td>
                    <td align="center"><?php echo get_order_status($order->order_status, $order->payment_method); ?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
                </div>
	

</body>
</html>