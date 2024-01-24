<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST['name']) && !empty($_POST['pob']) && !empty($_POST['dob']) && !empty($_POST['address'])
        && !empty($_FILES['profileImage']['name']) && !empty($_POST['sex']) && !empty($_POST['email'])
        && !empty($_POST['parentName']) && !empty($_POST['parentPhone'])  && !empty($_POST['relationship'])
        && !empty($_POST['studentID']) && !empty($_POST['faculty']) && !empty($_POST['department']) &&
        !empty($_POST['className']) && !empty($_POST['registrationDate'])
    ) {
        $allowedFormats = ['jpg', 'jpeg', 'png', 'gif'];
        $name_ext = explode(".",$_FILES['profileImage']['name']);
        $extension = strtolower(end(($name_ext)));
        $name = $_POST['name'];
        $pob = $_POST['pob'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $profileImage = $_FILES['profileImage']['name'];
        $sex = $_POST['sex'];
        $email = $_POST['email'];
        $parentName = $_POST['parentName'];
        $parentPhone = $_POST['parentPhone'];
        $relationship = $_POST['relationship'];
        $studentID = $_POST['studentID'];
        $faculty = $_POST['faculty'];
        $department = $_POST['department'];
        $className = $_POST['className'];
        $registrationDate = $_POST['registrationDate'];

        if (in_array($extension, $allowedFormats)) {
            move_uploaded_file($_FILES['profileImage']['tmp_name'],'./uploads/'.$_FILES['profileImage']['name']);
            header("Location: tabular_process.php?name=$name&pob=$pob&dob=$dob&address=$address&sex=$sex&email=$email&profileImage=$profileImage&parentName=$parentName" .
                "&parentPhone=$parentPhone&relationship=$relationship&studentID=$studentID&faculty=$faculty&department=$department" .
                "&className=$className&registrationDate=$registrationDate");
            exit();
        } else {
            header("Location: index.html?message=Invalid file format for profile image. Please upload a JPG, JPEG, PNG, or GIF file.");
            exit();
        }
    } else {
        $message = 'Please enter required information';
        header("Location: index.php?message=$message");
        exit();
    }
}
