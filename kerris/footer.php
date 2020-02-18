<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kerris
 */

?>

</div><!-- #content -->

<footer class="footer">
    <div class="footer__content">
        <p>Copyrights © <?php echo date('Y'); ?> by Kerris Group.<br>All rights reserved.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/ovals.svg" alt="">
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>