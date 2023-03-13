<?php
require 'php/connectDB.php';
$dbobj=new CreateDB($dbname='EmployeemanagementDB',$tablename='Employeetable');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>PHP Advanced Crud</title>
</head>

<body>
    <h1 class='bg-primary text-light text-center p-3'>Employee Management System</h1>
    <div class="container">
        <!--Form modal-->
        <?php
            require 'php/form.php';
        ?>
        <div class='row mb-3'>
            <div class="col-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class='input-group-text bg-primary'>
                            <i class="fas fa-search text-light"></i>
                        </span>
                    </div>
                    <input type="text" class='form-control ' placeholder='Search employee...'>
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addemployee">
                    Add
                    New
                    Employee
                </button>
            </div>
        </div>
        <?php
         require 'php/table.php';
         require 'php/profile.php';
       ?>
        <!--  pagination -->
        <nav class='Page navigation example' id='pagination'>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled "><a href="#" class="page-link ">Previous</a></li>
                <li class="page-item active"><a href="#" class="page-link ">1</a></li>
                <li class="page-item "><a href="#" class="page-link ">2</a></li>
                <li class="page-item "><a href="#" class="page-link ">3</a></li>
            </ul>
        </nav>
    </div>

    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js">
    </script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>