
<?php site_url(); ?>

<?php the_title(); ?>

<?php 
while(have_posts()){

}
?>

<?php the_post(); ?>

<?php echo paginate_links(); ?>