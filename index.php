<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Php-ajax-crud</title>
</head>
<style>
    .active{
        background-color: lightseagreen;
        color: white;
    }
</style>
<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <h2 class="text-center text-white p-5">Php Crud With Ajax</h2>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3> student ( <span id="total-count"></span> ) </h3>
                    <button class="btn btn-success" data-toggle="modal" data-target="#addStudent">
                        Add student
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="d-flex justify-content-end my-4">
            <input type="text" name="search" id="search" placeholder="Searching Here...." class="form-control w-25 form-control-lg">
        </div>
        <div id="load-data"></div>
    </div>

    <!-- <div class="container my-1">
        <div class="pagination">
            <a href="" class="btn btn-default border active">1</a>
            <a href="" class="btn btn-default border">2</a>
            <a href="" class="btn btn-default border">3</a>
            <a href="" class="btn btn-default border">4</a>
        </div>
    </div> -->
    <div class="modal fade" id="addStudent">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form action="" id="form-data">

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Enter Username</label>
                            <input type="text" name="username" id="username" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label for="">Enter Age</label>
                            <input type="number" name="age" id="age" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                            <label for="">Enter City</label>
                            <input type="text" name="country" id="country" class="form-control form-control-lg">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" id="save" class="btn btn-success">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- update model data -->
    <div class="modal fade" id="editStudent">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update student </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form action="" id="update-data">
                    <div id="edit-data"></div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" id="update" class="btn btn-success">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/app.js"></script>
</body>

</html>