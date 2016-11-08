<?php require 'header.php'; ?>


<?php 
	$content = get_content();
	//文档：https://packagist.org/packages/bupt1987/html-parser
	$dom = new \HtmlParser\ParserDom($content);
	$html = $dom->find('div#main', 0)->innerHtml();
	$html = str_replace('http://www.banlimi.com/interviews/archives', "/article.php?p=/interviews/archives", $html);
	//$html = preg_replace('/href="(\/p.*)"/U', "href=\"/p.php?p=$1\"", $html);
?>

<link rel='stylesheet' id='wp-pagenavi-css'  href='http://www.banlimi.com/interviews/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<link rel="stylesheet" href="http://www.banlimi.com/interviews/wp-content/themes/koeme/style.css" type="text/css" media="screen" />


<style>
	.pfavor, .pshare, .pilike, .post_nav, .post-head, #sidebar, #designinfo, #comments {
		display: none;
	}
	.comment {
		float: left;
	}
</style>

<!-- body -->
<div id="main" class="container_16 clearfix">
	<?php echo $html; ?>
</div>

<?php require 'footer.php'; ?>