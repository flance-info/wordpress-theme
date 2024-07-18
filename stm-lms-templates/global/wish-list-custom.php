<?php
/**
 * @var $course_id
 */

stm_lms_register_style( 'wishlist' );
stm_lms_register_script( 'wishlist' );
if ( ! is_user_logged_in() ) {
	wp_enqueue_script( 'jquery.cookie' );
}
$wishlisted = STM_LMS_User::is_wishlisted( $course_id );
if ( is_user_logged_in() ) { ?>
	<div class="stm-lms-wishlist"
		 data-add="<?php esc_html_e( 'Add to Wishlist', 'masterstudy-lms-learning-management-system' ); ?>"
		 data-add-icon="far fa-heart"
		 data-remove="<?php esc_html_e( 'Remove from Wishlist', 'masterstudy-lms-learning-management-system' ); ?>"
		 data-remove-icon="fa fa-heart"
		 data-id="<?php echo intval( $course_id ); ?>">
		<?php if ( $wishlisted ) { ?>
			<div class="button5">
				<img class="icon1" alt="" src="wp-content/themes/masterstudy-lms-starter-child/assets/images/icon.svg"/>
			</div>

		<?php } else { ?>
			<div class="button5">
				<img class="icon1" alt="" src="wp-content/themes/masterstudy-lms-starter-child/assets/images/icon.svg"/>
			</div>
		<?php } ?>
	</div>
<?php } else { ?>
	<div class="stm-lms-wishlist">
		<a href="<?php echo esc_url( STM_LMS_User::login_page_url() ); ?>">
			<div class="button5">
				<img class="icon1" alt="" src="wp-content/themes/masterstudy-lms-starter-child/assets/images/icon.svg"/>
			</div>
		</a>
	</div>
	<?php
}
