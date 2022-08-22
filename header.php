<!doctype html>
<html>


<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>RD test Task</title>

    <?php wp_head() ; ?>

</head>

<body>


    <header>

        <div class="container">
            <div class="row">
                <div class="wrapper">
                    <div class="logo">
                        <?php
    
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }

                         ?>



                    </div>

                    <nav>
                        <?php wp_nav_menu( array(
                                'sort_column' => 'menu_order',
                                'theme_location' => 'header_menu',
                                'menu_class' => 'nav-sub',
                                 
                            ) ); ?>


                    </nav>
                     
                    <i  class="fa fa-bars icon" aria-hidden="true"></i>
                         
                    <!---fa-times--->
                </div>
            </div>



        </div>




    </header>