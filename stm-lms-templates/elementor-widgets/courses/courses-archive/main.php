<div class="main-redcontable-new no-main-padding">
	<section class="logo-wrapper-wrapper stm-nopadding">
		<div class="logo-wrapper">
			<div class="popular-courses">
				<div class="popular-courses-container">
					<?php if ( ! empty( $show_header ) ) { ?>
						<div class="popular-course-heading">
							<h2 class="cursos-populares"><?php echo esc_html( $title_text ); ?></h2>
						</div>
					<?php } ?>
					<div class="container stm-nopadding">
						<?php if ( ! empty( $courses ) && is_array( $courses ) ) { ?>

							<?php
							STM_LMS_Templates::show_lms_template(
									"elementor-widgets/courses/card/card-style-custom/main",
									array(
											'courses'             => $courses,
											'course_image_size'   => $course_image_size,
											'meta_slots'          => $meta_slots,
											'card_data'           => $card_data,
											'popup_data'          => $popup_data,
											'course_card_presets' => $course_card_presets,
											'widget_type'         => $widget_type,
									)
							);
						} else {
							STM_LMS_Templates::show_lms_template( 'elementor-widgets/courses/courses-archive/filter/no-results' );
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

