<?php require_once './inc/head.php' ?>


<div class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <?php require_once './inc/nav.php' ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                                <div class="text-uppercase">Design &middot; Development &middot; Marketing</div>
                            </div>
                            <div class="fs-3 fw-light text-muted">I can help your business to</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Get online and grow fast</span></h1>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.php">Resume</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.php">Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="text-center">
                                <img class="profile-img rounded-circle w-75" src="assets/me.jpg" alt="MohamedWaged" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                            <p class="lead fw-light mb-4 fw-bold">My name is Mohamed Waged Elfeky</p>
                            <p class="text-muted">
                                Graduated From Faculty of Computers & Information menofia university Department Of Computer Science . my primary focus is creating 
                                attractive, easy-to-use interfaces for web applications I have a strong background in software engineering, with particular experience in
                                front-end web development using popular technologies such as HTML, CSS , Bootstrap, jQuery and JavaScript .
                                I also have experience in responsive design principles, ensuring apps appear
                                and work seamlessly across different devices and screen sizes . I also have experience in back-end web 
                                development using PHP , MYSQL , laravel framework . 
                            </p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="https://www.facebook.com/mohammed.elfeky.33" target="_blank"><i class="bi bi-facebook"></i></a>
                                <a class="text-gradient" href="https://wa.me/+201011320299" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                <a class="text-gradient" href="mailto:mohamedwaged1@gmail.com"><i class="bi bi-envelope-fill"></i></a>
                                <a class="text-gradient" href="https://www.linkedin.com/in/mohamedwaged1/" target="_blank"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="https://github.com/Mohamed-Waged" target="_blank"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once './inc/footer.php' ?>

</div>

<?php require_once './inc/js.php' ?>