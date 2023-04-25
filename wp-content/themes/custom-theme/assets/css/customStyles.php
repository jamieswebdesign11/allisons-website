<style>

<?php 
//Social - Icons	
$socialIcons = get_field('social_icons','options');
$socialIconColor = $socialIcons['icon_colors'];
$stackColor = $socialIcons['stack_colors'];
$socialIconHoverColor = $socialIcons['icon_hover_color'];
	
?>
.social-icons .fa-stack-2x{color: <?php echo $stackColor ?>;}
.social-icons .fa-inverse{color: <?php echo $socialIconColor ?>;}
a.social-item:hover .fa-inverse{color: <?php echo $socialIconHoverColor ?>;}

</style>