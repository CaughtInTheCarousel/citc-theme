<?php 

if (in_category('3')) {
  include (TEMPLATEPATH . '/single-album.php');
}
else { 
  include (TEMPLATEPATH . '/single-feature.php');
}

?>