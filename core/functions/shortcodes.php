<?php 
function youtubes_shortcode( $atts ) {
    $video = shortcode_atts( array(
        'id' => 'world'
     ), $atts );
  
    return '
    <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/'.$video['id'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    ';
}
add_shortcode( 'youtube', 'youtubes_shortcode' );
