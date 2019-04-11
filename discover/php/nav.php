<navbar class="navbar navbar-dark navbar-expand-lg bg-dark">
    <a href="index.php" class="navbar-brand">Discover</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
        <span class="navbar-toggler-icon">Discover</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Discover</a>
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