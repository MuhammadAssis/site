<!DOCTYPE HTML>

<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.css" />
<link rel="stylesheet" href="assets/css/app.css" />
</head>

<nav class="navbar_padding navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid head_container">
    <a class="navbar-brand" href="#"><img src="assets/img/logo-blue.svg" alt="" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="float-right collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
            <button class="btn btn-primary my-2 my-sm-0 signup_btn" type="submit">Sign up and get $10</button>
        </form>
        <ul class="navbar-nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">KOR</a></li>
        </ul>
    </div>
    </div>
</nav>