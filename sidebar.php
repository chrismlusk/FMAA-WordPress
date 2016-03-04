<!-- sidebar -->
<aside class="flex-container" role="complementary">
   <div class="flex-item nested announcements-slot">
      <div class="inner-wrap">
         <?php

         query_posts(array(
         'category_name' => 'Up Next'
         ));

         if( have_posts() ) : the_post(); ?>

            <span class="kicker"><?php the_title(); ?></span>
            <h4><?php the_field('event_name'); ?></h4>
            <p><?php the_content(); ?></p>
            <ul class="icon-list">
               <li class="time">
                  <strong><?php echo event_countdown(get_field('event_date')); ?></strong>
               </li>
            </ul>

         <?php else: ?>

            <span class="kicker">Up next</span>
            <h4>No upcoming events</h4>

         <?php endif; ?>

      </div>
   </div>
   <div class="flex-item nested twitter-slot">
      <div class="inner-wrap">
         <span class="kicker">Tweets</span>
         <h4>Friendly dispatches</h4>
         <a class="twitter-timeline" 
            href="https://twitter.com/FriendMadness" 
            data-width="100%" 
            data-widget-id="699703972844740608" 
            data-chrome="transparent nofooter"
            >Tweets by @FriendMadness</a>
      </div>
   </div>
</aside>
<!-- /sidebar -->