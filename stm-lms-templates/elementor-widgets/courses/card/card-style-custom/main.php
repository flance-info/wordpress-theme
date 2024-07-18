<?php

foreach ( $courses as $course ) {
	$course = STM_LMS_Courses::get_course_submetas( $course, $course_image_size );

	$duration = ($course['duration_info']) ? $course['duration_info'] : 0;
	?>
		<div class="item-course-main">
		<div class="image-3-parent">
			<img
					class="image-3-icon"
					alt=""
					src="<?php echo esc_url( $course['image'] ); ?>"
			/>
			<div class="badge">
				<div class="new"><?php echo esc_html__( 'New', 'starter-text-domain' ) ?></div>
			</div>
		</div>
		<div class="course-title-and-author">
			<div class="ultimate-2024-web">
				<?php echo esc_html( $course['post_title'] ); ?>
			</div>
			<div class="by-alex-johnson"><?php echo 'By '.$course['author_info']['login'] ?></div>
			<div class="course-details">
				<div class="hours-wrapper">
					<div class="hours"><?php echo $duration ?> <?php echo esc_html__( 'hours', 'starter-text-domain' ) ?></div>
				</div>
				<div class="course-level-icon-wrapper">
					<div class="course-level-icon"></div>
				</div>
				<div class="beginner"><?php echo $course['level']; ?></div>
			</div>
			<div class="course-button-container">
				<button class="button4">
					<img
							class="icon-btn-left3"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/iconbtnright.svg"
					/>
					<a href="<?php echo esc_url( $course['url'] ); ?>" class="ms_lms_courses_card_item_info_title">
						<div class="course-action-label"><?php echo esc_html__( 'Enroll now', 'starter-text-domain' ) ?></div>
					</a>
					<img
							class="icon-btn-right3"
							alt=""
							src="wp-content/themes/masterstudy-lms-starter-child/assets/images/iconbtnright.svg"
					/>
				</button>
				<div class="ms_lms_courses_card_item_info_wishlist">
					<?php STM_LMS_Templates::show_lms_template( 'global/wish-list-custom', array( 'course_id' => $course['id'] ) ); ?>
				</div>
			</div>
		</div>
	</div>
	<?php
}
