<h2><?php echo $post['title']; ?></h2>
<div class="post-body">
    <small class="post-date">
        Posted on: <?php echo $post['created_at'] ?> 
    </small>
    <p>
        <?php echo $post['body'] ?>
    </p>
</div>
<hr>
<?php echo form_open('/posts/delete/'. $post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>