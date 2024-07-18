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
	if ( ! empty( $terms ) && is_array( $terms ) ) : ?>
		<div class="stm_lms_courses_categories <?php echo esc_attr( $style . $css_class ); ?>">

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
				$term_icon = get_term_meta( $term->term_id, 'course_icon', true );
				$term_icon = ( ! empty( $term_icon ) ) ? $term_icon : 'no-icon';
				$term_color = get_term_meta( $term->term_id, 'course_color', true );
				$term_color = ( ! empty( $term_color ) ) ? $term_color : '#1ec1d9';
				?>
				<a href="<?php echo esc_url( STM_LMS_Course::courses_page_url() . '?terms[]=' . $term->term_id . '&category[]=' . $term->term_id ); ?>>" title="<?php echo esc_attr( $term->name ); ?>" class="stm_lms_courses_category no_deco"
				   style="background-color: <?php echo esc_attr( $term_color ); ?>">
					<i class="<?php echo esc_html( $term_icon ); ?>"></i>
					<h4><?php echo esc_html( $term->name ); ?></h4>
				</a>

			<?php endforeach; ?>
		</div>
	<?php endif; ?>
<?php endif; ?>
<section class="logo-wrapper-wrapper">
	<div class="logo-wrapper">
		<div class="top-subjects-parent">
			<h2 class="top-subjects">Top subjects</h2>
			<div class="button-card-parent">
				<div class="button-card">
					<img
							class="card-header-icon"
							loading="lazy"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/frame-1.svg"
					/>

					<div class="card-content">
						<div class="labels">
							<div class="button-label">Administración de Empresas</div>
						</div>
					</div>
				</div>
				<div class="button-card1">
					<img
							class="button-card-child"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/frame-1-1.svg"
					/>

					<div class="labels-wrapper">
						<div class="labels1">
							<div class="button-label1">Construcción de viviendas</div>
						</div>
					</div>
				</div>
				<div class="button-card2">
					<img
							class="button-card-item"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/frame-1-2.svg"
					/>

					<div class="labels-container">
						<div class="labels2">
							<div class="button-label2">Sales and marketing</div>
						</div>
					</div>
				</div>
				<div class="button-card3">
					<img
							class="button-card-inner"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/frame-1-3.svg"
					/>

					<div class="labels-frame">
						<div class="labels3">
							<div class="button-label3">Planificación urbana</div>
						</div>
					</div>
				</div>
				<div class="button-card4">
					<img class="frame-icon" alt="" src="wp-content/themes/masterstudy-lms-starter-child/assets/images/frame-1-4.svg"/>

					<div class="frame-div">
						<div class="labels4">
							<div class="button-label4">World languages</div>
						</div>
					</div>
				</div>
				<div class="button-card5">
					<img
							class="button-card-child1"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/frame-1-5.svg"
					/>

					<div class="labels-wrapper1">
						<div class="labels5">
							<div class="button-label5">Gestión financiera</div>
						</div>
					</div>
				</div>
				<div class="button-card6">
					<img
							class="button-card-child2"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/frame-1-6.svg"
					/>

					<div class="labels-wrapper2">
						<div class="labels6">
							<div class="button-label6">Software development</div>
						</div>
					</div>
				</div>
				<div class="button-card7">
					<img
							class="button-card-child3"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/frame-1-7.svg"
					/>

					<div class="labels-wrapper3">
						<div class="labels7">
							<div class="button-label7">Business planning</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
