<div class="list-group">
    <a href="#" class="list-group-item active">
        Tags
    </a>
    <?foreach($tags as $tag):?>
        <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>" class="list-group-item"><span class="badge"><?=$tag['count']?></span>
            <?=$tag['tag_name']?>
        </a>
    <?endforeach?>
</div>