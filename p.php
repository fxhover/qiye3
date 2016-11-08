<?php require 'header.php'; ?>


<?php 
	$content = get_content();
	//文档：https://packagist.org/packages/bupt1987/html-parser
	$dom = new \HtmlParser\ParserDom($content);
	$html = $dom->find('div#content', 0)->innerHtml();
	//$html = str_replace(array('http://www.banlimi.com/'), array('/'), $html);
	$html = preg_replace('/href="(\/p.*)"/U', "href=\"/p.php?p=$1\"", $html);
?>

<style>
	.pfavor, .pshare, .pilike, #p_left .fleft {
		display: none;
	}
</style>

<!-- body -->
<div id="content">
	<?php echo $html; ?>
</div>

<?php require 'footer.php'; ?>