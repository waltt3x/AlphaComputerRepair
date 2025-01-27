<?php
/**
 * The template for displaying the footer
 * @subpackage Computer Repair Shop
 * @since 1.0
 * @version 0.1
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		</div>
		<div class="copyright"> 
			<div class="container">
				<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
			</div>
		</div>
	</footer>
	<?php if (get_theme_mod('computer_repair_shop_show_back_totop',true) != ''){ ?>
		<button role="tab" class="back-to-top"><span class="back-to-top-text"><?php echo esc_html('Top', 'computer-repair-shop'); ?></span></button>
	<?php }?>

<?php wp_footer(); ?>
</body>
</html>