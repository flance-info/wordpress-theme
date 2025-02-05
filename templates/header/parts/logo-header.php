<?php

$custom_logo_id         = starter_get_option( 'logo' );
$logo_image             = wp_get_attachment_image_src( $custom_logo_id, 'full' );
$customizer_logo_url    = get_theme_mod( 'ms_lms_starter_logo' );
$customizer_logo_width  = get_theme_mod( 'ms_lms_starter_logo_width' ) ? get_theme_mod( 'ms_lms_starter_logo_width' ) : '226';
$customizer_logo_height = get_theme_mod( 'ms_lms_starter_logo_height' ) ? get_theme_mod( 'ms_lms_starter_logo_height' ) : '40';
if ( $customizer_logo_url ) {
	?>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="height: <?php echo esc_attr( $customizer_logo_height ); ?>px;" class="starter-logo">
		<img src="<?php echo esc_url( $customizer_logo_url ); ?>" width="<?php echo esc_attr( $customizer_logo_width ); ?>" height="<?php echo esc_attr( $customizer_logo_height ); ?>" alt="<?php echo esc_attr( $custom_logo_id ); ?>">
		<img
				class="a13193-red-contable-logo-ap-1"
				loading="lazy"
				src="<?php echo esc_url( $customizer_logo_url ); ?>"
				alt="<<?php echo esc_attr( $custom_logo_id ); ?>"
		/>
	</a>
	<?php
	if ( ! empty( $custom_logo_id ) ) {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="starter-logo">

			<img
					class="a13193-red-contable-logo-ap-1"
					loading="lazy"
					src="<?php echo esc_url( $logo_image[0] ); ?>"
					alt="<?php echo esc_html( get_the_title( $custom_logo_id ) ); ?>"
			/>


		</a>
	<?php } else { ?>
		<a href="<?php echo esc_url( site_url( '/' ) ); ?>" class="starter-logo">
			<img
					class="a13193-red-contable-logo-ap-1"
					loading="lazy"
					src="./wp-content/themes/masterstudy-lms-starter-child/assets/images/a13193-red-contable-logo-ap-1@2x.png"
					alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
			/>
		</a>

		<?php
	}
} else { ?>
	<a href="<?php echo esc_url( site_url( '/' ) ); ?>" class="starter-logo">
		<img
				class="a13193-red-contable-logo-ap-1"
				loading="lazy"
				src="./wp-content/themes/masterstudy-lms-starter-child/assets/images/a13193-red-contable-logo-ap-1@2x.png"
				alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
		/>
	</a>
	<?php
}
