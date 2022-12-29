<?php

get_header('post');

?>
<div class="post-title">
	<h2><?php the_title(); ?></h2>
</div>

<div class="post-content">
	<?php the_content(); ?>
</div>



<?php
get_footer('post');