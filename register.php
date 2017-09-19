<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        * {
            line-height: 1.2;
            margin: 0;
        }

        html {
            color: #888;
            display: table;
            font-family: sans-serif;
            height: 100%;
            text-align: center;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
        }

        h1 {
            color: #555;
            font-size: 2em;
            font-weight: 400;
        }

        p {
            margin: 0 auto;
            width: 280px;
        }

        @media only screen and (max-width: 280px) {

            body, p {
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
                margin: 0 0 0.3em;
            }

        }

    </style>

</head>

<body>
<div class="container">

    <form action="phpdebug.php" method="POST">

        <div class="form-group">

             <input class="form-control" id="username" name="b"
                       placeholder="User Name" type="text" required="true">
        </div>
        <div class="form-group">
             <input class="form-control" id="password" name="p"
                     placeholder="Password" type="password" required="true">
        </div>
        <div class="form-group">
              <input class="btn btn-primary" type="submit" id="goButton" name="action" value="Login" ></input>
        </div>

 </div>

        <br>
    </form>



</div>
</body>





</html>
