<?php
/**
 * Title: Centered footer
 * Slug: twoCandles/footer-centered
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with centered site title and tagline.
 *
 * @package WordPress
 * @subpackage 2Candles
 * @since 2Candles 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0,"textAlign":"center"} /-->
		<!-- wp:site-tagline {"textAlign":"center"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
	<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">
		<?php
		printf(
			/* translators: Designed with 2Candles. %s: 2Candles link. */
			esc_html__( 'Designed with %s', 'twoCandles' ),
			'<a href="' . esc_url( __( 'https://2Candles.com', 'twoCandles' ) ) . '" rel="nofollow">2Candles</a>'
		);
		?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
