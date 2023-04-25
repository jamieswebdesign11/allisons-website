<!--/**
* Template Name: About Page
*/-->
<?php get_header(); if(have_posts()): while(have_posts()): the_post(); 
$bannerGroup = get_field('banner_group');
$bannerType = $bannerGroup['banner_type']; $bannerImage = $bannerGroup['banner_image']; $bannerVidFile = $bannerGroup['banner_video_file']; $bannerVidEmbed = $bannerGroup['banner_video_embed']; $embedType = $bannerVidEmbed['embed_type']; $youtubeEmbed = $bannerVidEmbed['youtube_embed']; $vimeoEmbed = $bannerVidEmbed['vimeo_embed'];
$caption = $bannerGroup['caption'];
$mainGroup = get_field('main_group'); 
$mainHeading = $mainGroup['main_heading']; $mainContent = $mainGroup['main_content'];
?>
<div id="banner">
    <div class="banner-inner">
        <?php if($bannerType == 'Image'): ?>
        <?php echo $bannerImage ? '<img class="banner-img img-responsive parallax-file-item" src="'. $bannerImage['url'] .'" title="'. $bannerImage['title'] .'" alt="'. $bannerImage['alt'] .'">' : ''; ?>
        <?php elseif($bannerType == 'Video File'): ?>
        <?php echo $bannerVidFile ? '<div class="banner-video"><video class="parallax-file-item parallax-video" autoplay muted loop playsinline><source src="'. $bannerVidFile['url'] .'" type="video/mp4" /></video></div>' : ''; ?>
        <?php elseif($bannerType == 'Video Embed'): ?>
        <?php if($embedType == 'YouTube'): ?>
        <?php echo $youtubeEmbed ? '<div class="youtube-banner-video"><iframe class="parallax-embed-item youtube-parallax-video" src="https://www.youtube.com/embed/'. $youtubeEmbed .'?rel=0;&controls=0&autoplay=1&mute=1&loop=1&playlist='. $youtubeEmbed .'" frameborder="0" allowfullscreen include></iframe></div>' : ''; ?>
        <?php elseif($embedType == 'Vimeo'): ?>
        <?php echo $vimeoEmbed ? '<div class="vimeo-banner-video"><iframe class="parallax-embed-item vimeo-parallax-video" src="https://player.vimeo.com/video/'. $vimeoEmbed .'?background=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>' : ''; ?>
        <?php endif; ?>
        <?php elseif($bannerType == 'Image Slider'): ?>
        <?php if(have_rows('banner_group')): while(have_rows('banner_group')): the_row();
        if(have_rows('slider')): ?>
        <div id="carousel-slider" class="carousel fade" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i=0; while(have_rows('slider')): the_row(); $i++;
                $image = get_sub_field('image');    
                ?>
                <?php echo $image ? '<div class="'. ($i==1 ? 'item active' : 'item') .'"><div class="slider-img-container"><img class="slider-img" src="'. $image['url'] .'" alt="'. $image['alt'] .'" title="'. $image['title'] .'"></div></div>' : ''; ?>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; endwhile; endif; ?>
        <?php endif; ?>
        <?php echo $caption ? '<div class="caption">'. $caption .'</div>' : ''; ?>
    </div>
</div>
<div class="page-content">
    <div id="main">
        <div class="main-inner">
            <?php echo $mainHeading ? '<h1>'. $mainHeading .'</h1>' : ''; ?>
            <?php echo $mainContent ? $mainContent : ''; ?>
        </div>
    </div>
</div>
<?php endwhile; endif; get_footer(); ?>
