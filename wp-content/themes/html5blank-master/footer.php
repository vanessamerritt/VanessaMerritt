			</div>
			<!-- footer -->
			
			<footer class="footer" role="contentinfo">
<div class="wrapper">
				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. 
				</p>	
				<p class="footer"><a href="mailto:vanessa@vanessamerritt.com">vanessa@vanessamerritt.com</a> || <a href="tel:4166270903">416-627-0903</a></p>
				<!-- /copyright -->
					<div class="footer-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>

</div>
				
			</footer>
			<!-- /footer -->


		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
