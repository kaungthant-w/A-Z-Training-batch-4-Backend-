    <?php include "header.php" ?>
    <?php include "left_content.php"; ?>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Your email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Your password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Login" class="btn btn-dark float-end">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
