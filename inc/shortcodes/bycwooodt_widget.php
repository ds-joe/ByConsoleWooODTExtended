<?php
add_shortcode('WooODT_Extended_Widget','function_WooODT_Extended_Widget');

function function_WooODT_Extended_Widget($atts, $content = null)
{
$width=$atts["width"];
?>
<div style="width:<?php echo $width;?>;">
<?php
the_widget( 'byconsolewooodt_widget' );
echo '</div>';
}

?>