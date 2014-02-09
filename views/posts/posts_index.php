<?foreach( $posts as $post):?>
    <div class="container">
        <div class="col-md-12">
            <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>
            <p><?=$post['post_text']?></p>
            <div>
                <span class="badge">Posted <?=$post['post_created']?></span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span></div>
            </div>
            <hr>
        </div>
    </div>
<?endforeach?>