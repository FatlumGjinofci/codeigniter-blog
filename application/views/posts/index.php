<h3><?= $title ?></h3>
<div class="py-4">
    <?php foreach($posts as $post): ?>
        <h4><?php echo $post['title']; ?></h4>
        <div class="row">
            <div class="col-md-3">
                <img class="img-thumbnail" src="<?php echo site_url(); ?>/assets/images/posts/<?php echo $post['post_image']; ?>" alt="Post Image">
            </div>
            <div class="col-md-9">
                <small class="post-date">
                    Posted on: <?php echo $post['created_at'] ?> in 
                    <strong>
                        <?php echo $post['name']; ?>
                    </strong>
                </small>
                <p>
                    <?php echo word_limiter($post['body'], 60); ?>
                </p>
                <p>
                    <a class="btn btn-secondary" href="<?php echo site_url('/posts/'. $post['slug']); ?>">
                        Read More
                    </a>
                </p>
            </div>
        </div>
        
    <?php endforeach; ?>
</div>