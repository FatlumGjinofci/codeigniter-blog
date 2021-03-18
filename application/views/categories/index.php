<h3><?= $title ?></h3>

<ul class="list-group">
    <?php foreach($categories as $category): ?>
        <li>
            <a href="<?php echo site_url('/categories/posts/'. $category['id']); ?>">
                <?php echo $category['name']; ?>
            </a>
            <?php if($this->session->userdata('user_id') == $category['user_id']): ?>
                <form class="category-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
                    <input type="submit" value="Delete" class="btn btn-link text-danger">
                </form>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>