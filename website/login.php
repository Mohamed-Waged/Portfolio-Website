<?php
include 'inc/head.php';
include 'inc/nav.php';
include 'core/sessions.php';
include 'core/functions.php';

if (isset($_SESSION['admin'])) {
    redirectPath("messages.php");
}
?>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5 ">
            <h2 class="border p-2  my-2 text-center bg-primary text-light">Login</h2>
            <?php
            if (isset($_SESSION['errors'])) :
                foreach ($_SESSION['errors'] as $error) : ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $error; ?>
                    </div>
            <?php
                endforeach;
                sessionRemove('errors');
            endif;
            ?>
            <form action="handelers/handleLogin.php" method="POST" class="border p-3">
                <div class="form-group p-2 my-1">
                    <label for="email">Email</label>
                    <input type="email" class="form-control " id="email" name="email" value="<?php sessionGet('user', 'email'); ?>">
                </div>
                <div class="form-group p-2 my-1">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mb-3" id="password" name="password" value="<?php sessionGet('user', 'password'); ?>">
                </div>
                <?php sessionRemove('user'); ?>
                <div class="form-group p-2 my-1">
                    <input type="submit" value="Login" class="form-control bg-success">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>