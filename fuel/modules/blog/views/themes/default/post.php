<div class="row">
<div class="span12" data-motopress-wrapper-file="category.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header"><?=$post->title?></small>
</h1>
 
<ul class="breadcrumb breadcrumb__t"><li><a href="/">Home</a></li><li class="divider"></li><li><a href="/blog/categories/blog.html">Blog</a></li><li class="divider"></li><li class="active"><?=$post->title?></li></ul>  
</section> 
</div>
</div>

</div>
</div>








<div class="post">
	<?=fuel_edit($post)?>
	
	<?=blog_block('post_unpublished', array('post' => $post))?>

	<div class="post_author_date">
		<p><br/>Posted on <span class="post_content_date"><?=$post->get_date_formatted()?></span> by <span class="post_author_name"> Con-Tech<?//=$post->author_name?></span></p>
	</div>
	
	<p>
		<?=$post->content_formatted?>
	</p>
	
</div>




	<p><a href="/blog/categories/blog.html">View all blog posts</a></p>

