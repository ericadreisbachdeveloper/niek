<?php $subtitle = 'html email | enewsletter'; $meta = 'HTML Email Template - Enewsletter - Erica Dreisbach - Freelance Web Designer + Developer'; $bodytype = 'htmlemail'; include('header.php'); $htmlemail = '4'; ?>

<script type="text/javascript" src="js/email-array.js" /> </script>

<script type="text/javascript">
 $(document).ready(function(){
  var i = "<?php echo $htmlemail; ?>";
  var iint = parseInt(i);
  var next = iint + 1;
  var prev = iint - 1;
 	
  var windoww = $(window).width();
  /* var windowh = $(window).height();
  $('.arrow').css('top',((windowh/2)-128));
  */
  $('#email-next').click(function(){
   $('body').animate({ left: -windoww }, 300, function(){
    window.location = htmlemail[0];
   });
   return false;
  });  

  $('#email-prev').click(function(){
   $('body').animate({ right: -windoww }, 300, function(){
    window.location = htmlemail[prev];
   });
   return false;
  });    
  
 });
 
 $(window).resize(function(){
  var windowh = $(window).height();
  $('.arrow').css('top',((windowh/2)-128)); 	
 });
</script>

<div id="back" class="email-nav"><a href="./#work"><img src="img/logo-bw.png" alt="back" /></a></div>
<div id="email-number" class="email-nav"><?php echo($htmlemail); ?>/4</div>
<img id="email-next" class="email-nav arrow" src="img/email-next.png" />
<img id="email-prev" class="email-nav arrow" src="img/email-prev.png" />

<table width="600" align="center" bgcolor="#fff" cellpadding="0" cellspacing="0" style="background-color: #fff; color: #000; font-family: helvetica, arial, sans-serif; font-size: 14px;">
	<tbody>
<!-- teaser -->		<tr>
			<td bgcolor="#444" color="#fff" style="background-color: #444; color: #FFFFFF; font-size: 11px; padding: 15px;">Snippet snippet snippet. Learn more inside!</td>
		</tr>
<!-- teaser --><!-- header -->		<tr>
			<td>
				<table cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td style="padding: 15px; width: 45%;">
								<a href="http://www.savoryliving.com"><img alt="Savory Living" border="0" id="logo" src="img/savory/email_logo.png" style="border: 0; width: 100%;" /></a></td>
								
							<td style="font-family: 'gill sans', sans-serif; padding-top: 15px; padding-left: 15px; text-align: center; vertical-align: middle;">
								<p style="height: auto;">
									<span style="font-size: 30px; line-height:1.3;">April Enewsletter<br>Tips &amp; Tricks</span></p>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
<!-- Start: Intro -->
        <tr>
			<td style="padding: 15px;">
				<table cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td style="font-family: 'gill sans', sans-serif; font-size: 30px;">
								<p style="margin-bottom: 0;">
									Intro copy!</p>
							</td>
						</tr>
						<tr><td height="10" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
						<tr>
							<td align="left" valign="top" style="color: #111; font-family: arial, sans-serif; font-size: 13px; line-height: 17px;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus ullamcorper tortor. Donec venenatis magna et orci tristique id ullamcorper neque volutpat. Nam malesuada facilisis sapien, et adipiscing sapien cursus eget. Pellentesque laoreet consectetur tempus.
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
<!-- End: intro -->
<!-- Start: 1st section -->		
        <tr>
			<td style="padding: 15px;">
				<table cellpadding="0" cellspacing="0" style="height: auto;">
					<tbody>
						<tr>
							<td bgcolor="#dbe2e7" style="background-color: #dbe2e7; padding: 15px; color: #111; font-family: arial, sans-serif; font-size: 13px; line-height: 17px;">
							 <table align="left" border="0" cellpadding="0" cellspacing="0">
							  <tr>
							   <td width="322" align="left" valign="top">
							    <table align="left" border="0" cellpadding="0" cellspacing="0">
							     <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
							     <tr>
							      <td align="left" valign="top" style="font-family: 'gill sans', sans-serif; font-size: 30px;">Announcing our new site!</td>
							     </tr>
							     <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
							     <tr><td align="left" valign="top" style="color: #111111; font-family: arial, sans-serif; font-size: 13px; line-height: 17px;">We&#39;re thrilled to announce ours new website. Check it out today at <a href="" style="color: #000; text-decoration: underline;">company.com</a>! We&#39;ll offer advice on our blog, info on upcoming classes, and tips you can use to live well! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis arcu...</td></tr>
							     <tr><td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
                                 <tr><td align="left" valign="top" style="font-family: arial, sans-serif; font-size: 13px; line-height: 17px;"><a href="" style="color: #000; text-decoration: underline;">MORE &gt;</a></td></tr>
                                </table>
                               </td>
							   <td width="215" align="right" valign="top">
								<img alt="Woman sitting" src="img/savory/enewsletter_2.png" />
							   </td>
							  </tr>
							 </table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
<!-- End: 1st section -->

<!-- Start: 2nd section -->		
        <tr>
			<td style="padding: 15px;">
				<table cellpadding="0" cellspacing="0" style="height: auto;">
					<tbody>
						<tr>
							<td bgcolor="#dbe2e7" style="background-color: #dbe2e7; padding: 15px; color: #111; font-family: arial, sans-serif; font-size: 13px; line-height: 17px;">
							 <table align="left" border="0" cellpadding="0" cellspacing="0">
							  <tr>
							   <td width="322" align="left" valign="top">
							    <table align="left" border="0" cellpadding="0" cellspacing="0">
							     <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
							     <tr>
							      <td align="left" valign="top" style="font-family: 'gill sans', sans-serif; font-size: 30px;">Second Headline</td>
							     </tr>
							     <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
							     <tr><td align="left" valign="top" style="color: #111111; font-family: arial, sans-serif; font-size: 13px; line-height: 17px;">Proin vel justo vel libero dictum aliquam. Proin dui leo, rutrum nec interdum vitae, condimentum quis sapien. Proin tortor dolor, bibendum vitae consectetur at...</td></tr>
							     <tr><td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
							     <tr><td align="left" valign="top" style="color: #111111; font-family: arial, sans-serif; font-size: 13px; line-height: 17px;">Proin dui leo, rutrum nec interdum vitae, condimentum quis sapien. Proin tortor dolor.</td></tr>
							     <tr><td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
                                 <tr><td align="left" valign="top" style="font-family: arial, sans-serif; font-size: 13px; line-height: 17px;"><a href="" style="color: #000; text-decoration: underline;">MORE &gt;</a></td></tr>
                                </table>
                               </td>
							   <td width="215" align="right" valign="top">
							    <img alt="Great whole grains" src="img/savory/enewsletter_3.png" />
							   </td>
							  </tr>
							 </table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
<!-- End: 2nd section -->
	
<!-- Start: signoff -->		
        <tr>
			<td style="padding: 15px;">
				<table cellpadding="0" cellspacing="0" width="100%;">
					<tbody>
						<tr>
							<td>
								<p>
									<strong>All the best!</strong></p>
							</td>
						</tr>
						<tr>
							<td align="left" style="padding-bottom: 15px;">
								<img alt="Firstname Lastname" height="59" align="left" src="img/savory/signature.png" width="83" /></td>
						</tr>
						<tr>
							<td bgcolor="#dbe2e7" style="background-color: #dbe2e7; color: #666; font-size: 11px; padding: 15px;" width="495">
								Firstname Lastname | Title | Company, Inc | <a color="#666" href="" style="color: #666; text-decoration: underline;">email@company.com</a></td>
							<td bgcolor="#dbe2e7" style="background-color: #dbe2e7;" width="45">
								<img alt="Savory Living" height="19" src="img/savory/email_logo_sm.png" width="39" /></td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
<!-- content blocks -->		
       <tr>
			<td style="padding: 15px;">
				<table cellpadding="0" cellspacing="0" style="width: 100%; height: auto;">
					<tbody>
						<tr>
							<td width="200" align="left" valign="top">
							 <table align="left" border="0" cellpadding="0" cellspacing="0">
							  <tr><td align="center" valign="top" style="font-family: 'gill sans', sans-serif; font-size: 20px;">Short Headline 1</td></tr>
							  <tr><td align="center" valign="top"><img alt="Woman with food" src="img/savory/block_1.png" /></td></td></tr>
							  <tr><td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
							  <tr><td align="center" valign="top" style="font-family: arial, sans-serif; font-size: 13px; line-height: 17px;"><a href="" style="color: #3585a3; text-decoration: none;">READ MORE &gt;</a></td>
							  </tr>
							 </table>
							</td>
							
							<td width="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							  
							<td width="200" align="left" valign="top">
							 <table align="left" border="0" cellpadding="0" cellspacing="0">
							  <tr>
							   <td align="center" valign="top" style="font-family: 'gill sans', sans-serif; font-size: 20px;">Short Headline 2</td></tr>
							  <tr><td align="center" valign="top"><img alt="Stirfry pan" src="img/savory/block_2.png" /></td></td></tr>
							  <tr><td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
							  <tr><td align="center" valign="top" style="font-family: arial, sans-serif; font-size: 13px; line-height: 17px;"><a href="" style="color: #3585a3; text-decoration: none;">READ MORE &gt;</a></td>
							  </tr>
							 </table>
							</td>
							
							<td width="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							
							<td width="200" align="left" valign="top">
							 <table align="left" border="0" cellpadding="0" cellspacing="0">
							  <tr><td align="center" valign="top" style="font-family: 'gill sans', sans-serif; font-size: 20px;">Short Headline 3</td></tr>
							  <tr><td align="center" valign="top"><img alt="Jumping in celebration" src="img/savory/block_3.png" /></td></td></tr>
							  <tr><td height="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
							  <tr><td align="center" valign="top" style="font-family: arial, sans-serif; font-size: 13px; line-height: 17px;"><a href="" style="color: #3585a3; text-decoration: none;">LEARN MORE &gt;</a></td>
							  </tr>
							 </table>
							</td>
							

						</tr>
					</tbody>
				</table>
			</td>
		</tr>
<!-- content blocks -->		<tr>
			<td bgcolor="#fff" height="10" style="background-color: #fff;">
				&nbsp;</td>
		</tr>
<!-- footer -->		<tr>
			<td bgcolor="#dbe2e7" style="background-color: #dbe2e7; padding: 15px;">
				<table cellpadding="0" cellspacing="0" style="width: 100%; height: auto;">
					<tbody>
						<tr>
							<td width="320" style="color: #666666;  font-family: arial, sans-serif; font-size: 11px; line-height: 15px; vertical-align: bottom;">
									<a href="" style="color: #666; text-decoration: underline;">email@company.com</a><br>
									<a href="" style="color: #666; text-decoration: underline;">company.com</a><br>
									<a href="" style="color: #666; text-decoration: underline;">000-111-2222</a><br>
									&copy;2013 Company Inc.
							</td>
							<td width="250" style="color: #555; font-size: 13px; text-align: right; vertical-align: bottom;">
							 <table align="right" border="0" cellpadding="0" cellspacing="0">
							  <tr>
							   <td align="left" valign="middle" style="color: #666; font-family: 'gill sans', sans-serif; font-size: 13px; line-height: 17px;">STAY CONNECTED:</td>
							   <td width="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							   <td width="35" align="left" valign="top"><a href=""><img alt="facebook" border="0" height="24" src="img/savory/email_facebook.png" style="border: 0;" width="24" /></a>
							   </td>
							   <td width="35"  align="left" valign="top"><a href=""><img alt="twitter" border="0" height="24" src="img/savory/email_twitter.png" style="border: 0;" width="24" /></a> 
							   </td>
							   <td width="24" align="left" valign="top"><a href=""><img alt="linkedin" border="0" height="24" src="img/savory/email_linkedin.png" style="border: 0;" width="24" /></a></td>
							  </tr>
							 </table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
<!-- footer -->	</tbody>
</table>
<!-- # wrapper -->
