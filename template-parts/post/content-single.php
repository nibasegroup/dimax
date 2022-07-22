<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dimax
 */

?>

<?php
\Dimax\Markup::instance()->open('post_content',[
	'tag' => 'article',
	'attr' => [
		'id'    => 'post-' . get_the_ID(),
		'class' => join( ' ', get_post_class( 'post-wrapper', get_the_ID() ) ) ,
	],
	'actions' => true,
]);
?>

<?php the_content(); ?>

<?php \Dimax\Markup::instance()->close('post_content');  ?>
