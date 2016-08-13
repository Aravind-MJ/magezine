<?php

if ($_POST) {
    include_once 'check_session.php';
    $name = $_POST['magezine'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $description = $_POST['description'];
    
    $count = sizeof($_FILES['images']['name']);

    $db = new SafeDb();
    $db->select('magezines', array(
        'name' => $name,
        'month' => $month,
        'year' => $year,
        'pages' => $count
    ));
    if ($db->count < 1) {
        $status = $db->insert('magezines', array(
            'name' => $name,
            'month' => $month,
            'year' => $year,
            'description'=>$description,
            'pages' => $count
        ));
    } else {
        $_SESSION['error'] = array(
            'message' => 'Magezine already Exist in database',
            'status' => 'danger'
        );
        header('location:add_magezine.php');
        die();
    }
    if (!$status) {
        $_SESSION['error'] = array(
            'message' => 'Database Update Failed',
            'status' => 'danger'
        );
        header('location:add_magezine.php');
        die();
    }

    $target_dir = 'uploads/' . $year . '/';
    if (!is_dir($target_dir)) {
        mkdir($target_dir);
    }
    $target_dir .= $month . '/';
    if (!is_dir($target_dir)) {
        mkdir($target_dir);
    }
    $target_dir .= $name . '/';
    if (!is_dir($target_dir)) {
        mkdir($target_dir);
    }
    for ($i = 0; $i < $count; $i++) {
        $target_file = $target_dir . basename($_FILES["images"]["name"][$i]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["images"]["tmp_name"][$i]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $_SESSION['error'] = array(
                'message' => 'File is not Image - ' . $_FILES['images']['name'][$i],
                'status' => 'danger'
            );
            header('location:add_magezine.php');
            die();
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $_SESSION['error'] = array(
                'message' => 'File already Exist - ' . $_FILES['images']['name'][$i],
                'status' => 'danger'
            );
            header('location:add_magezine.php');
            die();
        }
        // Check file size
        if ($_FILES["images"]["size"][$i] > 500000) {
            $_SESSION['error'] = array(
                'message' => 'File is too Large - ' . $_FILES['images']['name'][$i],
                'status' => 'danger'
            );
            header('location:add_magezine.php');
            die();
        }
        // Allow certain file formats
        if ($imageFileType != "jpg") {
            $_SESSION['error'] = array(
                'message' => 'Only JPG files are allowed - ' . $_FILES['images']['name'][$i],
                'status' => 'danger'
            );
            header('location:add_magezine.php');
            die();
        }
        if (move_uploaded_file($_FILES["images"]["tmp_name"][$i], $target_file)) {

            $_SESSION['error'] = array(
                'message' => 'Files Uploaded Succesfully',
                'status' => 'success'
            );
            header('location:add_magezine.php');
        } else {
            $_SESSION['error'] = array(
                'message' => 'Error Uploading File - ' . $_FILES['images']['name'][$i],
                'status' => 'danger'
            );
            header('location:add_magezine.php');
            die();
        }
    }
}
