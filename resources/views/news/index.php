<?php include_once "menu.php"; ?>
<h2>
    Новости
</h2>
<?php foreach ($news as $item): ?>
<a href="<?=route('news.newsOne',$item['id'])?>"><?=$item['title']?></a><br>
<?php endforeach;?>
