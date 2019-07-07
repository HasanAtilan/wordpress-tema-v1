<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } else { ?><?php bloginfo('name'); ?><?php } ?></title>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tasarim.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/hint.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Barcode+39+Extended+Text' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontlar/prox/stylesheet.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontlar/freestyle/stylesheet.css" type="text/css" media="all" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/font-awesome.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/animate/animate.css"/>
<?php for ($ar=1; $ar<=get_option('posts_per_page'); $ar++) { ?>
<script type="text/javascript">
$(function(){
$('.acilyaziacil<?php echo $ar; ?>').click(function () {
$('.kirkharamilergeliyor<?php echo $ar; ?>').slideToggle(); }); });
</script>
<?php } ?>

	<script>
		$(function(){
			
			$(".cepecevre").hide().delay(1000).fadeIn();
			
		});
	</script>

<meta name="language" content="tr-TR" />
<meta name="location" content="türkiye, tr, turkey" />
<meta name="robots" content="all" />

<?php wp_head(); ?>
<?php echo get_option('analytics'); ?>


    <link rel="alternate" href="/atom.xml" title="1v3m&#39;in bloğu" type="application/atom+xml">
  
  
    <link rel="icon" href="/favicon.png" type="image/x-icon">
  
  <!-- font-awesome CSS -->
  <!-- <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="/css/style.css">
  
    
    

</head>

  
  <script src="//instant.page/1.1.0" type="module" integrity="sha384-EwBObn5QAxP8f09iemwAJljc+sU+eUXeL9vSBw1eNmVarwhKk2F9vBEpaN9rsrtp"></script>

  <body class="main-center" itemscope itemtype="http://schema.org/WebPage">
    <header class="header" itemscope itemtype="http://schema.org/WPHeader">
  <div class="slimContent">
    <div class="navbar-header">
      
      <div class="search" id="search-form-wrap">

    <form class="search-form sidebar-form">
        <div class="input-group">
            <input type="text" class="search-form-input form-control" placeholder="Arama" />
            <span class="input-group-btn">
                <button type="submit" class="search-form-submit btn btn-flat" onclick="return false;"><i class="icon icon-search"></i></button>
            </span>
        </div>
    </form>
    <div class="ins-search">
  <div class="ins-search-mask"></div>
  <div class="ins-search-container">
    <div class="ins-input-wrapper">
      <input type="text" class="ins-search-input" placeholder="Bir şeyler yaz..." x-webkit-speech />
      <button type="button" class="close ins-close ins-selectable" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>
    <div class="ins-section-wrapper">
      <div class="ins-section-container"></div>
    </div>
  </div>
</div>


</div>
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav id="main-navbar" class="collapse navbar-collapse" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">
      <ul class="nav navbar-nav main-nav">
        
        <?php 
		
$args = array(

'orderby' => 'name',
'order' => 'ASC',
'style' => 'list',
'show_count' => '0',
'hide_empty' => '1',
'use_desc_for_title' => '0',
'child_of' => '0',
'exclude' => '0',
'exclude_tree' => '',
'include' => '',
'hierarchical' => 1,
'title_li' => null,
'taxonomy' => 'category',
'walker' => null
); ?>
        
        <li class="menu-item menu-item-home">
          <a href="/.">
            
            
            
            <span class="menu-title"><?php wp_list_categories( $args ); ?> 

</span>
          </a>
        </li>
        
        
        
       
        
      </ul>
      
	
    <ul class="social-links">
    	
        <li><a href="https://github.com/" target="_blank" title="Github" data-toggle=tooltip data-placement=top><i class="icon icon-github"></i></a></li>
        
        <li><a href="https://twitter.com/" target="_blank" title="Twitter" data-toggle=tooltip data-placement=top><i class="icon icon-twitter"></i></a></li>
        
        <li><a href="/atom.xml" target="_blank" title="Rss" data-toggle=tooltip data-placement=top><i class="icon icon-rss"></i></a></li>
        
    </ul>

    </nav>
  </div>
</header>

    
    <aside class="sidebar" itemscope itemtype="http://schema.org/WPSideBar">
  <div class="slimContent">
    
      <div class="widget">
    <h3 class="widget-title"><?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } else { ?><?php bloginfo('name'); ?><?php } ?></h3>
    <div class="widget-body">
        <div id="board">
            <div class="content">
                <p>Coded By AsosyalHatun</p>
            </div>
        </div>
    </div>
</div>

    
      
  <div class="widget">
    <h3 class="widget-title">Kategoriler</h3>
    <div class="widget-body">
      <ul class="category-list"><?php echo get_the_category_list(); ?></ul>
    </div>
  </div>


    
      
  <div class="widget">
    <h3 class="widget-title">Etiketler</h3>
    <div class="widget-body">
      <ul class="tag-list"><?php
if(get_the_tag_list()) {
    echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
}
?>  </ul>
    </div>
  </div>


    
      
 

    
      



    
      
  <div class="widget">
    <h3 class="widget-title">Arşiv</h3>
    <div class="widget-body">
      <ul class="recent-post-list list-unstyled no-thumbnail">
        
         
          
         
          
       <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
          
      </ul>
    </div>
  </div>
  <?php
$toplam_yazi = wp_count_posts( 'post' );
$toplam_yazi = $toplam_yazi->publish;
$toplam_kategori = wp_count_terms('category');
$toplam_yorum = get_comment_count();
$toplam_yorum = $toplam_yorum['approved'];

?>
<div class="widget">
    <h3 class="widget-title">İstatistikler</h3>
    <div class="widget-body">
      <ul class="recent-post-list list-unstyled no-thumbnail">
        
         
          <ul class="tag-list">
		  <ul>
		  <li><i class="fa fa-pencil" aria-hidden="true"></i> <a rel="tag">Toplam Yazı: <?php echo $toplam_yazi ?></a></li>
		  </ul>  
		   <ul>
		  <li><i class="fa fa-folder" aria-hidden="true"></i> <a rel="tag">Toplam Kategori: <?php echo $toplam_kategori ?></a></li>
		  </ul>
		   <ul>
		  <li><i class="fa fa-comments" aria-hidden="true"></i> <a rel="tag">Toplam Yorum: <?php echo $toplam_yorum ?></a></li>
		  </ul>
		  </ul>
         
          
      
          
      </ul>
    </div>
  </div>
    
  </div>
</aside>
