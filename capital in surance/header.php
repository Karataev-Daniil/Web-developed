<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="mainmenu">
        <?php wp_nav_menu( array( 'menu' => 'header-menu','container' => 'ul') ); ?>
    </div>
    
