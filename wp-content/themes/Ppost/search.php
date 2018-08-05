<?php get_header(); ?>

<?php $s =  get_search_query();
query_posts(
  array(
          "post_type" => array('entertainment','latest','nl','science','sport','world'),
      's' => $s
  )
);
?> <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul style="list-style-type: none;float: right;"> <?php
                while(have_posts()){
                    the_post(); ?>
                    <li>
                        <h3 style="float: right;"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                    </li>
                <?php } ?> </ul>
        </div>
    </div>
</div>
  <?php


get_footer();
?>