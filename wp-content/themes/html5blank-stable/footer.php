<!-- footer -->
<footer class="footer container-fluid" role="contentinfo">

	<div class="row text-left">
		<style>
		.footer_instagram {
			text-align: center;
		}
			.simple_slider, .loading_cont {
				width: 100%;
				height: 320px;
				max-width: 320px;
				margin: auto;
			}
			#insta_loading img {
				width: 32px;
			}
		</style>
		<div class="col-sm-4 footer_instagram">
			<?php //echo do_shortcode("[contentblock id=footer_profile]") ?>
			<h3>Instagram</h3>
			<div class='loading_cont'>
				<div class='vAlign' style="height:100%; vertical-align:middle; display: inline-block"></div>
				<span id="insta_loading"></span>
			</div>
			<div class='simple_slider' style="display:none;"></div>
		</div>

		<div id="about" class="col-sm-8">
			<article class="text-left footer-dear-you">
				<?php echo do_shortcode("[contentblock id=footer_message]") ?>
			</article>
		</div>

	</div>
	<br><br>


	<div id="sponsors" class="row  text-left">
		<h5 class="text-capitalize">SPONSORS</h5>
		<hr>
		<div class="text-center">
			<?php echo do_shortcode("[contentblock id=footer_sponsors]") ?>

		</div>
	</div>
	<br><br>


	<!--				<!-- copyright -->
	<!--				<p class="copyright">-->
	<!--					&copy; --><?php //echo date('Y'); ?><!-- Copyright --><?php //bloginfo('name'); ?><!--. --><?php //_e('Powered by', 'html5blank'); ?>
	<!--					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.-->
	<!--				</p>-->
	<!-- /copyright -->

</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->

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
