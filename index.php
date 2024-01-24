<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <form id="studentForm" action="process_form.php" method="post" enctype="multipart/form-data">
            <!-- Personal Information -->
            <h2>Personal Information</h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="pob">POB:</label>
                <input type="text" class="form-control" id="pob" name="pob" required placeholder="Enter Place Of Birth">
            </div>
            <div class="form-group">
                <label for="dop">DOB:</label>
                <input type="date" class="form-control" id="dop" name="dob" required placeholder="Enter Place Of Birth">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required
                    placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="sex">Sex:</label>
                <select name="sex" id="sex" class="form-control">
                    <option value="">--select sex --</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="profileImage">Profile Image:</label>
                <input type="file" class="form-control-file" id="profileImage" name="profileImage" accept="image/*">
            </div>
            <!-- Parent Information -->
            <h2>Parent Information</h2>
            <div class="form-group">
                <label for="parentName">Parent's Name:</label>
                <input type="text" class="form-control" id="parentName" name="parentName" required placeholder="Enter Parent Name">
            </div>
            <div class="form-group">
                <label for="parentName">Parent's Phone :</label>
                <input type="number" class="form-control" id="parentPhone" name="parentPhone" required placeholder="Enter Parent Phone">
            </div>
            <div class="form-group">
                <label for="parentName">Parent's Relationship :</label>
                <input type="text" class="form-control" id="relationship" name="relationship" required placeholder="Enter Parent Relationship">
            </div>
            <!-- Academic Information -->
            <h2>Academic Information</h2>
            <div class="form-group">
                <label for="studentID">Student ID :</label>
                <input type="text" class="form-control" id="studentID" name="studentID" required placeholder="Enter Student ID ">
            </div>
            <div class="form-group">
                <label for="studentID">Faculty Name :</label>
                <input type="text" class="form-control" id="faculty" name="faculty" required placeholder="Enter Faculty Name">
            </div>
            <div class="form-group">
                <label for="studentID">Department Name :</label>
                <input type="text" class="form-control" id="department" name="department" required placeholder="Enter Department Name">
            </div>
            <div class="form-group">
                <label for="studentID">Class Name :</label>
                <input type="text" class="form-control" id="clasName" name="className" required placeholder="Enter Class Name">
            </div>
            <div class="form-group">
                <label for="studentID">Registration Date :</label>
                <input type="date" class="form-control" id="registrationDate" name="registrationDate" required placeholder="Enter Registration Date">
            </div>
            <button type="submit" onclick="validateForm()" class="btn btn-primary">Submit</button>
            <p id="errorMessage"></p>
        </form>
    </div>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var pob = document.getElementById("pob").value;
            var dob = document.getElementById("dob").value;
            var parentName = document.getElementById("parentName").value;
            var parentPhone = document.getElementById("parentPhone").value;
            var studentID = document.getElementById("studentID").value;
            var faculty = document.getElementById("faculty").value;

            var errorMessage = "";

            if (name.trim() === "") {
                errorMessage += "Name is required.\n";
            }

            if (pob.trim() === "") {
                errorMessage += "Place of Birth is required.\n";
            }

            if (dob.trim() === "") {
                errorMessage += "Date of Birth is required.\n";
            }

            if (parentName.trim() === "") {
                errorMessage += "Parent's Name is required.\n";
            }

            if (parentPhone.trim() === "") {
                errorMessage += "Parent's Phone is required.\n";
            }

            if (studentID.trim() === "") {
                errorMessage += "Student ID is required.\n";
            }

            if (faculty.trim() === "") {
                errorMessage += "Faculty Name is required.\n";
            }
            if (errorMessage !== "") {
                alert(errorMessage);
                return false;
            }
            document.getElementById("studentForm").submit();
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>