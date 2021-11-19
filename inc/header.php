<html>

<head>
    <title>Users Manager Basic</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="public/css/reset.css" />
    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/css/style.css" />
</head>


<body>
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a id="logo">UNITOP</a>
                        <div id="user-login">
                            <p>Xin chào <strong><?php echo $_SESSION['user_login'] ?></strong> (<a href="?page=logout">Thoát</a>)
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul id="main-menu">
                            <li><a href="?page=home">Home</a></li>
                            <li><a href="?page=about">About</a></li>
                            <li><a href="?page=news">News</a></li>
                            <li><a href="?page=product">Product</a></li>
                            <li><a href="?page=course">Course</a></li>
                            <li><a href="?page=contact">Contact</a></li>
                            <li><a href="?page=login">Login</a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
        <!-- end header -->