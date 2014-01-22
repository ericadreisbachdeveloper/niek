 // back button
 function goBack() { 
  window.history.back() 
 }	

 function goHome() {
  window.location.assign('./')
 }

 $(document).ready(function(){

  // small bullets
  var text = document.body.innerHTML;
  var str = text.replace(/\u2022/g, '<span class="small">&bull;</span>'); 
  document.body.innerHTML = str;

 });
