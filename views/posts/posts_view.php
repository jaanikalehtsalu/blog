
<!-- Code for ajax -->
<script type="text/javascript">
    function clickme() {
        $.post("<?=BASE_URL?>welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }

</script>
<div class="container">
    <div class="col-md-12">
        <h1><?=$post['post_subject']?></h1>
        <p><?=$post['post_text']?></p>
        <div>
            <span class="badge badge-success">Posted <?=$post["post_created"]?></span>
            <span class="badge badge-success">By <?=$post["username"]?></span>
            <div class="pull-right">
        </div>
        <hr>
    </div>
</div>

<?foreach ($tags as $tag):?><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>"><span class="label-info" style="background-color: #93de7e"><?=$tag['tag_name']?></span></a><?endforeach?>