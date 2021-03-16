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
<a class="btn btn-secondary float-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">
    Edit
</a>
<?php echo form_open('/posts/delete/'. $post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
