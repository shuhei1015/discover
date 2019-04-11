
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<navbar class="navbar navbar-dark navbar-expand-lg bg-dark">
<h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">			Discover <i class="fas fa-plane" ></i></a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link"></a>
            </li>

        </div>
            </li>
      </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          <?php echo $_SESSION['username']; ?>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      </ul>
    </div>
</navbar>