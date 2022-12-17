<?php include "header.php" ?>
<?php include "left_content.php"; ?>
<div class="col-12 col-md-8">
    <div class="card">
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Your password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter Your confirm password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Register" class="btn btn-dark float-end">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
