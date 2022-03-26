<?php
$target_dir = "uploads/";
$name = uniqid(rand(), true) . '.png';
move_uploaded_file($_FILES["cin"]["tmp_name"], "$target_dir/$name");