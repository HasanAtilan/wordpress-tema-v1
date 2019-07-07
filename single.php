<?php get_header(); ?>




	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<main class="main" role="main">
  <div class="content">
  <article id="<?php the_permalink() ?>" class="article article-type-post" itemscope itemtype="http://schema.org/BlogPosting">
    
    <div class="article-header">
      
        
  
    <h1 class="article-title" itemprop="name">
      <?php the_title(); ?>
    </h1>
  

      
      <div class="article-meta">
        <span class="article-date">
    <i class="icon icon-calendar-check"></i>
	<a href="<?php the_permalink() ?>" class="article-date">
	  <time datetime="<?php echo get_the_date(); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
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
        
      </div>
    </div>
    <div class="article-entry markdown-body" itemprop="articleBody">
      
<figure class="highlight php">
    <table>
        <tr>
            <td class="gutter"><pre><span class="line"></span></pre></td>
            <td class="code"><pre><span class="line"><span class="meta"><?php the_content();?></span><br></pre></td>
        </tr>
    </table>
</figure>
    
  </ul>
</blockquote>


    </div>
  </article>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>