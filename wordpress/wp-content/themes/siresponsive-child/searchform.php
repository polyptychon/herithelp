<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>" >
<span class="field">
    <input type="text" class="search input" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder=" <?php printf( __( 'Search', 'slresponsive' )); ?>"/>
</span>
</form>