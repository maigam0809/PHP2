<div id="content">
	<div id="left">
		<img src="public/client/images/sd.jpg" alt="">
	</div>
	<div id="right">
		<p class="danhmuc">TIN HOẠT ĐỘNG</p>
		<?php foreach($news as $item): ?>
		<div class="tin">
			<h3 class="tieude"><a href="news&action=detail&id=<?=$item->id?>"><?=$item->title?></a></h3>
			<img src="public/client/images/<?=$item->image?>" alt="">
			<p class="ndvt"><?=$item->intro?></p>
		</div>
		<?php endforeach;?>
	</div>
</div>