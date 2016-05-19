			<!-- Secondary zones -->
			<!-- =================================== -->
			<?php get_template_part( 'includes/secondary-zones' ); ?>

			<footer class="site-footer" role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<a class="footer-logo" href="http://www.mozilla.org">mozilla</a>
						</div>
						<div class="col-md-6">
							<!-- copyright -->
							<p class="copyright">
								&copy; 2005-<?php echo date('Y'); ?> Mozilla Developer Network and individual <br>contributors. Content is available under these <a href="#">licenses</a>.
							</p>
						</div>
						<div class="col-md-4">
							<?php footer_menu(); ?>
						</div>
					</div>
				</div>
			</footer>

		<?php wp_footer(); ?>

	</body>
</html>