<div class="row">
<div class="span12" data-motopress-wrapper-file="category.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Category Archives: <small>Blog</small>
</h1>
 
<ul class="breadcrumb breadcrumb__t"><li><a href="/">Home</a></li><li class="divider"></li><li class="active">Blog</li></ul>  
</section> 
</div>
</div>
<div class="row">
<div class="span8 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-blog.php">
 
<div class="post_wrapper">
<article >
<header class="post-header">
<h2 class="post-title">The Con-tech Concrete Floor Blog</h2>
</header>


<div class="post_content">
<div class="excerpt">
<p>Welcome to the Contech Floor concrete floor Blog, here you will find the latest news and information.</p>
<div class="clear"></div>
</div>

<div class="blog_search">
	<form method="post" action="<?=$this->fuel_blog->url('search')?>">
		<input type="text" name="q" value="" id="q" class="fillin_input" />
		<input type="submit" value="Search" class="search_btn" />
		
		<!-- dummy value. Used so that we can get query strings t00o work if form method equals GET (which by defualt it is not)... needs more then one query string param to work -->
		<input type="hidden" name="x" value="" /> 
		<?php
		if ($this->config->item('csrf_protection')) :
		    $this->security->csrf_set_cookie();
		?>
		    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>"/>
		<?php endif;?>
	</form>
</div>

<?php 
function ellipsis($text, $max=300, $append='&hellip;') {
	if (strlen($text) <= $max) return $text;
	$out = substr($text,0,$max);
	if (strpos($text,' ') === FALSE) return $out.$append;
	return preg_replace('/\w+$/','',$out).$append;
}
?>

<div class="posts left">
	<?=fuel_edit('create', 'Create Post', 'blog/posts')?>
	<?php if (!empty($posts)) : ?>
		<?php foreach($posts as $post) : ?>
		<div class="post">
			<?=fuel_edit($post)?>

			<?=blog_block('post_unpublished', array('post' => $post))?>
		
			<h2><a href="<?=$post->url?>"><?=$post->title?></a></h2> 

			<div class="post_date">
				Published <?=$post->get_date_formatted('F')?> <?=$post->get_date_formatted('d')?>, <?=$post->get_date_formatted('Y')?> 
				by <strong><span class="post_author_name"><?=$post->author_name?></span></strong>
			</div>

			<div class="post_content">
				<?=ellipsis($post->excerpt_formatted);?> 
			</div>
			<div class="post_meta">
				<a href="<?=$post->url?>">Read more &hellip;</a>
				<? //=$post->categories_linked ?> 
			</div>
		</div>
		<div class="clear"></div>
		<?php endforeach; ?>
		
		<div class="view_archives">
			<?php if (!empty($pagination)) : ?><?=$pagination?>  &nbsp;<?php endif; ?>
			Looking for older posts? <a href="<?=blog_url('archives')?>">View our Archives</a>
		</div>
		
	<?php else: ?>
	<div class="no_posts">
		<p>There are no posts available.</p>
	</div>
	<?php endif; ?> 
</div>

 
</article>





</div> </div>
<div class="span4 sidebar" id="sidebar">


<div id="categories-2" class="widget">
<?php $categories = $CI->fuel->blog->get_published_categories(); ?>
<?php if ( ! empty($categories)) : ?>
	<h3>Categories</h3>
	<ul>
		<?php foreach ($categories as $category) : 
		$cat_cnt = $category->posts_count;
		?>
		<?php if (!empty($cat_cnt)) : ?>
		<li>
			<?=fuel_edit($category)?>
			<a href="<?=$category->url?>"><?=$category->name?></a> (<?=$cat_cnt?>)
		</li>
		<?php endif; ?>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
</div>









<?php $archives_by_month = $CI->fuel->blog->get_post_archives(); ?>
<?php if (!empty($archives_by_month)) : ?>
<div id="archives-3" class="widget">
	<h3>Archives</h3>
	<ul>
		<?php foreach($archives_by_month as $month => $archives) : 
			$month_str = date('F Y', strtotime(str_replace('/', '-', $month).'-01'));
			?>
		<li>
			<a href="<?=$this->fuel->blog->url($month)?>"><?=$month_str?></a> (<?=count($archives)?>)
		</li>
		<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>

















 </div>
</div>
</div>
</div>


