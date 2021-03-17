<h2><?php echo $post['title']; ?></h2>
<div class="post-body">
    <small class="post-date">
        Posted on: <?php echo $post['created_at'] ?> 
    </small>
    <img class="img-thumbnail" src="<?php echo site_url(); ?>/assets/images/posts/<?php echo $post['post_image']; ?>" alt="Post Image">
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
<h3>Comments</h3>
    <?php if($comments): ?>
        <?php foreach($comments as $comment): ?>
            <div class="well"> 
                <h6><?php echo $comment['body']; ?> 
                    [by <strong><?php echo $comment['name']; ?></strong>]
                </h6>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No Comments</p>
    <?php endif; ?>
<h3>Add Comment</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('comments/create/'.$post['id']); ?>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Body</label>
        <textarea type="text" name="body" class="form-control" id="">
        </textarea>
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
    <button type="submit" class="btn btn-primary">
        Submit
    </button>
</form>