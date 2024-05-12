<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 'homepage.php';
?>

<?php include './partials/header.php' ?>

<!-- Main -->
<div class="container my-5">
    <div class="row">

        <div class="col-9">
            <?php include './pages/' . $page ?>
        </div>

        <?php include './partials/sidebar.php' ?>

    </div>
</div>

<?php include './partials/footer.php' ?>