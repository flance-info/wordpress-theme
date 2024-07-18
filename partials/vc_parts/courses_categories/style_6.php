<?php

$css_class = ( isset( $css_class ) && ! empty( trim( $css_class ) ) ) ? $css_class : '';
if ( empty( $taxonomy ) ) {
	$taxonomy = 'get_default';
}
if ( ! empty( $taxonomy ) ) :
	if ( 'get_default' === $taxonomy ) {
		$terms     = array();
		$terms_all = stm_lms_get_terms_with_meta( 'course_icon' );
		if ( ! empty( $terms_all ) ) {
			foreach ( $terms_all as $term ) {
				$meta_value = get_term_meta( $term->term_id, 'course_icon', true );
				if ( ! empty( $meta_value ) ) {
					$terms[] = $term->term_id;
				}
			}
		}
	} else {
		$terms = explode( ',', str_replace( ' ', '', $taxonomy ) );
	}
	?>
	<div class="main-redcontable-new no-main-padding">
		<section class="logo-wrapper-wrapper stm-nopadding">
			<div class="logo-wrapper">
				<div class="top-subjects-parent">
					<h2 class="top-subjects"><?php echo esc_html__( 'Top subjects', 'starter-text-domain' ) ?></h2>
					<div class="button-card-parent">

						<?php
						if ( ! empty( $terms ) && is_array( $terms ) ) : ?>


							<?php
							foreach ( $terms as $key => $term ) :
								$term = get_term_by(
										'id',
										$term,
										'stm_lms_course_taxonomy'
								);
								if ( empty( $term ) || is_wp_error( $term ) ) {
									continue;
								}
								$term_image       = wpcfto_get_term_meta_text( $term->term_id, 'course_image' );
							 $media_url = ($term_image) ? wp_get_attachment_url($term_image) : '';
								?>
								<div class="button-card">
								<?php if ($media_url) : ?>
									<img
											class="card-header-icon"
											loading="lazy"
											alt=""
											src="<?php echo esc_attr($media_url) ?>"
									/>
									<?php endif; ?>
									<div class="card-content">
										<a href="<?php echo esc_url( STM_LMS_Course::courses_page_url() . '?terms[]=' . $term->term_id . '&category[]=' . $term->term_id ); ?>>" title="<?php echo esc_attr( $term->name ); ?>" class="">

											<div class="labels">
												<div class="button-label"><?php echo esc_html( $term->name ); ?></div>
											</div>
										</a>
									</div>

								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php endif; ?>




