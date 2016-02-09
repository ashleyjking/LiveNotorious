<div id="sidebar-container">
	<ul id="sidebar">
<div class="aboutme">
<img src="<?php bloginfo('template_directory'); ?>/img/background/hi-im-ashley.jpg" alt="Hi I'm Ashley." />

<h4>I am so happy that you decided to stop by!</h4>

<p>If you are new to LiveNotorious, please take a look around. You can <a href="http://livenotorious.net/start-here/">start here,</a> or search for a topic below.</p>
</div>

<div class="search">
    	<form action="/" method="get">
	<fieldset>
		<label for="search" type="hidden">Search in <?php echo home_url( '/' ); ?></label>
		<input type="text" name="s" id="search" placeholder="Try searching for it..." value="<?php the_search_query(); ?>" />
		<input type="image" class="search-icon" alt="Search" src="http://livenotorious.net/trials/wp-content/uploads/2014/09/search-btn.png" />
	</fieldset>
</form>

    </div>

<div>
<a href="http://astore.amazon.com/liveno-20" target="_blank" ><img src="http://livenotorious.net/wp-content/uploads/2015/02/amazon-store-copy.jpg" alt="Amazon Store of LiveNotorious" /></a>
</div>
	<?php
		
		// We want to show the right sidebar for the right area
		// Checking to see if it is the front page
		if ( is_front_page() ) {
			// The Front Page Right Column widget area
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('front-page-right-column') ) : endif; // -- Check ends
		}
		// This widget area is empty by default
		elseif ( is_page() ) {
			// The Pages Right Column widget area
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('pages-right-column') ) : endif; // -- Check ends
		} 
		elseif ( is_single() ) {
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('single-page-right-column') ) : endif; // -- Check ends
		}
		else {
			// Fallback widget area for everything else
			// This widget area is empty by default
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right-column-fallback') ) : endif; // -- Check ends
		}
		?>
			
	</ul>
</div>