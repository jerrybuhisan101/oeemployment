<?php
/**
 * Our Team section
 *
 * @package zerif-lite
 */

zerif_before_our_team_trigger();

echo '<section class="our-team" id="team">';

	zerif_top_our_team_trigger();

	echo '<div class="container">';

		echo '<div class="section-header">'; ?>
	<div class= "container">
		<div class ="row">
			<div class ="col-sm-6">
				<div class = "teaching-english">
					<div class = "teaching-title">
						<a href = ""><h2>Teaching English at Ocean Edu</h2></a>
					</div>
					<div class = "content1">
						<div class = "text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus orci, finibus ac eleifend in, commodo sit amet orci. Suspendisse ullamcorper lorem leo, fermentum sagittis mauris eleifend ut. Duis id dolor sapien. 
						</div>
						<ul class = "text-bullets">
							<li class ="asdasd">Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor sit amet</li>
						</ul>
					</div>
				</div>
			</div> <!-- end of 1st column -->

			<div class="col-sm-6">
					<div class = "teaching-title">
						<a href = ""><h2>Join Our Team</h2></a>
					</div>
					<div class = "content2">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin metus orci, finibus ac eleifend in, commodo sit amet orci. Suspendisse ullamcorper lorem leo, fermentum sagittis mauris eleifend ut. Duis id dolor sapien. 
					</div>
					<div class =""></div>
			</div>
		</div>
	</div>
<?php
		echo '</div>';

// if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
// 	echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
// 	dynamic_sidebar( 'sidebar-ourteam' );
// 	echo '</div> ';
// } elseif ( current_user_can( 'edit_theme_options' ) ) {

// 	if ( is_customize_preview() ) {
// 		/* translators: Our team section */
// 		printf( __( 'Add widgets in this area by going to the %s','zerif-lite' ), __( 'Our team section','zerif-lite' ) );
// 	} else {
// 		/* translators: Our team section in customizer */
// 		printf( __( 'Add widgets in this area by going to the %s','zerif-lite' ), sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;section&#93;=sidebar-widgets-sidebar-ourteam' ) ), __( 'Our team section','zerif-lite' ) ) );
// 	}
// }

	echo '</div>';

	zerif_bottom_our_team_trigger();

echo '</section>';

zerif_after_our_team_trigger();

