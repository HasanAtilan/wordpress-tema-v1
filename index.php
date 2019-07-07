<?php get_header(); ?>
	<main class="main" role="main">
<?php $i=1; if (have_posts()) : while (have_posts($i<=get_option('posts_per_page'))) : the_post(); ?>


	

  
  <div class="content article-list">
    
      <article class="article article-type-post" itemscope itemtype="http://schema.org/BlogPosting">
  <div class="article-header">
    
  
    <h1 itemprop="name">
      <a class="article-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h1>
  

  </div>
  
  <p class="article-meta">
    <span class="article-date">
    <i class="icon icon-calendar-check"></i>
	<a href="<?php the_permalink() ?>" class="article-date">
	  <time datetime="2019-04-28T09:40:42.000Z" itemprop="datePublished"><?php echo get_the_date(); ?></time>
	</a>
</span>
    
  <span class="article-category">
    <i class="icon icon-folder"></i>
    <a class="article-category-link"><?php the_category('►'); ?></a>
  </span>

    
  <span class="article-tag">
    <i class="icon icon-tags"></i>
	<a class="article-tag-link"><?php the_category(', '); ?></a>
  </span>


    <span class="post-comment"><i class="icon icon-comment"></i> <a href="<?php the_permalink() ?>" class="article-comment-link">Yorumlar</a></span>
    
  </p>
</article>

<?php $i++; endwhile; else: ?>
<?php endif; ?>


</div>

   
</main>

<?php get_footer(); ?>