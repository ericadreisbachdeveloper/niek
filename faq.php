<?php $bodytype = 'faq project'; $subtitle = 'FAQs'; include('header.php'); include('page-nav.php'); ?>

<section>
 <div class="table padded-cell">
  <div class="table-cell">
   <!-- <h1><?php echo($bodytype); ?> -->
   <h1>Frequently Asked Questions</h1>
   
   <h2>Who are your clients?</h2>
   <p>All sorts! I've produced work for large companies, nonprofits, small shops, solo practioners, bloggers, and more.</p>
   
   <h2>What's your process?</h2>
   <p>I like at least one initial meeting with clients to talk in-depth about their site: technical needs, design aesthetic, content generation or migration, budget constraints, etc.</p>
   <p>From these conversations I create a milestone and delivery schedule, as well as an estimate that then becomes a soft cap on hours&mdash;with the understanding that if I run into challenges or if the spec changes along the way we'll adjust as needed.</p>
   <p>Nearly all of my projects come in on time and under budget. I work hard to keep it that way!</p>
   
   <h2>How long will it take and how much will it cost?</h2>
   <p>That depends! <a href="./#contact">Email me</a> and we can start talking. If I'm not the right fit for your project, I can probably recommend someone who is.</p>
   
   <h2>What are your specialties?</h2>
   <p>My sweet spot is <strong>front-end development</strong> (HTML, CSS, jQuery), as opposed to design&nbsp;proper or big-girl programming. I'm expert at turning a PSD into working code.</p>
   
   <h2>What's your background?</h2>
   <p>I grew up in northeastern Vermont (the Northeast Kingdom). After college I had a five-year mini-career in marketing for nonprofits that plan conferences for socially responsible business leaders*.<br />
   <span class="small">*think: Ben from Ben &amp; Jerry's, Tom from Tom's of Maine ...</span></p>
   <p>Eventually I was more focused on hacking around on the website and coding the monthly enewsletter than on messaging and branding and other important marketing things. 
   <p>Since 2009 I've been a full-time freelance coder-designer-developer, with a short stint in 2010 writing <a href="http://seogonewild.tumblr.com/post/52057204836/in-a-very-special-seo-gone-wild-seo-from-me" target="_blank">SEO blogs</a>.</p>
		
   <h2>What do you post on Twitter?</h2><a href="http://www.twitter.com/ericadreisbach" target="_blank" class="float-right"><img src="img/icon-twitter@2x.png"  class="twitter" alt="Follow @ericadreisbach on Twitter!" /></a>
   
   <p>All my favorite web design links and resources! Check it out if you're interested. Also, if you follow <a href="http://www.twitter.com/ericadreisbach" target="_blank">@ericadreisbach</a>, then unlike Spinoza's twitter, she will follow you back.</p>
   <p class="twitter-after"><a href="https://twitter.com/search?q=%23philosophyjokes&amp;src=hash" target="_blank">#philosophyjokes</a></p>
   
   <h2>Nerd question: what do you use to code?</h2>
   <p>You mean like &ldquo;Emacs or vim&rdquo;? Neither. I use a text editor, which works awesomely for my purposes. And that text editor's name is: Microsoft Word<sup>&reg;</sup>. Kidding! Kidding! Not a funny joke! I take it back!</p>
   <p>I code in <a href="http://notepad-plus-plus.org/" target="_blank">Notepad++</a> when I'm on my Windows box and <a href="http://www.peterborgapps.com/smultron/" target="_blank">Smultron</a> on Mac.</p>
   
   <h2>What's the best way to get in touch?</h2>
   <p>I love <a href="./#contact">email</a>. You may have once heard an oracle tell of true-hearted web developers that maintain an empty inbox. I am one of whom the oracle spake.</p>
   <p>You can expect an email reply within an hour during Central business hours, and usually within more like 20 minutes. I'm also open and flexible about making appointments for real-time conversation.</p>
   <p>My favorite attachments from clients are PDFs and screenshots (jpg or png). My least favorites are Microsoft Word<sup>&reg;</sup> docx or PowerPoint<sup>&reg;</sup> pptx.</p>
   
   <h2>What do you do for fun?</h2>
   <img src="img/marathon-fist.jpg" class="float-right marathon" alt="Erica Dreisbach running the Chicago marathon in 2013" />
   <p>I like to get outdoors: bicycling, running, climbing, just taking a walk by Mother Michigan. One of the major reasons I freelance is for the time and access to outdoor adventure.</p>
   <p class="marathon-after">I also write for web series and film, perform music, and draw. In 2013 I was a storyteller in the <a href="http://moth-stories.tumblr.com/post/54106983421/how-many-people-does-it-take-to-throw-an-awesome" target="_blank">Moth Grand Slam</a>. On Sundays you might catch me at the Green Mill slamming poetry.</p>
      
   <input value="HOME" type="button" id="home" onclick="goHome();">      
  
  </div><!-- .table-cell -->
 </div><!-- .table -->
</section>

<footer>
 <div class="table padded-cell">
  <div class="table-cell">
   <p class="small">Marathon photo courtesy <a href="http://www.marathonfoto.com" target="_blank" rel="nofollow">Marathon Foto</a>.<br />
    Site design and all other content &copy;<?php date_default_timezone_set('America/Chicago'); echo date("Y"); ?> <a href="http://www.ericadreisbach.com">erica dreisbach</a>.</p>
  </div><!-- table-cell -->
 </div><!-- .table.padded-cell -->
</footer>

<script type="text/javascript">	
 $(document).ready(function(){
  $('#nav').children('li').children('a[href^="faq"]').addClass('active'); 		

  $('.twitter-after').click(function(){
   window.location = 'http://www.twitter.com/ericadreisbach';
  });
 });
</script>

<?php include('footer.php'); ?>