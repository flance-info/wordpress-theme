<header class="header" id="header">
<?php
	get_template_part( 'templates/header/parts/top-header' );
	get_template_part( 'templates/header/parts/down-header' );
	?>
	<div class="container">

		<section class="navigation">
			<?php

				get_template_part( 'templates/header/parts/logo' );
				get_template_part( 'templates/header/parts/menu' );

			if ( defined( 'MS_LMS_VERSION' ) ) {
				get_template_part( 'templates/header/parts/search-course' );

			}
			?>
		</section>
	</div>
</header>
