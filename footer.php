<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resto
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">
				<ul>
						<li>New York Restaurant</li>
						<li>3926 Anmoore Road</li>
						<li>New York, NY 10014</li>
						<li>123-123-1234</li>
				</ul>
				<ul>
						<li>Fance Restaurant</li>
						<li>36, rue de la Couronne</li>
						<li>75002 PARIS</li>
						<li>02.94.23.69.53</li>
				</ul>
				<ul>
						<li><a href="#">Blogs</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Contact</a></li>
				</ul>
				<ul>
						<li><img src="<?php echo(get_template_directory_uri()); ?>/images/white-logo.png" alt="logo"></li>
						<li>&copy; All Rights Reserved 2015</li>
						<?php dynamic_sidebar ('footer'); ?>
				</ul>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
