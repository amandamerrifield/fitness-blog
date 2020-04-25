<div class="container">
    <div class="row jumbotron">
        <div class="col-lg-8">
            <h1 id = "pageTitle"class="mt-4"><?php print strtoupper($post->getExerciseName() )?></h1>
            <hr>
            <p>Posted on <?php print $post->getCreatedAt() ?></p>
            <hr>
            <?php if ($post->hasPhoto()): ?>
            <img class="img-fluid rounded"
                 src="index.php?controller=images&action=read&post_id=<?php print $post->getId() ?>" alt="">
            <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
            <form method="post" action="index.php?controller=images&action=delete&post_id=<?php print $post->getId() ?>">
                <button type="submit">Delete Photo</button>
            </form>
            <?php endif; ?>
            <hr>
            <?php else: ?>
                <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
            <form id="uploader"
                  action="index.php?controller=images&action=upload&post_id=<?php print $post->getId() ?>"
                  class="dropzone"></form>
                <?php endif; ?>
            <?php endif; ?>
            <p> <?php echo htmlspecialchars_decode($post->getDescription(), ENT_QUOTES) ?></p>
                <?php //print nl2br($post->getDescription())?>
            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    Leave a comment
                </a>
            </p>
            <div class="collapse" id="collapseExample">
<!--                <div class="card card-body">-->
                    <?php require_once 'views/Comments/create.php' ?>
<!--                </div>-->
            </div>
        </div>
    </div>
</div>

<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<script>
    Dropzone.options.uploader = {
        init: function() {
            this.on("success", function(file) {
                window.location.href = "index.php?controller=posts&action=bigPost&id=<?php print $post->getId() ?>";
            });
        }
    };
</script>
