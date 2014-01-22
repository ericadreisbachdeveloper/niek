<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    { echo "<form method='post' action='index.php#contact'>
     <div class='form float-left'><div>Name: <input name='name' type='text'></div><div>Email*: <span class='error'>&nbsp; &nbsp;Please enter a valid email</span><input name='email' type='text' class='error'><span class='small'><em>*Required</em></span></div><div>Subject: <input name='subject' type='text'></div></div><div class='form float-right'>
     Message:<br>
     <textarea name='message' rows='10' cols='40'>
     </textarea></div><div>
     <input type='submit' value='SUBMIT'>
     </div> 
     </form>"; }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("erica@ericadreisbach.com", "Subject: $subject",
    $message, "From: $email" );
    echo "<form method='post' action='index.php#contact'>
  <p id='thankyou'>Thank you! We&#39;ll be in touch soon!</p><div class='form float-left'><div>Name: <input name='name' type='text'></div><div>Email*: <input name='email' type='text'><span class='small'><em>*Required</em></span></div><div>Subject: <input name='subject' type='text'></div></div><div class='form float-right'>
  Message:<br>
  <textarea name='message' rows='10' cols='40'>
  </textarea></div><div>
  <input type='submit' value='SUBMIT'>
  </div> 
  </form>";
    }
  }
else
  {//if "email" is not filled out, display the form
  echo "<form method='post' action='index.php#contact'>
  <div class='form float-left'><div>Name: <input name='name' type='text'></div><div>Email*: <input name='email' type='text'><span class='small'><em>*Required</em></span></div><div>Subject: <input name='subject' type='text'></div></div><div class='form float-right'>
  Message:<br>
  <textarea name='message' rows='10' cols='40'>
  </textarea></div><div>
  <input type='submit' value='SUBMIT'>
  </div> 
  </form>";
  }
?>