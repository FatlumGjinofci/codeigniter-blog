<div class="row">
    <div class="col-md-4 mx-auto">
        <h3 class="text-center"><?php echo $title; ?></h3>

        <?php echo validation_errors(); ?>

        <?php echo form_open('users/register') ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Zip Code</label>
                <input type="text" name="zipcode" id="" class="form-control" placeholder="ZipCode">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" id="" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password2" id="" class="form-control" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Submit</button>
        <?php echo form_close(); ?>
        </div>
    </div>