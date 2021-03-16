<h3><?= $title ?></h3>
<div class="py-4">
    <?php foreach($posts as $post): ?>
        <h4><?php echo $post['title']; ?></h4>
        <small class="post-date">
            Posted on: <?php echo $post['created_at'] ?> 
        </small>
        <p>
            <?php echo $post['body']; ?>
        </p>
        <p>
            <a class="btn btn-secondary" href="<?php echo site_url('/posts/'. $post['slug']); ?>">
                Read More
            </a>
        </p>
    <?php endforeach; ?>
</div>