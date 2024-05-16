<?php  $setting=DB::table('settings')->first(); ?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inquiry</title>

<body>
<div style="max-width:700px;
		margin:auto;
		border:1px solid #eee;
		box-shadow:0 0 10px rgba(0, 0, 0, .15);
		line-height:1.6;
		font-size:13px;
		box-sizing:border-box; -webkit-print-color-adjust: exact;font-family: sans-serif; ">
		<table cellpadding="10" cellspacing="0" width="100%" style="background: #000;">
			<tbody>
				<tr class="top">
					<td colspan="2">
						<table width="100%">
							<tbody>
								<tr>
									<td class="title" style="vertical-align:middle; text-align: center;">
										<a href="https://emulatechrist.com/">
											<a href="https://emulatechrist.com/">
										<?php if(!empty($setting->logo)){?>
											<img src="{{s3_asset($setting->logo)}}" style="width:100%; max-width:380px;">
											<?php } else{?>
											<img src="{{asset('assets/logo.svg')}}" style="width:100%; max-width:380px;">
											<?php } ?>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<div style="width: 100%; padding: 20px; box-sizing: border-box; background: #ff0;">
			<div style="width: 660px;background: #ffffffd1;margin: auto;padding: 15px; box-sizing: border-box;">
				<h2 style="text-align: center; font-size: 30px;font-weight: 800;margin-bottom: 0px; color: #0047ab;">Thank You!</h2>
				<p style="font-size: 20px;line-height: 23px;font-weight: 600;text-align: center;margin-bottom: 30px; margin-top: 10px;">For submitting your inquiry on EmulateChrist.com</p>
				<div>
					<p style="font-weight:600;">Customer Quotation</p>
					<table border="1" width="100%" style="border-collapse: collapse; margin-bottom: 15px;">
						<tbody>
							<tr>
								<td style="padding: 5px 8px; border-color: #ccc;"><span style="font-weight: 600;">Full Name:</span></td>
								<td style="padding: 5px 8px; border-color: #ccc;">{{$mailData['name']}}</td>
							</tr>
							<tr>
								<td style="padding: 5px 8px; border-color: #ccc;"><span style="font-weight: 600;">Email:</span></td>
								<td style="padding: 5px 8px; border-color: #ccc;">{{$mailData['email']}}</td>
							</tr>
							<tr>
								<td style="padding: 5px 8px; border-color: #ccc;"><span style="font-weight: 600;">Message:</span></td>
								<td style="padding: 5px 8px; border-color: #ccc;">{{$mailData['message']}}</td>
							</tr>
							
						</tbody>
					</table>
					
				</div>
				<div>
					<p style="padding:20px 0px 0;">
						<strong>Sincerely</strong><br/>
						Emulate Christ<br/>
						<a style="text-decoration: none;" href="https://emulatechrist.com/">emulatechrist.com</a>
					</p>
					
				</div>
			</div>
		</div>
		<div style="background: #000; color: #fff;">
				<table style="text-align:left;" width="100%" cellpadding="8" cellspacing="0">
					<tbody>
						<tr>	
							<td colspan="2" style="padding: 10px 10px; text-align: center; font-size: 11px; border-top: 1px solid #595959; border-bottom: 1px solid #595959;">
								This is an automated response, please DO NOT reply to it. You may contact Customer Support at <a style="color:#eee;" href="mailto:support@emulatechrist.com"> support@emulatechrist.com for any query.</a>
							</td>
						</tr>
						
					</tbody>
				</table>
		</div>		
	</div>
</body>
</html>