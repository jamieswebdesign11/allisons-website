<!--/**
* Template Name: Events Page
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
    <?php if(have_rows('events')): ?>
    <div id="events">
        <div class="events-inner">
            <?php while(have_rows('events')): the_row(); 
            $title = get_sub_field('title'); $dateTime = get_sub_field('date_and_time'); $location = get_sub_field('location'); $description = get_sub_field('description');
            ?>
            <div class="event-box">
                <?php echo $title ? '<h2>'. $title .'</h2>' : ''; ?>
                <?php echo $location ? '<span class="location">Location: '. $location .'</span>' : ''; ?>
                <?php echo $dateTime ? '<span class="date-and-time">Date and Time: '. $dateTime .'</span>' : ''; ?>
                <?php echo $description ? $description : ''; ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php endwhile; endif; get_footer(); ?>
