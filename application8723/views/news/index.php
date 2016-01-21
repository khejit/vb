<!--
<?php /*foreach ($news as $news_item): */?>

    <h3><?php /*echo $news_item['title']; */?></h3>
    <div class="main">
        <?php /*echo $news_item['text']; */?>
    </div>
    <p><a href="<?php /*echo site_url('news/'.$news_item['slug']); */?>">View article</a></p>

<?php /*endforeach; */?>

-->

{news}
	<h3>{title}</h3>
	<div class="main">
		{text}
	</div>
	<p><a href="http://localhost/codeigniter_tut/news/{slug}">View article</a></p>
{/news}