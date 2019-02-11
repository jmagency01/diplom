<div class="flex-6 .column-container rrs-n">


    <?php foreach ($blog as $article): ?>
    <div class="flex-2 padding" id="line_block">
        <div class="name-cart"><h4><?php echo $article['name_b']?></h4></div>
        <p class="p"><div class="disc-cart"><?php echo $article['disc_b']?></div></p>
        <div><img width="350px" src="<?php echo $article['img_1']?>"> </div><hr>
    </div>
    <?php endforeach; ?>
</div>
