<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="p:domain_verify" content="af573d42b362cf39ed4ae1ef49b7946f"/>
<title>
<?php 
	// Changing the title for various sections on the site
	if ( is_home () ) { 
	    bloginfo('name'); 
	} elseif ( is_category() || is_tag() ) {
	    single_cat_title(); echo ' &bull; ' ; bloginfo('name'); 
	} elseif ( is_single() || is_page() ) { 
	    single_post_title(); 
	} else { 
	    wp_title('',true); 
	} 
?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=273346966027505";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="site">


<h1 id="logo"> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>"> <img src="http://livenotorious.net/wp-content/uploads/2014/09/logo.png" /> </a> </h1>
<div id="menubg">
 <?php sinking_dropwdown('menu') ?>
</div>
<div id="newsletter-signup-bg">
	<div id="newsletter-signup">
  <img src="http://livenotorious.net/wp-content/uploads/2015/01/journal-styles.png" align="left" /><h1>Sign up to receive my FREE 8 Journal Styles Guide!</h1> 
  <!-- Begin MailChimp Signup Form -->
  <div id="mc_embed_signup">
    <form action="//ashendesign.us2.list-manage.com/subscribe/post?u=451b7b8503d7b8f2824a6ed2d&amp;id=88255b66ff" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

      <div class="mc-field-group">
        <input type="text" value="" placeholder="First Name" name="NAME" class="required" id="mce-NAME">
        <input type="email" value="" name="EMAIL" placeholder="Email" class="required email" id="mce-EMAIL">
      </div>
      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>
      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;">
        <input type="text" name="b_451b7b8503d7b8f2824a6ed2d_88255b66ff" tabindex="-1" value="">
      </div>
      <div>
        <input type="submit" value="Sign Me Up" name="subscribe" id="mc-embedded-subscribe" class="button">
      </div>
    </form>
  </div>
  
  </div>
  <div id="social-media">
  	<a href="https://www.facebook.com/livenotoriousblog" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logos/social-media/fb-sm.png" /></a>
    <a href="https://twitter.com/livenotorious" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logos/social-media/twitter-sm.png" /></a>
    <a href="https://plus.google.com/u/0/b/102413543194516931857/+LivenotoriousNetyoga/posts" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logos/social-media/google-p-sm.png" /></a>
    <a href="http://www.pinterest.com/livenotorioussc/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logos/social-media/pinterest-sm.png" /></a>
 <a href="http://instagram.com/livenotoriousyoga" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logos/social-media/instagram-sm.png" /></a>
    <a href="http://www.linkedin.com/pub/ashley-king/25/707/207" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/logos/social-media/linkedin-sm.png" /></a>
    </div>
  <!--End mc_embed_signup--> 
</div>

<div id="wrap">
<div id="plate">
