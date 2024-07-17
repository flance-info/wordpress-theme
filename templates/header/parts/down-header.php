<?php

?>
<div class="main-redcontable-new">
	<section class="logo-wrapper-wrapper">
		<div class="logo-wrapper">
			<div class="logo-and-search">
				<header class="search-bar-wrapper">
					<div class="search-input-and-buttons">
						<div class="search-bar">
							<?php get_template_part( 'templates/header/parts/logo-header' ); ?>

							<section class="navigation">
								<?php
								get_template_part( 'templates/header/parts/menu' );
								?>
							</section>
							<div class="search-input-wrapper">
								<div class="search-input">
									<button class="button">
										<img
												class="icon-btn-left"
												alt=""
												src="./wp-content/themes/masterstudy-lms-starter-child/assets/images/iconbtnleft.svg"
										/>

										<div class="text-sm">Categorías</div>
										<img
												class="icon-btn-right"
												alt=""
												src="./wp-content/themes/masterstudy-lms-starter-child/assets/images/iconbtnright.svg"
										/>
									</button>
									<?php get_template_part( 'templates/header/parts/search-course-header' ); ?>
								</div>
							</div>
						</div>
						<div class="user-actions">
							<div class="user-buttons">
								<div class="button1">
									<img
											class="icon"
											loading="lazy"
											alt=""
											src="./wp-content/themes/masterstudy-lms-starter-child/assets/images/icon.svg"
									/>
								</div>
								<?php
								get_template_part( 'templates/header/parts/authorization-links-header' );
								?>

							</div>
						</div>
					</div>

				</header>

			</div>
		</div>
	</section>
</div>




