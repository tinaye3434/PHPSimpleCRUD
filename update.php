<?php
include 'partials/header.php';

require __DIR__.'/users.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUsersById($userId);
if (!$user) {
    include "partials/not_found.php";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updateUser($_POST, $userId);
}

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update User <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data"
                  action="">

                <div class="form-group">
                    <label>Name</label>
                    <input name="name" value="<?php echo $user['name'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input name="username" value="<?php echo $user['username'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input name="email" value="<?php echo $user['email'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" value="<?php echo $user['phone'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input name="website" value="<?php echo $user['website'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input name="name" type="file" class="form-control">
                </div>

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>


