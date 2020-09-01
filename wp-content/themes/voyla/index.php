<?php get_header(); ?>
<body <?php body_class() ?> >
<?php get_template_part('hero'); ?>
<div class="posts" <?php post_class() ?> >
  <?php
    while (have_posts()) {
      the_post();


   ?>
    <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author() ?></strong><br/>
                        15th May, 2018
                    </p>
                    <?php
                      echo get_the_tag_list( $before = "<ul class='list-unstyled'><li>", $sep = '</li><li>', $after = '</li></ul>');


                     ?>
                </div>
                <div class="col-md-8">
                    <p>
                        <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail('large',array('class' => 'img-fluid') );
                          }

                         ?>
                    </p>
                    <p>
                      <?php the_content(); ?>
                    </p>

                </div>
            </div>

        </div>
    </div>
    <?php
  }
   ?>
   <?php
       the_posts_pagination( array(
      'screen_reader_text'=>' ',
     	'mid_size'  => 2,
     	'prev_text' => __( 'Back', 'voyla' ),
     	'next_text' => __( 'Onward', 'voyla' ),
     ) );

    ?>


</div>
<?php get_footer(); ?>
