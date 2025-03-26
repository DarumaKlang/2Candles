<?php
/**
 * Title: Banner with book description
 * Slug: twoCandles/banner-about-book
 * Categories: banner
 * Description: Banner with book description and accompanying image for promotion.
 *
 * @package WordPress
 * @subpackage 2Candles
 * @since 2Candles 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":""} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"className":"wp-block-heading","fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( '2Candles', 'twoCandles' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php echo esc_html_x( 'วัตถุประสงค์หลักของเวปเพื่อให้อาจารย์จัสตินใช้เผยแผ่ ศาสตร์ต่างๆตามความตั้งใจอันดีของท่าน และใช้เป็นช่องทางสำหรับสื่อสารระหว่างอาจารย์และลูกศิษย์', 'Pattern placeholder text.', 'twoCandles' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"default"}} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Untitled-1.png" alt="<?php esc_attr_e( 'อาจารย์จัสติน รัตนมงคล', 'twoCandles' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
