<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats</title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>Location</li>
            <li>Menu</li>
        </ul>
    </nav>
    <h1>Cats</h1>

    <div class="image-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cat.png" alt="cat" width="500">
    </div>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

            <h4><?php the_title() ?></h4>
            <p>By <?php the_author() ?> </i> (<?php the_date() ?> </p>
            <p><?php the_excerpt() ?></p>

    <?php
        endwhile;
    endif;
    ?>

    <?php wp_footer() ?>

</body>

</html>