
<?php
/*
Template Name: To be deleted

*/

//global $wp_query;
//$the_query = new WP_Query(array(
//    'posts_per_page' => 2,
//    'category_name' => 'pakistan-slug', // this is the category SLUG
//));
//
//
//$posts = get_posts($the_query);
//foreach($posts as $p){
//    echo $p-
//}


//query_posts(array('terms' => 3));
//while(have_posts()){ the_post(); the_title()."<br/>"; }
//    
?>
<ul>
   <?php $args = array( 'posts_per_page' => 5,'post_type'=>array('feature','entertainment','latest','sport','science','world'), 'cat' => 1 );

    $myposts = get_posts( $args );
    //var_dump($myposts);
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endforeach; 
    wp_reset_postdata();


   
 ?>
 </ul>