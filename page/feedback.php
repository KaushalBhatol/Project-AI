<?php
$page_name = 'Feedback';
$metaDescription = '';
include 'compo/head.php';
include 'compo/Breadcrumbs.php';

$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
    $exists = false;
    if ($exists == false) {
        $sql = "INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES ('$name', '$email', '$feedback')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
    } else {
        $showError = "Passwords do not match";
    }
}
?>

<div class="container my-4">
    <h1 class="text-center">Feedback</h1>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Success!</strong> Your Feedback is submitted.
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" id="username" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="Email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Feedback</label>
            <textarea class="form-control" name="feedback" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary text-center">submit</button>
    </form>
</div>