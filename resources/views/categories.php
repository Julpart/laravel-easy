<?php include_once "menu.php"; ?>
<h2>
    Категории
</h2>
<?php foreach ($categories as $item): ?>
<a href="<?=route('news.newsCategory',$item['id'])?>"><?=$item['name']?></a><br>
<?php endforeach;?>
