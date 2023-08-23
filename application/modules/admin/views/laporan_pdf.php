<?php

            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Data Order Customer');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();

            
            $html='<h3>Data Order Customer</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="3">
                        <tr bgcolor="#ffffff">                            
                            <th align="center">Customer</th>
                            <th align="center">Date</th>
                            <th align="center">Jumlah Item</th>
                            <th align="center">Jumlah Harga</th>
                            <th align="center">Status</th>
                        </tr>';

            foreach ($orders as $order)
             
                {
                    $cust = $order->customer;
                    $orderDate = get_formatted_date($order->order_date);
                    $totalItem = $order->total_items;
                    $totalPrice = format_rupiah($order->total_price); 
                    $status = get_order_status($order->order_status, $order->payment_method);
                    $html.='<tr bgcolor="#ffffff">  

                            <td align="center">'.$cust.'</td>
                            <td align="center">'.$orderDate.'</td>
                            <td align="center">'.$totalItem.'</td>
                            <td align="center">'.$totalPrice.'</td>
                            <td align="center">'.$status.'</td>
                            
                            </tr>';
                } 



            
                
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('Laporan_pesanan.pdf', 'I');
           
?>