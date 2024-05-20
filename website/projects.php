<?php
require_once './inc/head.php';
require_once('database/helpers/projectFunctions.php');

$projects = readAllProjects();


?>

<div class="d-flex flex-column bg-light">
    <main class="flex-shrink-0">
        <?php require_once './inc/nav.php' ?>
        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card -->
                        <?php if (!empty($projects)) : ?>
                            <?php foreach ($projects as $project) : ?>
                                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                    <div class="card-body p-0">
                                        <div class="d-flex align-items-center">
                                            <div class="p-5">
                                                <h2 class="fw-bolder">
                                                    <?php echo $project['name']; ?>
                                                </h2>
                                                <p>
                                                    <?php echo $project['description']; ?>
                                                </p>
                                            </div>
                                            <img class="img-fluid" style="width: 250px ; height:250px" src="<?php echo "./assets/{$project['image']}" ?>" alt="..." />
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <div class="col-sm-12">
                                <h3 class="alert alert-danger mt-5 text-center"> No Projects Found </h3>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <?php require_once './inc/footer.php' ?>

</div>

<?php require_once './inc/js.php' ?>