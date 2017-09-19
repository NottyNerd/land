<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Georgia Southern University">
    <meta name="google-site-verification" content="05mIT9ftUnS7p8gYv9YqNeKhPMcfH1aDch-XlDgylYA">
    <meta name="description" content="MyGeorgiaSouthern is the University's portal for students, faculty and staff">
    <meta name="mobile-web-app-capable" content="yes">

    <title>IT 5236G</title>
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="icon" sizes="192x192" href="icon-192x192.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="/css/styles.min.css">


    <script>
        jQuery(document).ready(function($){
            $('img').addClass('img-responsive');
        });
    </script>
</head>

<body>
<form id='login' action='Linker.php' method='post' accept-charset='UTF-8'>
    <fieldset >
        <legend>Login</legend>

        <label for='username' >UserName*:</label>
        <input type='text' name='username' id='username'  maxlength="50" />
        <label for='password' >Password*:</label>
        <input type='password' name='password' id='password' maxlength="50" />
        <input type='submit' name='Submit' value='Submit' />
    </fieldset>
</form>
</body>
</html>