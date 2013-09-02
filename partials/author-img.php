<?php 
$author_email = get_the_author_meta('email');
?>
<div class="author-photo" style="background-image: url('http://www.gravatar.com/avatar/<?php echo md5($author_email)?>s=128')"></div>