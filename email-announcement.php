<?php $subtitle = 'html email | invitation'; $meta = 'HTML Email Template - Invitation - Erica Dreisbach - Freelance Web Designer + Developer'; $bodytype = 'htmlemail'; include('header.php'); $htmlemail = '3'; ?>

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

<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"><tr><td align="center" valign="top">

<!-- START Email -->
<table width="600" align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0">
 <tr>
  <td align="left" valign="top">
   <table align="left" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td width="585" height="45" align="right" valign="middle" style="color: #111111; font-family: arial, sans-serif; font-size: 10px; line-height: 1;">Trouble viewing this email? <a href="#" style="color: #111111; text-decoration: underline;">Click here</a>.</td>
     <td width="15" style="font-size: 1px; line-height: 1;">&nbsp;</td>
    </tr>
   </table>
  </td>
 </tr>
 
 <!-- Top Border -->
 <tr><td height="15" align="left" bgcolor="#DEE2DD" valign="top"><img src="img/email-announcement/border-horiz.gif" alt="" width="600" height="15" style="display: block;"></td></tr>
 
 <tr>
  
  <!-- Left Border -->
  <td align="left" valign="top">
   <table align="left" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td width="15" align="left" bgcolor="#DEE2DD" valign="top"><img src="img/email-announcement/border-vert.gif" alt="" width="15" height="1101" style="display: block;"></td>
  
     <!-- START Main Email -->
     <td width="570" align="left" bgcolor="#FFFFFF" valign="top">
    
      <table align="left" border="0" cellpadding="0" cellspacing="0">
       <tr>
        <!-- Left Gutter -->
        <td width="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
 
        <!-- START Body -->
        <td width="540" align="left" valign="top">
         <table align="left" border="0" cellpadding="0" cellspacing="0">
          
          <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          
          <!-- START Header -->
          <tr>
           <td height="65" align="left" valign="top">
            <table align="left" border="0" cellpadding="0" cellspacing="0">
             <tr>
              <td width="203" height="65" style="font-family: tahoma, sans-serif; font-size: 40px; line-height: 1;"><a href="#" style="color: #305A1E; text-decoration: none;"><img src="img/email-announcement/logo.gif" alt="Logo" width="203" height="65" border="0" style="display: block;"></a></td>
              <td width="337" align="right" valign="bottom" style="color: #A2B39A; font-family: tahoma, sans-serif; font-size: 28px; line-height: 1;"><strong>ANNOUNCEMENT</strong></td>
             </tr>
            </table>
           </td>
          </tr>
          <tr><td height="15" align="left" valign="top"><img src="img/email-announcement/hr.gif" alt="" width="540" height="15" style="display: block;"></td></tr>
          <!-- END Header -->
          
          <tr>
           <td height="410" align="left" valign="top"><img src="img/email-announcement/hero.jpg" alt="" width="540" height="410" style="display: block;"></td.
          </tr>	
          
          <tr><td height="40" align="left" valign="top" style="color: #305A1E; font-family: tahoma, sans-serif; font-size: 30px; line-height: 1;"><strong>Special Offer</strong></td></tr>
          <tr><td height="36" align="left" valign="top" style="color: #305A1E; font-family: tahoma, sans-serif; font-size: 16px; line-height: 1;">Duis nec orci sem, nec facilisis dui!</td></tr>
          <tr><td height="54" align="left" valign="top" style="color: #111111; font-family: tahoma, sans-serif; font-size: 13px; line-height: 1.44;">Ut molestie, odio vel dapibus pretium, ante massa lobortis mauris, id tempus risus ligula viverra sapien. Nam aliquet lectus a mauris venenatis porta. Phasellus fringilla nibh non eros ultricies sed cursus justo venenatis. Morbi lobortis imperdiet nisl ac dictum. </td></tr>
          <tr><td height="54" align="left" valign="middle" style="font-family: tahoma, sans-serif; font-size: 16px; font-weight: 800; line-height: 1;"><a href="#" style="color: #305A1E; text-decoration: none;">Learn more &gt;</a></td></tr>           
          <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
           
          <!-- START Products -->
          <tr> 
           <td align="left" valign="top">
            <table align="left" bgcolor="#649350" border="0" cellpadding="0" cellspacing="0">
             <tr>
              <td align="left" valign="top">
               <table align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                 <td width="178" height="204" align="right" valign="middle" style="font-family: tahoma, sans-serif; font-size: 13px; line-height: 1;"><a href="#" target="_blank" style="color: #FFFFFF; text-decoration: none;"><img src="img/email-announcement/apples.jpg" alt="Apples" border="0" width="170" height="190" style="display: block;"></a></td>
                 <td width="184" align="center" valign="middle" style="color: #FFFFFF; font-family: tahoma, sans-serif; font-size: 13px; line-height: 1;"><a href="#" target="_blank" style="color: #FFFFFF; text-decoration: none;"><img src="img/email-announcement/garlic.jpg" alt="Garlic" border="0" width="170" height="190" style="display: block;"></a></td>
                 <td width="178" align="left" valign="middle" style="color: #FFFFFF; font-family: tahoma, sans-serif; font-size: 13px; line-height: 1;"><a href="#" target="_blank" style="color: #FFFFFF; text-decoration: none;"><img src="img/email-announcement/cotton.jpg" alt="Cotton" border="0" width="170" height="190" style="display: block;"></a></td>
                </tr>
                <tr>
                 <td height="24" align="center" valign="top" style="font-family: tahoma, sans-serif; font-size: 15px; line-height: 1;"><a href="#" target="_blank" style="color: #FFFFFF; text-decoration: none;">Product One</a></td>
                 <td align="center" valign="top" style="font-family: tahoma, sans-serif; font-size: 15px; line-height: 1;"><a href="#" target="_blank" style="color: #FFFFFF; text-decoration: none;">Product Two</a></td>
                 <td align="center" valign="top" style="font-family: tahoma, sans-serif; font-size: 15px; line-height: 1;"><a href="#" target="_blank" style="color: #FFFFFF; text-decoration: none;">Product Three</a></td>                 
                </tr>
               </table>
              </td>
             </tr>
            </table>
           </td>
          </tr>
          <tr><td height="34" align="right" valign="bottom" style="font-family: tahoma, sans-serif; font-size: 16px; font-weight: 800; line-height: 1;"><a href="#" style="color: #305A1E; text-decoration: none;">See more products &gt;</a></td></tr>
          <tr><td height="45" align="left" valign="middle"><img src="img/email-announcement/hr.gif" alt="" width="540" height="15" style="display: block;"></td></tr>          
          <!-- END Products -->
          
          <!-- START Footer -->
          <tr><td height="20" align="center" valign="top" style="color: #305A1E; font-family: tahoma, sans-serif; font-size: 14px; line-height: 1.44;"><strong>Our Organization</strong></td></tr>
          <tr><td height="30" align="center" valign="top" style="color: #305A1E; font-family: tahoma, sans-serif; font-size: 11px; line-height: 1.44;">123 Michigan Ave. | Suite 1N | Chicago, IL 60600 <br>t: 312-111-2234 | e: <a href="#" style="color: #305A1E; text-decoration: none;">contact@organization.com</a>
           </td>
          </tr> 
          <tr><td height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <!-- END Footer -->
          
         </table>
        </td>
        <!-- END Body -->
        
        <!-- Right Gutter -->
        <td width="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        
       </tr>
      </table>
     </td>
     <!-- END Main Email -->
    
     <!-- Right Border -->
     <td width="15" align="left" bgcolor="#DEE2DD" valign="top"><img src="img/email-announcement/border-vert.gif" alt="" width="15" height="1101" style="display: block;"></td>
    </tr>
   </table>
  </td> 
 </tr>
 
 <!-- Bottom Border -->
 <tr><td height="15" align="left" bgcolor="#DEE2DD" valign="top"><img src="img/email-announcement/border-horiz.gif" alt="" width="600" height="15" style="display: block;"></td></tr>
 <tr><td height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
 
 
</table><!-- END Email -->

</td></tr></table>
</body>
</html>
