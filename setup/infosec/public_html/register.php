<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Bootstrap ICONS CDN -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="regstyle.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
</head>

<body>
   <form action="insert.php" method="post">
   <div class="container">
        <div class="row">
            <div class="col-md-7">

            </div>
            <!--Form -->
            <div class="col-md-5 myform ">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left">Registeration Form</h3>
                    </div>
                    <div class="col-md-6">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <label for="name" class="label col-md-2 form-label">Name</label>
                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name or nickname">
                    </div>
                </div>
                <div class="row">
                    <label for="email" class="label col-md-2 form-label">Email</label>
                    <div class="col-md-10">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Enter yYour E-mail....">
                    </div>
                </div>
                <div class="row">
                    <label for="pass" class="label col-md-2 form-label">password</label>
                    <div class="col-md-10">
                        <input type="password" name="pass" class="form-control" id="pass"
                            placeholder="Enter Your password....">
                    </div>
                </div>
                <div class="row">
                    <label for="country" class=" label col-md-2 form-label">Country</label>
                    <div class="col-md-10">
                        <select name="country" id="country" class="form-control">
                            <option>Turkey</option>
                            <option>ABD</option>
                            <option>Italy</option>
                            <option>Spain</option>
                            <option>Germany</option>
                            <option>UK</option>
                            <option>Denmark</option>
                        </select>
                    </div>
                </div>
                    <input class="btn btn-info" type="submit" value='Submit'>
                <a href="#">
                    <div class="btn btn-warning">Close</div>
                </a>

            </div>
        </div>
    </div>
   </form>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>






</body>

</html>
