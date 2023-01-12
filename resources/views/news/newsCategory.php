<?php include_once "menu.php"; ?>
<h2>
    Новости категории <?=$news['name']?>
</h2>
<?php foreach ($news['data'] as $item): ?>
    <a href="<?=route('news.newsOne',$item['id'])?>"><?=$item['title']?></a><br>
<?php endforeach;?>
