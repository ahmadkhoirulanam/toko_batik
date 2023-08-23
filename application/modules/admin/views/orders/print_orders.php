<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>ID</th>
            <td>Customer</th>
            <td>Tanggal</th>
            <td>Jumlah Item</th>
            <td>Jumlah Harga</th>
            <td>Status</th>

		</tr>

		 <?php foreach ($orders as $order) : ?>
                  <tr>
                    <th scope="col">
                      <?php echo anchor('admin/orders/view/'. $order->id, '#'. $order->order_number); ?>
                    </th>
                    <td><?php echo $order->customer; ?></td>
                    <td>
                      <?php echo get_formatted_date($order->order_date); ?>
                    </td>
                    <td>
                      <?php echo $order->total_items; ?>
                    </td>
                    <td>
                      Rp <?php echo format_rupiah($order->total_price); ?>
                    </td>
                    <td><?php echo get_order_status($order->order_status, $order->payment_method); ?></td>
                  </tr>
                <?php endforeach; ?>


	
	</table>
	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>