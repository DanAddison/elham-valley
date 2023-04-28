<?php

$posts = get_posts(array(
	'post_type'     => 'cpt_event', // lock it down to this specific post type
	'orderby' => 'meta_value', // We want to organize the posts by event date    
	'meta_key' => 'acf_date_from', // Grab the start date field (stored in YYYY-MM-DD format)
	'order' => 'ASC', // from nearest event to the furthest in the future   
	'posts_per_page' => '12',
	'meta_query' => array( // WordPress has all the results, now, return only the events that have not passed
		array(
			'key' => 'acf_date_to', // Check the end date field
			'value' => date("Y-m-d"), // Set today's date (note the similar format)
			'compare' => '>=', // Return the ones greater than or equal to today's date
			'type' => 'DATE' // Let WordPress know we're working with date
		)
	)
  ));
  
  // then the template will go something like this:
  if( $posts ): ?>      
	  <ul>
			  
		  <?php foreach( $posts as $post ):    
		  setup_postdata( $post )  
		  ?>
  
		  <li>
		  // whatever component goes in here
		  </li>
		  
		  <?php endforeach; ?>
		  
		</ul>
		  
		<?php wp_reset_postdata(); ?>
  
  <?php endif; ?>