<?php $subtitle = 'html email | offer'; $meta = 'HTML Email Template - Offer - Erica Dreisbach - Freelance Web Designer + Developer'; $bodytype = 'htmlemail'; include('header.php'); $htmlemail = '2'; ?>

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
    window.location = htmlemail[next];
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

<!-- EMAIL-->
<table width="600" align="center" border="0" cellpadding="0" cellspacing="0">
 <tr><td height="35" align="right" valign="middle" style="color: #111111; font-family: arial, sans-serif; font-size: 10px; line-height: 1;">Trouble viewing this email? <a href="#" style="color: #111111; text-decoration: underline;">Click here</a>.&nbsp;&nbsp;&nbsp;</td>
 </tr>
 
 <!-- TOP BORDER -->
 <tr><td width="600" height="1" align="left" valign="top" style="font-size: 1px; line-height: 1px;"><img src="img/offers/hr.gif" width="600" height="1" alt="" style="display: block;"></td></tr>

 <tr>
  <td width="600" align="left" valign="top">
   <table align="left" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <!-- LEFT BORDER -->
     <td width="1" align="left" bgcolor="#CBCBCB" valign="top" style="font-size: 1px; line-height: 1px;"> </td>

     <!--START MAIN BODY -->
     <td width="598" align="left" bgcolor="#FFFFFF" valign="top">     
      <table align="left" border="0" cellpadding="0" cellspacing="0">
      
      <!-- HEADER -->
      <tr>
       <td align="left" valign="top">
        <table align="left" border="0" cellpadding="0" cellspacing="0">
         <tr>
          <td width="259" align="left" valign="top">
           <table align="left" border="0" cellpadding="0" cellspacing="0">
            <tr>
             <td width="29" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
             <td width="230" align="left" valign="top"> 
              <table align="left" border="0" cellpadding="0" cellspacing="0">
               <tr><td height="24" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
               <tr><td height="14" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>  
               <tr><td align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 14px; line-height: 1.1;">Introducing, our new offer ...</td></tr> 
               <tr><td height="14" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>             
               <tr><td align="left" valign="top" style="color: #0023a0; font-family: arial, sans-serif; font-size: 27px; line-height: 32px;">Sign up today <br>and save!
</td></tr>
               <tr><td height="10" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>     
               <tr><td align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 14px; line-height: 18px;">Integer eget justo et nunc pellentesque pulvinar quis id lorem. Nullam vitae adipiscing enim. </td></tr>  
               <tr><td height="10" align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 1;"></td></tr>               
               <tr><td height="14" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr> 
               <tr>
                <td align="left" valign="top">
                 <table align="left" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                   <td width="230" align="left" valign="top">
                    <table align="left" border="0" cellpadding="0" cellspacing="0">
                     <tr>
                      <td width="124" align="left" valign="top">
                       <table align="left" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                         <td width="124" height="11" align="center" valign="top"><a href="#"><img src="img/offers/button-top.gif" width="124" height="11" alt="" border="0" style="display: block;"></a></td></tr>
                        <tr>
                         <td width="124" height="25" align="center" bgcolor="#ffa000" valign="top" style="font-family: arial, sans-serif; font-size: 17px; line-height: 1; text-align: center;"><a href="#" style="width: 124px; height: 25px; display: block; color: #FFFFFF; text-decoration: none;">BUTTON</a></td>
                        </tr>
                       </table>
                      </td>
                      <td width="106" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                     </tr>
                    </table>
                   </td>
                  </tr>
                 </table>
                </td>
               </tr>               
              </table>
             </td>
            </tr>
           </table>
          </td>
          <td width="339" align="left" valign="top">
           <img src="img/offers/hero.jpg" width="339" height="303" alt="" style="display: block;">
          </td>
       
         </tr>
        </table>
       </td>
      </tr>
      <!-- END HEADER -->
      
      <!-- TILES -->
      <tr>
       <td align="left" valign="top">
        <table align="left" border="0" cellpadding="0" cellspacing="0">
         <tr>
          <td width="191" height="110" align="left" valign="bottom" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 1;"><img src="img/offers/learn.jpg" width="191" height="110" alt="" border="0" style="display: block;"></td>
          <td width="182" align="left" valign="bottom" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 1;"><img src="img/offers/eat.jpg" width="182" height="110" alt="" border="0" style="display: block;"></td>
          <td width="225" align="left" valign="bottom" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 1;"><img src="img/offers/run.jpg" width="225" height="110" alt="" border="0" style="display: block;"></td>
         
         </tr>
        </table>
       </td>
      </tr>
      <!-- END TILES -->
      
      <tr><td height="20" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
      
      <!-- BODY COPY -->
      <tr>
       <td width="598" align="left" valign="top">
        <table align="left" border="0" cellpadding="0" cellspacing="0">
         <tr>
         <td width="29" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
         <td width="303" align="left" valign="top">
          <table align="left" border="0" cellpadding="0" cellspacing="0">
           <tr><td align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc semper consequat leo. Praesent nibh arcu, imperdiet ac neque id, porttitor lobortis odio. </td></tr>
           <tr><td height="12"align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
           <tr><td align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;">Etiam volutpat, nisi sed pulvinar eleifend, lorem velit rhoncus eros, ut placerat libero nibh vitae nibh. Proin eros nisi, commodo id velit vitae, facilisis suscipit quam. Integer eget justo et nunc pellentesque.</td></tr> 
           <tr><td height="22" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr> 
           <tr>
            <td align="left" valign="top">
             <table align="left" border="0" cellpadding="0" cellspacing="0">
              <tr>
               <td width="124" align="left" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                  <td width="124" height="11" align="center" valign="top"><a href="#"><img src="img/offers/button-top.gif" width="124" height="11" alt="BUTTON" border="0" style="display: block;"></a></td></tr>
                 <tr> 
                  <td width="124" height="25" align="center" valign="top" bgcolor="#ffa000" style="font-family: arial, sans-serif; font-size: 17px; line-height: 1; text-align: center;"><a href="#" style="width: 124px; height: 25px; display: block; color: #FFFFFF; text-decoration: none;">BUTTON</a></td>
                  </tr>
                </table>
               </td>
              </tr>
             </table>
            </td>
           </tr>                   
          </table>
          </td>
          <td width="21" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>         
          <td width="245" align="left" valign="top">
           <table align="left" border="0" cellpadding="0" cellspacing="0">
            <tr>
             <td width="1" align="left" bgcolor="#9c9c9c" valign="top" style="font-size: 1px; line-height: 1px;"> </td>
             <td width="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
             <td width="210" align="left" valign="top">
              <table align="left" border="0" cellpadding="0" cellspacing="0">
               <tr>
                <td width="210" align="left" colspan="2" valign="top" style="color: #0023a0; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;"><strong>Save money now:</strong></td>
               </tr>
               <tr><td height="5" align="left" colspan="2" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
               <tr>
                <td width="15" align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;">1.</td>
                <td width="190" align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;"><span style="color: #0023a0;">Sed </span> convallis hendrerit arcu, suscipit</td>
               </tr> 
               <tr><td height="5" align="left" colspan="2" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
               <tr>
                <td align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;">2.</td>
                <td align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;"><span style="color: #0023a0;">Semper</span> turpis congue ut pellentesque placerat condimentum condimentu</td>
               </tr> 
               <tr><td height="5" align="left" colspan="2" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
               <tr>
                <td align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;">3.</td>
                <td align="left" valign="top" style="color: #666666; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;"><span style="color: #0023a0;">Nunc</span> vitae luctus mi, vel dignissim felis. </td>
               </tr>
               <tr><td height="5" align="left" colspan="2" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
               <tr><td align="left" colspan="2" valign="top" style="color: #ffa000; font-family: arial, sans-serif; font-size: 12px; line-height: 16px;"><a href="#" style="color: #ffa000; text-decoration: underline;"><strong>Nam eu congue magna. Praesent scelerisque massa mi!</strong></a> <strong>&gt;</strong></td></tr>
              </table>
             </td>
            </tr>
            <tr>
             <td height="20" colspan="3" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
            <tr>
             <td colspan="3" align="right"> 
              <table align="right" border="0" cellpadding="0" cellspacing="0">
               <tr>
                <td width="130" height="32" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                <td width="80" height="32" colspan="2" align="right" valign="top" style="color: #253993; font-family: arial, sans-serif; font-size: 20px; line-height: 1;"><a href="#"><img src="img/offers/logo.png" width="80" height="32" alt="VISA" border="0" style="display: block;"></a>
                </td>
               </tr>
              </table>
             </td>
            </tr>
           </table>
          </td>            
         </tr>
        </table>
       </td>
      </tr>
      <!-- END BODY COPY -->
      
      <tr><td height="24" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>

      </table>
     </td>
     <!-- END MAIN BODY -->
     
     <!-- RIGHT BORDER -->
     <td width="1" align="right" bgcolor="#CBCBCB" style="font-size: 1px; line-height: 1px;"> </td> 
 
    </tr>
   </table>
  </td>
 </tr>
 
 <!-- BOTTOM BORDER-->
 <tr><td width="600" height="1" align="left" valign="top" style="font-size: 1px; line-height: 1px;"><img src="img/offers/hr.gif" width="600" height="1" alt="" style="display: block;"></td></tr>
 
</table><!-- END EMAIL -->

<?php include('footer.php'); ?>
