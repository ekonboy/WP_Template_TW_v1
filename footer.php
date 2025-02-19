</main>
<?php do_action('tailpress_content_end'); ?>

</div>
<?php do_action('tailpress_content_after'); ?>



<style>

.pujaradalt {
	position: relative;
    bottom: -2px;
    display: flex;
    flex-direction: row;
    align-content: center;
    justify-content: center;

}




</style>


<div class="pujaradalt">
	<a href="#content" class="text-gray-500 hover:text-gray-900">
<svg width="175" height="38" viewBox="0 0 175 38" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M44 28C98.5 -9.50001 81 -8 138 28.0001L175 37.7025H0L44 28Z" fill="#D0FF71"/>
<path d="M99.749 28.9878L87.0066 17.1741L74.2511 29L72 26.913L87.0066 13L102 26.9006L99.749 28.9878Z" fill="black" fill-opacity="0.9"/>
</svg>
</a>
</div>


<footer id="colophon" class="site-footer bg-gray-50 py-12" role="contentinfo">


	<img src="/wp-content/uploads/2025/02/descarga.webp" alt="jo mateix fa temps" width="20%" height="auto">

	<?php do_action('tailpress_footer'); ?>

	<div class="container mx-auto text-center text-gray-700 text-xs">
		&copy; <?php echo date_i18n('Y'); ?> gabii rese - Desarrollador web - PHP - Laravel - PrestaShop - WordPress - SEO <br />

		<div class="text-4xl mt-4">
			<em class="ni ni-laravel"></em>
			<em class="ni ni-css3-fill"></em>
			<em class="ni ni-js"></em>
			<em class="ni ni-php"></em>
			<em class="ni ni-bootstrap"></em>
			<em class="ni ni-mailchimp"></em>
			<em class="ni ni-wordpress"></em>
			<em class="ni ni-joomla"></em>
			<em class="ni ni-github-circle"></em>
		</div>

	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>