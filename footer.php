			<div id="footer">
				<div id="footer-widgets">
				<div class="footer-left">
					<ul>
					<?php
						// The Footer Left Side widget area
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left-side') ) : 
					?>
						<li class="widget widget-area-empty">Footer Left Widget</li>
					<?php endif; ?>
					</ul>
				</div>
<div class="footer-center">
					<ul>
					<?php
						// The Footer Left Side widget area
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-center-side') ) : 
					?>
						<li class="widget widget-area-empty">Footer Center Widget</li>
					<?php endif; ?>
					</ul>
				</div>
				
<div class="footer-right">
					<ul>
					<?php
						// The Footer Right Side widget area
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right-side') ) : 
					?>
						<li class="widget widget-area-empty">Footer Right Widget</li>
					<?php endif; ?>
					</ul>
				</div>
                </div>

				<div id="footer-bottom">
					
<?php
				// Checking if there's anything in Top Menu
				if ( has_nav_menu( 'footer-menu' ) ) {
				
					// If there is, adds the Top Menu area
					wp_nav_menu( array(
						'menu' => 'Footer Menu',
						'container' => 'div',
						'container_class' => 'footer-menu',
						'theme_location' => 'footer-menu',
					));
				}
			?>
</br>
<p class="acknowledgements">LiveNotorious is powered by <a href="http://wordpress.org" title="WordPress">WordPress</a>  |  Template designed by <a href="http://www.ashendesign.com" target="_blank" />AshenDesign</a>  |  <a href="https://plus.google.com/102413543194516931857" rel="publisher">Google+</a></p>
				</div>
			</div>
			
		</div> <!-- ends #plate -->
	</div> <!-- ends #wrap -->
	</div> <!-- ends #site -->

<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39426503-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>