<header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0c2340;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/REMAX_logo.png" alt="RE/MAX Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('property.search')}}">Properties</a>
                    </li>
                    <li class="nav-item">
                      <!-- TODO: add route for blog if it's there-->
                        <a class="nav-link" href="#">Blogs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            My Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="myproperties.html">My Properties</a></li>
                            <li><a class="dropdown-item" href="favoriteproperties.html">My Favorite Properties</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.html">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register')}}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>