<? foreach ($posts as $post): ?>
    <div class="span8">
    <h1><a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"><?= $post['post_subject'] ?></a></h1>

    <p><?= $post['post_text'] ?></p>
    <div>
    <span class="badge badge-success">Posted <?=$post["post_created"]?></span>
    <span class="badge badge-success">By <?=$post["username"]?></span>
    <div class="pull-right">

        <? if (!empty($tags[$post['post_id']])) foreach ($tags[$post['post_id']] as $tag): ?>
            <a href="<?= BASE_URL ?>tags/view/<?= $tag['tag_id'] ?>"><span class="label"
         style="background-color: #60de35"><?= $tag['tag_name'] ?></span></a>
        <? endforeach ?>
    </div>
    <hr><? endforeach ?>