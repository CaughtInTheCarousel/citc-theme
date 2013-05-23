<li class="search">
  <form action="<?php echo home_url( '/' ); ?>" method="get">
    <input id="siteSearch" class="bar" type="text" name="s" value="<?php if(get_search_query() != "") {the_search_query();} else {echo "Search";} ?>" />
  </form>
</li> 
