<!-- footer -->
<footer class="footer container-fluid" role="contentinfo">


	<?php if(is_front_page() || is_home()): ?>

		<div id="about" class="col-sm-12">
			<article class="text-left footer-dear-you">
				<?php echo do_shortcode("[contentblock id=footer_message]") ?>
			</article>
		</div>

	<!--
	<br><br>
	<div id="sponsors" class="row  text-left col-sm-12">
		<h5 class="text-capitalize">SPONSORS</h5>
		<hr>
		<div class="text-center">
			<?php echo do_shortcode("[contentblock id=footer_sponsors]") ?>

		</div>
	</div>-->

	<?php endif; ?>

	<br><br>

	<!-- copyright -->
	<p class="copyright">© <?php echo date('Y'); ?> Bellywellyjelly.com </p>

</footer>
<!-- /footer -->

</div>
<!-- / max width wrapper -->

<?php wp_footer(); ?>
<!--		<!-- analytics -->
<!--		<script>-->
<!--		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){-->
<!--		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),-->
<!--		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)-->
<!--		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');-->
<!--		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');-->
<!--		ga('send', 'pageview');-->
<!--		</script>-->

</body>
</html>
