<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>AJAX CRUD PROJECT</title>
        <!--bootstrap 4 cdn link-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"
        <!--css link-->
        <link rel="stylesheet" href="style.css">
        <!--jquery cdn link-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--Popper JS-->
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body style="padding-top: 30px">
        <div class="container">
        <!--form area start-->
            <div class="col-lg-8 m-auto">
                <h1 class="text-center text-white bg-secondary rounded"> Insert data using AJAX PHP and MySQL </h1>
                <br>
                <form id="myform" action="insertphp.php" method="POST" class="pr-5 pl-5">
                    <div class="form-group">
                        <label class="font-weight-bold">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
                </form>
            </div>
            <!--form area end-->
            <br><br>
            <!--display area start-->
            <div class="col-lg-8 m-auto">
                <h1 class="text-center text-white bg-dark rounded ">Display Data Using AJAX</h1>
                <br>
<!--                <button id="displaydata" class="btn btn-info"> Display Data </button>-->
                <table class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody id="response">

                    </tbody>
                </table>
            </div>
            <!--form area end-->
        </div>

        <!--AJAX AREA START-->
        <script>
            $(document).ready(function ()
            {

                // insert area
                let form = $('#myform');

                // $('#submit').click(function ()
                // {
                function displaydata()
                {
                    $.ajax({
                        url: form.attr("action"),
                        type: "post",
                        data: $("#myform").serialize(),
                        success: function (data)
                        {
                            console.log(data);
                        }
                    });
                }
                // });

                // display area
                // $("#displaydata").click( function ()
                // {

                displaydata();

                function displaydata()
                {
                    $.ajax({

                        url: "displayajax.php",
                        type: "post",

                        success: function (responsedata)
                        {
                            $("#response").html(responsedata);
                        }
                    });

                }

                // });
            });
        </script>
        <!--AJAX AREA END-->
    </body>
</html>
