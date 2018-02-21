<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
	//controlled in the widget sections
?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
			<div id="footer-form" class="footer-form">
				<div class="header">
					<div class="divider row">
						contact us
					</div>
                    Complete this simple form or call 866-787-6699
				</div>
				<div class="photo-overlay">
				</div>
				<?php dynamic_sidebar( 'form-footer-widgets' ); ?>
			</div>
			<div class="footer-blue">
				<div class="row upper-footer">
					<?php dynamic_sidebar( 'upper-footer-widgets' ); ?>
			  </div>
				<div class="row social-footer">
					<?php dynamic_sidebar( 'lower-social-widgets' ); ?>
			 </div>
				 <div class="row lower-footer">
					 <?php dynamic_sidebar( 'lower-footer-widgets' ); ?>
				</div>
			</div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>


		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->


<?php wp_footer(); ?>

<!-- Begin Keymetric Tracking Code -->
<script type = 'text/javascript' >
    function onKeyMetricComplete() {
    if (window.location.pathname == "/contact-thank-you/") {
        km_LogData('101');
    };
    if (window.location.pathname == "/insurance-thank-you/") {
        km_LogData('102');
    };
    if (window.location.pathname == "/brochure-thank-you/") {
        km_LogData('103');
    };
}
    var KmHost = (("https:" == document.location.protocol) ? "https://km14669" : "http://km14669");
    var kmscr = document.createElement('script');
    kmscr.type = 'text/javascript';
    kmscr.src = KmHost + ".keymetric.net/KeyMetric.js";
    document.body.appendChild(kmscr);
    
    // Add ad source to hidden field
    (function ($) {
    // Wait for Key Metrics code
    $( window ).on( "load", function() {
        var adSrc = km_GetTrackingURL('adsource');

        // Ninja forms is creates its own field IDs, so we have to target individial fields
        // nf-field-49 is the ad_source field on the Insurance form
        // nf-field-50 is the ad_source field on the Contact form
        // nf-field-70 is the ad_source field on the Footer Contact form
        // nf-field-80 is the ad_source field on the Brochure form
        $('#nf-field-49, #nf-field-50, #nf-field-70, #nf-field-80').each( function() {
            $(this).val(adSrc);
        });
    });
  })(jQuery);

</script>
<!-- End Keymetric Tracking Code -->



<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
