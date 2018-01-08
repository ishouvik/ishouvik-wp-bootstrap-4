<form class="form-inline mx-0 ml-auto" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="form-control mr-sm-1" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
    <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b4st') ?>" class="btn btn-light my-2 my-sm-0">
        <i class="fa fa-search"></i>
    </button>
</form>