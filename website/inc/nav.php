<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Portfolio</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                <?php if (isset($_SESSION['admin'])) : ?>
                    <li class="nav-item"><a class="nav-link" href="messages.php">Messages</a></li>
                    <li class="nav-item"><a class="nav-link" href="create.php">Add-Project</a></li>
                    <li class="nav-item">
                        <a class="btn btn-primary mx-1" href="logout.php">Switch To User</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-light " href="login.php">Switch To Admin</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>