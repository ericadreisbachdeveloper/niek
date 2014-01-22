 $(document).ready(function(){
  $('.quote:first').css('opacity',1).addClass('active');
  $('#testimonials-nav').children('li:first').addClass('active');
    
  // testimonials height pegged to tallest quote
  var maxHeight = -1;
  $('.quote').each(function() {
   maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
   $(this).height(maxHeight);
  });
  $('#testimonials').height(maxHeight + 300); 
  
  // align frame to top
  $('#testimonials-section').click(function(){
   var testimonialsoffset = $('#testimonials-section').offset().top; 
   $('body,html').animate({ scrollTop: testimonialsoffset }, 300);
  });
  
  // set width of ul#testimonials-nav for to nicely center the children
  var liouterw = $('#testimonials-nav').children('li').outerWidth();
  var limarginr = $('#testimonials-nav').children('li').css('marginRight').replace("px", "");
  var liw = Number(liouterw) + Number(limarginr);
  var quotel = $('#testimonials-nav').children('li').length;
  $('#testimonials-nav').width(quotel * liw);

  // #testimonials-nav  
  $('#testimonials-nav').children('li').click(function(){
   var idname = $(this).attr('id');
   $('#testimonials-nav').children('.active').removeClass('active');
   $(this).addClass('active');
   
   // if the nav's associated quote is visible, do nothing
   if ( $('#' + idname + '-quote').css('opacity') == "1" ) {
   }
   
   // else, fade out the visible quote, and fade in clicked quote
   else {
   	$('.quote:visible').animate({ opacity: 0 }, 200, function(){
   	 $('#testimonials-section').children('.container').children('.active').removeClass('active');
   	 $('#' + idname + '-quote').animate({ opacity: 1 }, 200).addClass('active');
   	});
   }
   return false;
  });
  
  
  $('.quote').click(function(){
   var quoteid = $(this).attr('id');
   var quotename = quoteid.replace('-quote','');

   if ( $('#' + quoteid).next('.quote').length>0 ){
    var nextid = $(this).next('.quote').attr('id'); 
    var nextname = nextid.replace('-quote',''); 	

  	$('#' + quoteid).animate({ opacity: 0 }, 200).removeClass('active');
  	$('#' + quotename).removeClass('active');
  	$('#' + nextid).animate({ opacity: 1 }, 200).addClass('active');
  	$('#' + nextname).addClass('active'); 
   }
   else {
    // else back to the beginning
    $('#' + quoteid).animate({ opacity: 0 }, 200).removeClass('active');
  	$('#' + quotename).removeClass('active');
  	$('#testimonials').children('.table').children('.table-cell').children('.quote:first').animate({ opacity: 1 }, 200).addClass('active');
  	$('#testimonials-nav').children('li:first').addClass('active');  
   }
   return false;
  });

 });
 
 $(window).resize(function(){
  
  // set width of ul#testimonials-nav for to nicely center the children
  var liouterw = $('#testimonials-nav').children('li').outerWidth();
  var limarginr = $('#testimonials-nav').children('li').css('marginRight').replace("px", "");
  var liw = Number(liouterw) + Number(limarginr);
  var quotel = $('#testimonials-nav').children('li').length;
  $('#testimonials-nav').width(quotel * liw);
  
  // testimonials height pegged to tallest quote
  var maxHeight = -1;
  $('.quote').each(function() {
   maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
   $(this).height(maxHeight);
  });
  $('#testimonials').height(maxHeight + 300);
 
 });

