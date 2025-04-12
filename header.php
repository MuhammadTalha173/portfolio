<!-- /* Make the navbar transparent */
.navbar {
    background-color: transparent !important; /* Removes background color */
    box-shadow: none; /* Optional: Removes shadow */
}

/* Navbar links color (ensure they are visible on top of your background) */
.navbar .nav-link {
    color: white !important; /* Set link color to white */
}

/* Navbar links color on hover */
.navbar .nav-link:hover {
    color: #f8f9fa !important; /* Light color on hover */
}

/* Optional: Adjust navbar logo to appear clear */
.navbar-brand img {
    max-width: 100%; /* Makes sure the logo size adjusts to screen size */
} -->

<body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar-top "style="background-color:#fe6101">
            <div class="container ">
                <div class="d-flex justify-content-between topbar py-7">
                    <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                        <a href="#" class="me-4 text-light"><i class="fas fa-map-marker-alt me-2 text-light"></i>Karachi, Pakistan</a>
                        <a href="#" class="me-4 text-light"><i class="fas fa-phone-alt me-2 text-light"></i>+01234567890</a>
                        <a href="#" class="me-4 text-light"><i class="fas fa-envelope-o me-2 text-light"></i>Example@gmail.com</a>
                    </div>
                    <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                        <div class="search-form">
                            <form method="post" action="index.php">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <input type="search" class="form-control border-0 rounded-pill " name="search-input" value="" placeholder="Search Here" required=""/>
                                        <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search "style="color:#fe6101"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center topbar-icon" >
                        <a href="#" class="me-4"><i class="fab fa-facebook-f text-light"></i></a>
                        <a href="#" class="me-4"><i class="fab fa-twitter text-light"></i></a>
                        <a href="#" class="me-4"><i class="fab fa-instagram text-light"></i></a>
                        <a href="#" class="me-4"><i class="fab fa-linkedin-in text-light"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
