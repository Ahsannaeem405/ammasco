<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="x-apple-disable-message-reformatting">
	<title></title>
	<!--[if mso]>
	<noscript>
		<xml>
			<o:OfficeDocumentSettings>
				<o:PixelsPerInch>96</o:PixelsPerInch>
			</o:OfficeDocumentSettings>
		</xml>
	</noscript>
	<![endif]-->
	<style>
		table, td, div, h1, p {font-family: Arial, sans-serif;}
	</style>
</head>
<body style="margin:0;padding:0;">
	<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
		<tr>
			<td align="center" style="padding:0;">
				<table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
					<tr>
						<td align="center" style="padding:20px 0 10px 0;background:#70bbd9;">
							<h1>Hi Admin You Have New Order</h1>
						</td>
					</tr>
					<tr>
						<td style="padding:36px 30px 42px 30px;">
							<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
								<thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>No. Of Products</th>
                                        <th>Total</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                               @php $sum=0; @endphp 
                               	
								@foreach($data as $row)
								@php 
                                    $qty=$row['qty_tot'] * $row['qty'];
                                    $sum=$sum+$qty;    
								     
								@endphp 
								<tr>
									<td>{{$row['name']}}</td>
									<td>{{$row['qty']}}</td>
									<td>${{$row['qty_tot']}}</td>
								</tr>
								@endforeach
								

								
							</table>
						</td>

					</tr>
					<hr>
					<tr>
						<td style="float: right; margin-right:10%;"><strong>${{$sum}}</strong></td>
					</tr>
					<tr>
						<td style="padding:30px;background:#ee4c50;">
							<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
								<tr>
									<td style="padding:0;width:30%;" align="left">
										<p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;text-align: center;">
											&reg; Copyright © 2019 WEBSITE
										</p>
									</td>
									
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
