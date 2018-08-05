<?php
/**
 * Created by PhpStorm.
 * User: Irfan Ullah
 * Date: 28/11/2017
 * Time: 7:40 AM
 */

 if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary" style="height:300px;">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
<?php endif;
?>