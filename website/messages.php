<?php
require_once './inc/head.php';
require_once 'core/sessions.php';
require_once 'core/functions.php';
require_once('database/helpers/messageFunctions.php');

$messages = readAllMessages();
if (!isset($_SESSION['admin'])) {
    redirectPath("login.php");
}
?>


<div class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">

        <?php require_once './inc/nav.php' ?>

        <!-- Page Content-->
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Messages</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col">
                    <?php if (!empty($messages)) : ?>
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone </th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 0 ?>
                                <?php foreach ($messages as $message) : ?>
                                    <tr>
                                        <td><?php echo ++$num;  ?></td>
                                        <td><?php echo $message['name'];  ?></td>
                                        <td><?php echo $message['email'];  ?></td>
                                        <td><?php echo $message['phone'];  ?></td>
                                        <td><?php echo $message['message'];  ?></td>
                                        <td>
                                            <a href="delete-message.php?id=<?php echo $message['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <div class="col-sm-12">
                            <h3 class="alert alert-danger mt-5 text-center"> No Messages Found </h3>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <?php require_once './inc/footer.php' ?>

</div>

<?php require_once './inc/js.php' ?>