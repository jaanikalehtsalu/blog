
<div class="container">
    <div class="col-md-12">
        <h1><?=$post['post_subject']?></h1>
        <p><?=$post['post_text']?></p>
        <div>
            <span class="badge">Posted <?=$post['post_created']?> by <?=$post['username']?></span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Fluffy</span>
                <span class="label label-danger">Danger</span></div>
        </div>
        <hr>
    </div>
</div>

<?foreach ($tags as $tag):?><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>"><span class="label-info" style="background-color: #5bc0de"><?=$tag['tag_name']?></span></a><?endforeach?>