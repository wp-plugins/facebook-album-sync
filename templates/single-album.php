<?php
global $post;

//todo
// -> previous page url is actually just a link to the all albums page which should simply be the url minus the fbasid=xx attached

$previouspageURL  =  isset( $_SERVER['HTTP_REFERER'] )? $_SERVER['HTTP_REFERER']  : '' ;
$shortcode_used = true; // used to test if the album page is called directly via shortcode

 // test if the album page is called via short code  
//  or if the page is called when the user clicks on album link

if ( !isset( $album_id ) ){
	$album_id = get_query_var('fbasid');
	$single_album_shortcode_used = false;
?>

	<p><a href="<?PHP echo $previouspageURL?>"> Back to Albums</a></p>

<?php 	

}

?>

<div id="fbalbumsync">

</div>