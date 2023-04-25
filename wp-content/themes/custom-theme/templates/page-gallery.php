<!--/**
* Template Name: Gallery Page
*/-->
<?php get_header(); if(have_posts()): while(have_posts()): the_post(); 
$mainGroup = get_field('main_group'); 
$mainHeading = $mainGroup['main_heading']; $mainContent = $mainGroup['main_content'];
?>
<div class="page-content">
    <div id="main">
        <div class="main-inner">
            <?php echo $mainHeading ? '<h1>'. $mainHeading .'</h1>' : ''; ?>
            <?php echo $mainContent ? $mainContent : ''; ?>
        </div>
    </div>
    <?php if(have_rows('gallery_tabs')): ?>
    <div id="gallery">
        <div class="gallery-inner">
            <div class="gallery-menu">
                <div class="title-tabs flex-display-align">
                    <?php $i=0; while(have_rows('gallery_tabs')): the_row(); $i++; 
                    $heading = get_sub_field('heading'); $id = seo_friendly_url($heading);
                    ?>
                    <?php echo $heading ? '<a class="flex-col tab-link" href="#'. $id .'" data-toggle="tab">'. $heading .'</a>' : ''; ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="gallery-content">
                <div class="tab-content">
                    <?php $i=0; while(have_rows('gallery_tabs')): the_row(); $i++; 
                    $heading = get_sub_field('heading'); $galleryText = get_sub_field('gallery_text'); $id = seo_friendly_url($heading);
                    ?>
                    <div class="tab-pane<?php echo $i==1 ? ' active in' : ''; ?> fade" id="<?php echo $id; ?>">
                        <?php echo $heading ? '<h2>'. $heading .'</h2>' : ''; ?>
                        <?php echo $galleryText ? '<div class="gallery-text">'. $galleryText .'</div>' : ''; ?>
                        <?php if(have_rows('gallery')): while(have_rows('gallery')): the_row(); $columns = get_sub_field('columns'); $items = get_sub_field('gallery_images'); ?>
                        <div class="gallery-images">
                            <?php if(have_rows('gallery_images')): ?>
                            <div class="photo-section">
                                <div class="photo-section-inner">
                                    <div class="gallery flex-display">
                                        <?php
			                            for($i = 0; $i < $columns; $i++){
				                        echo '<div class="flex-col-sm">';
				                        for($j = $i; $j < count($items); $j+= $columns){
				                        $image = $items[$j]['image']; $name = $items[$j]['name']; $size = $items[$j]['size']; $medium = $items[$j]['medium']; $price = $items[$j]['price']; 
				                        if($image):
				                            echo '<div class="gallery-img">';
                                            echo '<a href="'. $image['url'] .'" title="'. $image['title'] .'"><img class="img-responsive center-block" src="'. $image['sizes']['large'] .'" title="'. $image['title'] .'" alt="'. $image['alt'] .'" data-name="'. $name .'" data-size="'. $size .'" data-medium="'. $medium .'" data-price="'. $price .'" />';
                                            echo '</a>';
                                            echo '</div>';
                                        endif;
				                        }
                                        echo '</div>';
			                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php endwhile; endif; get_footer(); ?>
