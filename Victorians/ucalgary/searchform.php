<?php
// Default search form
?>
<div class="card-body">
    <form class="" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="input-group">
        <input class="form-control" placeholder="Search for..." type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>"> 
        <span class="input-group-btn">
          <button type="submit" class="btn btn-default maroon-back"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
</div>


