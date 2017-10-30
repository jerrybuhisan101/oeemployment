<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 *
 * @package zerif-lite
 */

?>

</div><!-- .site-content -->



<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

	

	<div class="container">
		<div class ="row">
			<div class="col-md-4 col-sm-12 box-bottom-logo">
                    <div class="box-img-bottom-logo">
                        <img src="http://ocean.edu.vn/Content/images/v2/logo-bot.png" alt="Ocean Edu" class="">
                    </div>
                    <div class="company-bottom">CÔNG TY CỔ PHẦN GIÁO DỤC ĐẠI DƯƠNG</div>
                    <div class="brand-bottom">Ocean Edu Vietnam</div>
                    <address class="add-bottom">
                        <br>
                        Tòa nhà Ocean Edu, 204 Nguyễn Lương Bằng, Đống Đa, Hà Nội<br>
                        Tel: <a href="tel:19006494">1900 6494</a> - <a href="tel:02473000333">02473 000 333</a><br/>
                        Email: Trainingdepartment@oceanedu.vn
                    </address>
                </div>


                <div class="col-md-8 hidden-xs" style="padding-top: 20px;">
                  
                    <div class="row">
                        <div class="col-md-4">
                            <b class="font-roboto" style="color: #fff;">About Ocean Edu</b>
                            <ul class="list-bottom">
                                    <li><a href="/">Introduction</a></li>
                                    <li><a href="/">Why Work at Ocean Edu</a></li>
                                    <li><a href="/">Branch Locations</a></li>
                                    <li><a href="/">Ocean Edu Teachers</a></li>
                                   
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <b class="font-roboto" style="color: #fff;">Teaching Jobs</b>
                            <ul class="list-bottom2">
                                     <li><a href="/">Qualifications</a></li>
                                     <li><a href="/">Available Positions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
						<b class="font-roboto" style="color: #fff;">OCEAN EDU TRÊN FACEBOOK</b>
                            <iframe style ="margin-left: 7%;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FOceanEduVietNam%2F&amp;tabs&amp;width=165&amp;height=170&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1514932012164173" width="230" height="170" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                        </div>
                    </div>
                </div>


		</div> <!-- end of row-->



	</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->



	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->

<?php
/**
 *  Fix for sections with widgets not appearing anymore after the hide button is selected for each section
 */

if ( is_customize_preview() ) {

	if ( is_active_sidebar( 'sidebar-ourfocus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourfocus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-aboutus' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-aboutus' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-ourteam' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-ourteam' );
		echo '</div>';
	}
	if ( is_active_sidebar( 'sidebar-testimonials' ) ) {
		echo '<div class="zerif_hidden_if_not_customizer">';
			dynamic_sidebar( 'sidebar-testimonials' );
		echo '</div>';
	}
}

?>

<?php wp_footer(); ?>

<?php zerif_bottom_body_trigger(); ?>

</body>

</html>
