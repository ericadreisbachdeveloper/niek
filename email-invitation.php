<?php $subtitle = 'html email | invitation'; $bodytype = 'htmlemail'; include('header.php'); $htmlemail = '1'; ?>

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

<!-- START Email -->
<table width="600" align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0">
 
 <!-- START Header -->
 <tr>
  <td width="600" align="left" valign="top">
   <table align="left" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td width="585" height="45" align="right" valign="middle" style="color: #666666; font-family: arial, sans-serif; font-size: 10px; line-height: 1;">Trouble viewing this email? <a href="#" style="color: #666666; text-decoration: underline;">Click here</a>.</td>
     <td width="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
    </tr>
   </table>
  </td>
 </tr>
 <tr>
  <td align="left" valign="top">
   <table align="left" border="0" cellpadding="0" cellspacing="0">
    <tr><td width="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td><td align="left" valign="top" style="color: #A11503; font-family: arial, sans-serif; font-size: 50px; line-height: 1;"><strong>UPCOMING EVENT</strong></td></tr>
    <tr><td width="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td><td align="left" valign="top" style="color: #D41B03; font-family: arial, sans-serif; font-size: 35px; line-height: 1;"><strong>Chicago, IL</strong></td></tr>
   </table>
  </td>
 </tr>
 <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>

 <tr>
  <td align="left" valign="top">
   <table align="left" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td width="585" height="201" align="left" valign="top"><img src="img/email-invitation/hero-top.jpg" alt="" width="585" height="201" style="display: block;"></td>
     <td width="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
    </tr>
   </table>
  </td>
 </tr>
 
 <tr>
  <td align="left" valign="top">
   <table align="left" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td width="447" height="61" align="left" valign="top"><img src="img/email-invitation/hero-ctr.jpg" alt="" width="447" height="61" style="display: block;"></td>
     <td width="138" align="left" valign="top"> 
      <table align="left" border="0" cellpadding="0" cellspacing="0">
       <tr>
        <td width="14" height="22" align="left" valign="top"><img src="img/email-invitation/arrow-herobg-top-lt.jpg" alt="" width="14" height="22" style="display: block;"></td>
        <td width="124" align="left" valign="top"><img src="img/email-invitation/arrow-herobg-top.jpg" alt="" width="124" height="22" style="display: block;"></td>
       </tr>
       <tr>
        <td height="25" align="left" valign="top"><img src="img/email-invitation/arrow-herobg-pntr.jpg" alt="" width="14" height="25" style="display: block;">
        <td align="center" valign="middle" bgcolor="#D11C00" style="color: #FFFFFF; font-family: arial, sans-serif; font-size: 15px; line-height: 1;">REGISTER NOW</td>
       </tr>
       <tr>
        <td height="14" align="left" valign="top"><img src="img/email-invitation/arrow-herobg-btm-lt.jpg" alt="" width="14" height="14" style="display: block;"></td>
        <td align="left" valign="top"><img src="img/email-invitation/arrow-herobg-btm.jpg" alt="" width="124" height="14" style="display: block;"></td>
       </tr>
      </table>
     </td>
     <td width="15" align="left" valign="top"> 
      <table align="left" border="0" cellpadding="0" cellspacing="0">
       <tr><td width="15" align="left" valign="top"><img src="img/email-invitation/arrow-top-rt.jpg" alt="" width="15" height="22" style="display: block;"></td></tr>
       <tr><td height="25" align="left" valign="top" bgcolor="#D11C00" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
       <tr><td height="14" align="left" valign="top"><img src="img/email-invitation/arrow-btm-rt.gif" alt="" width="15" height="14" style="display: block;"></td></tr> 
      </table>
     </td>
    </tr> 
    <tr>
     <td height="17" align="left" valign="top"><img src="img/email-invitation/hero-btm-lt.jpg" alt="" width="447" height="17" style="display: block;"></td>
     <td align="left" valign="top"><img src="img/email-invitation/hero-btm-rt.jpg" alt="" width="138" height="17" style="display: block;"> </td>
    </tr>
   </table>
  </td>
 </tr>
 <!-- END Header -->
 
 <!-- START Email Body -->
 <tr>
  <td align="left" valign="top">
   <table align="left" border="0" cellpadding="0" cellspacing="0">
    <tr>
 
     <!-- START Left Col -->
     <td height="20" width="400" align="left" valign="top" bgcolor="#fddf93">
      <table align="left" border="0" cellpadding="0" cellspacing="0">
       <tr>
        <td width="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        <td width="370" align="left" valign="top">
         <table align="left" valign="top">
          <tr><td height="60" align="left" valign="middle" style="color: #26100A; font-family: arial, sans-serif; font-size: 28px; line-height: 1;"><strong>JOIN US</strong></td></tr>
          <tr><td align="left" valign="middle" style="color: #643A25; font-family: arial, sans-serif; font-size: 16px; line-height: 1.44;"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices magna eu justo scelerisque tempor. Consectetur lectus volutpat.</strong></td></tr>
          <tr><td height="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr><td align="left" valign="middle" style="color: #643A25; font-family: arial, sans-serif; font-size: 16px; line-height: 1.44;"><strong>Sed aliquet auctor tincidunt. Donec in nunc leo. Aenean eleifend, mauris eget fringilla consectetur, odio velit elementum nisi, at pharetra purus lorem non nibh. <a href="#" style="color: #A11503; text-decoration: none;">Learn more &gt;</a></strong></td></tr>
          <tr><td height="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr><td align="left" valign="top"><img src="img/email-invitation/meeting.jpg" alt="" width="370" height="184" style="display: block;"></td></tr>
          <tr><td height="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr>
           <td align="left" valign="top">
            <table align="left" border="0" cellpadding="0" cellspacing="0">
             <tr>
              <td width="370" align="left" valign="top" bgcolor="#FFFFFF">
               <table align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                 <td width="15" height="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td width="100" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td width="20" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td width="100" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td width="20" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td width="100" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td width="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>                 
                </tr>
                <tr>
                 <td height="140" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td height="140" align="left" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 10px; line-height: 1;"><img src="img/email-invitation/speaker-one.jpg" alt="Speaker One" width="100" height="140" style="display: block;"></td>
                 <td height="140" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td height="140" align="left" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 10px; line-height: 1;"><img src="img/email-invitation/speaker-two.jpg" alt="Speaker Two" width="100" height="140" style="display: block;"></td>
                 <td height="140" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td height="140" align="left" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 10px; line-height: 1;"><img src="img/email-invitation/speaker-three.jpg" alt="Speaker Three" width="100" height="140" style="display: block;"></td>
                 <td height="140" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                </tr>
                <tr>
                 <td height="25" align="left" valign="bottom" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td align="center" valign="bottom" style="color: #26100A; font-family: arial, sans-serif; font-size: 12px; line-height: 1.44;"><strong>Speaker 1</strong></td>
                 <td align="left" valign="bottom" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td align="center" valign="bottom"" style="color: #26100A; font-family: arial, sans-serif; font-size: 12px; line-height: 1.44;"><strong>Speaker 2</strong></td>
                 <td align="left" valign="bottom" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td align="center" valign="bottom" style="color: #26100A; font-family: arial, sans-serif; font-size: 12px; line-height: 1.44;"><strong>Speaker 3</strong></td>
                 <td align="left" valign="bottom" style="font-size: 1px; line-height: 1px;">&nbsp;</td>                 
                </tr>                
                <tr>
                 <td height="25" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td align="center" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 12px; line-height: 1.44;">Company</td>
                 <td align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td align="center" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 12px; line-height: 1.44;">Company</td>
                 <td align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                 <td align="center" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 12px; line-height: 1.44;">Company</td>
                 <td align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>                 
                </tr>                  
               </table>
              </td>
             </tr>
            </table>
           </td>
          </tr>
          <tr><td height="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr>
           <td align="right" valign="top" style="font-family: arial, sans-serif; font-size: 16px; line-height: 1;"><strong><a href="#" style="color: #A11503; text-decoration: none;">Learn more &gt;</a></strong></td>
          </tr>
          <tr><td height="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>          
         </table>
        </td>
        <td width="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
       </tr>
      </table>
     </td>
     <!-- END Left Col -->
  
     <!-- START Right Col -->
     <td width="200" align="left" valign="top">
      <table align="left" border="0" cellpadding="0" cellspacing="0">
       <tr>
        <td width="10" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        <td width="175" align="left" valign="top">
         <table align="left" border="0" cellpadding="0" cellspacing="0">
          <tr>
           <td width="175" height="40" align="left" valign="bottom" style="color: #26100A; font-family: arial, sans-serif; font-size: 20px; line-height: 1.2;"><strong>June 21st, 2014</strong></td>
          </tr>
          <tr>
           <td align="left" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 12px; line-height: 1.8;">8am - 8pm</td>
          </tr>
          <tr><td height="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr>
           <td width="175" height="30" align="left" valign="middle" style="color: #26100A; font-family: arial, sans-serif; font-size: 18px; line-height: 1.2;"><strong>Chicago Convention Center</strong></td>
          </tr>          
          <tr>
           <td align="left" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 12px; line-height: 1.8;">8765 Michigan Ave.<br>
Chicago, IL 60600<br>
312-555-1234<br>
<a href="#" style="color: #26100A; text-decoration: underline;">chicagoconventions.biz</a></td>
          </tr>
          <tr><td height="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr>
           <td align="left" valign="top">
            <table align="left" border="0" cellpadding="0" cellspacing="0">
             <tr>
              <td width="135" align="left" valign="top" style="color: #26100A; font-family: arial, sans-serif; font-size: 14px; line-height: 1.2;"><strong>Add this event to your calendar</strong></td>
              <td width="40" align="left" valign="top"><a href="#"><img src="img/email-invitation/calendar.gif" alt="" border="0" width="40" height="40" style="display: block;"></a></td>
             </tr>
            </table>
           </td>
          </tr>
          <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
         </table>
        </td>
        <td width="15" align="left" valign="top"></td>
       </tr>
       <tr>
        <td width="10" align="left" bgcolor="#58301D" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        <td width="175" align="left" bgcolor="#58301D" valign="top">
         <table align="left" border="0" cellpadding="0" cellspacing="0">
          <tr>
           <td width="47" height="22" align="left" bgcolor="#58301D" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
           <td width="14" align="left" valign="top"><img src="img/email-invitation/arrow-brwnbg-top-lt.gif" alt="" width="14" height="22" style="display: block;"></td>
           <td width="124" align="left" valign="top"><img src="img/email-invitation/arrow-brwnbg-top.gif" alt="" width="124" height="22" style="display: block;"></td>
          </tr>
          <tr>
           <td height="22" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
           <td align="left" valign="top"><img src="img/email-invitation/arrow-brwnbg-pntr.gif" alt="" width="14" height="22" style="display: block;"></td>
           <td align="center" bgcolor="#D11C00" valign="middle" style="color: #FFFFFF; font-family: arial, sans-serif; font-size: 15px; line-height: 1;">MORE EVENTS</td>
          </tr>
          <tr>
           <td height="15" align="left" bgcolor="#58301D" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
           <td align="left" valign="top"><img src="img/email-invitation/arrow-brwnbg-btm-lt.gif" alt="" width="14" height="15" style="display: block;"></td>
           <td align="left" valign="top"><img src="img/email-invitation/arrow-brwnbg-btm.gif" alt="" width="124" height="15" style="display: block;"></td>
          </tr>          
         </table>
        </td>
        <td width="15" align="left" valign="top">
         <table align="left" border="0" cellpadding="0" cellspacing="0">
          <tr><td width="15" height="22" align="left" valign="top"><img src="img/email-invitation/arrow-top-rt.jpg" alt="" width="15" height="22" style="display: block;"></td></tr>
          <tr><td height="22" align="left" valign="top" bgcolor="#D11C00" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr><td height="15" align="left" valign="top"><img src="img/email-invitation/arrow-btm-rt.gif" alt="" width="15" height="15" style="display: block;"></td></tr>
         </table>
        </td>
       </tr>
       <tr>
        <td height="15" bgcolor="#58301D" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        <td bgcolor="#58301D" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        <td style="font-size: 1px; line-height: 1px;">&nbsp;</td>
       </tr>
       <tr>
        <td bgcolor="#58301D" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        <td bgcolor="#58301D" align="left" valign="top">
         <table align="left" border="0" cellpadding="0" cellspacing="0">
          <tr>
           <td width="13" align="left" valign="top"><img src="img/email-invitation/bullet.gif" alt="" width="13" height="15" style="display: block;"></td>
           <td align="left" valign="top" style="color: #FFFFFF; font-family: arial, sans-serif; font-size: 12px; line-height: 1.2;"><strong>February 12th</strong> - Local gathering</td>
           <td width="10" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
          </tr>
          <tr><td colspan="3" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr>
           <td align="left" valign="top"><img src="img/email-invitation/bullet.gif" alt="" width="13" height="15" style="display: block;"></td>
           <td align="left" valign="top" style="color: #FFFFFF; font-family: arial, sans-serif; font-size: 12px; line-height: 1.2;"><strong>April 8th</strong> - Spring Invitational</td>
           <td style="font-size: 1px; line-height: 1px;">&nbsp;</td>
          </tr>
          <tr><td colspan="3" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr>
           <td style="font-size: 1px; line-height: 1px;">&nbsp;</td>
           <td align="right" valign="top" style="font-family: arial, sans-serif; font-size: 14px; line-height: 1.2;"><strong><a href="#" style="color: #FFFFFF; text-decoration: underline;">See more events &gt;</a></strong></td>
           <td style="font-size: 1px; line-height: 1px;">&nbsp;</td>
          </tr>                    
          <tr><td colspan="3" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>          
         </table>
        </td>
       </tr>
       <tr><td colspan="3" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
       <tr>
        <td style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        <td align="left" valign="top">
         <table align="left" border="0" cellpadding="0" cellspacing="0">
          <tr>
           <td width="47" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
           <td width="14" align="left" valign="top"><img src="img/email-invitation/arrow-whtbg-top-lt.gif" alt="" width="14" height="23" style="display: block;"></td>
           <td width="124" align="left" valign="top"><img src="img/email-invitation/arrow-whtbg-top.gif" alt="" width="124" height="23" style="display: block;"></td> 
          </tr>
          <tr>
           <td style="font-size: 1px; line-height: 1px;">&nbsp;</td>
           <td align="left" valign="top"><img src="img/email-invitation/arrow-whtbg-pntr.gif" alt="" width="14" height="23" style="display: block;"></td>
           <td align="center" bgcolor="#D11C00" valign="middle" style="color: #FFFFFF; font-family: arial, sans-serif; font-size: 15px; line-height: 1;">FIND US ONLINE</td> 
          </tr>  
          <tr>
           <td style="font-size: 1px; line-height: 1px;">&nbsp;</td>
           <td align="left" valign="top"><img src="img/email-invitation/arrow-whtbg-btm-lt.gif" alt="" width="14" height="15" style="display: block;"></td>
           <td align="left" valign="top"><img src="img/email-invitation/arrow-whtbg-btm.gif" alt="" width="124" height="15" style="display: block;"></td>
          </tr>      
         </table>
        </td>
        <td align="left" valign="top">
         <table align="left" border="0" cellpadding="0" cellspacing="0">
          <tr><td height="23" align="left" valign="top"><img src="img/email-invitation/arrow-top-rt.jpg" alt="" width="15" height="23" style="display: block;"></td></tr>
          <tr><td height="23" align="left" bgcolor="#D11C00" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
          <tr><td height="15" align="left" valign="top"><img src="img/email-invitation/arrow-btm-rt.gif" alt="" width="15" height="15" style="display: block;"></td></tr>
         </table>
        </td>
       </tr> 
       <tr>
        <td style="font-size: 1px; line-height: 1px;">&nbsp;</td>
        <td align="left" valign="top">
         <table align="left" border="0" cellpadding="0" cellspacing="0">
          <tr>
           <td width="50" height="50" align="left" valign="top"><a href="#"><img src="img/email-invitation/facebook.gif" alt="" border="0" width="45" height="45" style="display: block;"></a></td>
           <td align="left" valign="middle" style="color: #643A25; font-family: arial, sans-serif; font-size: 11px; line-height: 1.2;"><strong>Friend us on Facebook</strong></td>
          </tr>
          <tr>
           <td width="50" height="50" align="left" valign="top"><a href="#"><img src="img/email-invitation/twitter.gif" alt="" border="0" width="45" height="45" style="display: block;"></a></td>
           <td align="left" valign="middle" style="color: #643A25; font-family: arial, sans-serif; font-size: 11px; line-height: 1.2;"><strong>Follow us on Twitter</strong></td>
          </tr>
          <tr>
           <td width="50" height="50" align="left" valign="top"><a href="#"><img src="img/email-invitation/rss.gif" alt="" border="0" width="45" height="45" style="display: block;"></a></td>
           <td align="left" valign="middle" style="color: #643A25; font-family: arial, sans-serif; font-size: 11px; line-height: 1.2;"><strong>Subscribe to updates</strong></td>
          </tr>
         </table>
        </td>
        <td></td>
       </tr>
             
      </table>
     </td>
    </tr>
   </table>
  </td>
  <!-- END Right Col -->
 </tr>
 <!-- END Email Body -->
 
 <!-- START Footer -->
 <tr>
  <td align="left" valign="top" bgcolor="#7B3220">
   <table align="left" valign="top">
    <tr>
     <td width="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
     <td align="left" valign="top">
      <table align="left" border="0" cellpadding="0" cellspacing="0">
       <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>
       <tr><td style="color: #FFFFFF; font-family: arial, sans-serif; font-size: 15px; line-height: 1.44;"><strong>Our Organization</strong></td></tr>
       <tr><td style="color: #FFFFFF; font-family: arial, sans-serif; font-size: 12px; line-height: 1.44;">
        123 Michigan Ave<br>
        Suite 600<br>
        Chicago, IL 94100<br>
        t: <a href="#" style="color: #FFFFFF; text-decoration: underline;">415-555-1234</a><br>
        e: <a href="#" style="color: #FFFFFF; text-decoration: underline;">contact@organization.org</a></td>
       </tr>
       <tr><td height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td></tr>       
      </table>
     </td>
     <td width="15" align="left" valign="top" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
    </tr> 
   </table>
  </td>
 </tr>
 <tr>
  <td height="25" align="center" valign="middle" style="color: #666666; font-family: arial, sans-serif; font-size: 10px; line-height: 1;">
   <a href="#" style="color: #666666; text-decoration: underline;">Unsubscribe</a> | <a href="#" style="color: #666666; text-decoration: underline;">Forward to a Friend</a> | <a href="#" style="color: #666666; text-decoration: underline;">View in browser</a>
  </td>
 </tr>
 
 <!-- END Footer -->

</table>
<!-- END Email -->

</body>
</html>