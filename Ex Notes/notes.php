<?php
session_start();
if (!isset($_SESSION["array"])) {
    $_SESSION["array"] = array();
}
if (isset($_POST["note"])&&($_POST["note"]!="")) {
    array_push($_SESSION["array"], $_POST["note"]);
}
unset($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cosmo/bootstrap.css" />
    <script src="https://kit.fontawesome.com/ae6d883143.js" crossorigin="anonymous"></script>
    <title>Notes</title>
</head>

<body>
    <form action="" method="post">
        <div class="container p-3 mb-2 bg-light text-dark">
            <div class="row">
                <div class="col-8">
                    <div class="row"></div>
                    <ul><?php
foreach ($_SESSION["array"] as $element) {?>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text"><?=$element?></p>
                            </div>
                        </div>
                        <br>
                        <?php }?>
                    </ul>
                </div>
                <div class="col-4">
                    <label for="note">Note :</label>
                    <input class="form-control" type="text" name="note" id="note" />
                    <br />
                    <br />
                    <input class="btn btn-primary" name="submit" type="submit" value="Add Note">
                </div>
            </div>
        </div>
    </form>
</body>


</html>