<?php
require_once './inc/head.php';
require_once 'core/sessions.php';
require_once 'core/functions.php';

if (!isset($_SESSION['admin'])) {
    redirectPath("login.php");
}
?>


<div class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">

        <?php require_once './inc/nav.php' ?>

        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Add Project</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                <?php
                            if (isset($_SESSION['success'])) :
                                foreach ($_SESSION['success'] as $success) : ?>
                                    <div class="alert alert-success text-center">
                                        <?php echo $success; ?>
                                    </div>
                            <?php
                                endforeach;
                                sessionRemove('success');
                            endif;
                            ?>
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
                    <form method="POST" action="./handelers/handleProject.php" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Enter Project Name" />
                            <label for="name">Project Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" name="description" id="description" type="text" placeholder="Enter description " />
                            <label for="description">Description</label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputImage">Image</label>
                            <input type="file" name="image" class="form-control mt-2" id="exampleInputImage">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php require_once './inc/footer.php' ?>

</div>

<?php require_once './inc/js.php' ?>