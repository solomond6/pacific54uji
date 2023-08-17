<?php 
/*
This loop is used in the Archive and in the Home [.php] templates.
*/
?>
<div class="col-md-4" style="display:inline-block;">
  <div class="card mb-4 shadow-sm">

    <?php the_post_thumbnail('medium', ['class' => 'w-100']);    ?>
    
    <div class="card-body">
        <?php if (!get_theme_mod("singlepost_disable_date") ): ?>
          <small class="text-muted"><?php the_date() ?></small>
        <?php endif; ?>
        
        <h2><a class="stretched-link" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <p class="card-text">Name: <?php the_field('name'); ?></p>
        <p class="card-text">Email: <?php the_field('email'); ?></p>
        <p class="card-text">Phone Number: <?php the_field('phone_number'); ?></p>
        <p class="card-text">Message: <?php the_field('message'); ?></p>
        <!--
        <div class="d-flex justify-content-between align-items-center"> 
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
        </div>
        -->
    </div>
  </div>
</div>