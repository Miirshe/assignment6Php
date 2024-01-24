<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Success</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Submitted Information</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>POB</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>Sex</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>ParentName</th>
                        <th>ParentPhone</th>
                        <th>Relationship</th>
                        <th>ID</th>
                        <th>Faculty</th>
                        <th>Department</th>
                        <th>Class</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo htmlspecialchars($_GET['name']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['pob']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['dob']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['address']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['sex']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['email']); ?></td>
                        <td> <span> <img class="w-100 h-auto" src="./uploads/<?php echo htmlspecialchars($_GET['profileImage']); ?>" alt=""></span></td>
                        <td><?php echo htmlspecialchars($_GET['parentName']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['parentPhone']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['relationship']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['studentID']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['faculty']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['department']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['className']); ?></td>
                        <td><?php echo htmlspecialchars($_GET['registrationDate']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>