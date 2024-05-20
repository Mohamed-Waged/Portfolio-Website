<?php include('./inc/head.php'); ?>
<?php include('./database/helpers/messageFunctions.php'); ?>

<?php if (isset($_GET['id'])) :  ?>


    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h2 class="p-3 col text-center mt-5 text-white bg-primary"> Delete Message </h2>
            </div>

            <div class="col-sm-12">
                <h3 class="alert alert-success mt-5 text-center">
                    <?php deleteMessage($_GET['id']); ?>
                    <?php echo "Message Deleted Successfully "; ?>
                    <?php header("refresh:1;url=messages.php");
                    ?>
                </h3>
            </div>
        </div>
    </div>

<?php else : ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="alert alert-danger mt-5 text-center"> Message ID Not Found </h3>
            </div>
        </div>
    </div>
<?php endif;  ?>