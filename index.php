<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="webpage icon" href="images/RA7ALAT.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>RA7ALAT Agency</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg menu-main" style="background-color: #f8f9fa;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/RA7ALAT.png" alt="RA7ALAT">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="review.php">Reviews</a>
                    </li>
                </ul>
                <div class="d-flex menu-custombtn align-items-center gap-2">
                    
                    <div class="customlink">
                        <a class="btn btn-primary" href="signIn.php">Sign In</a>
                    </div>
                    <select class="form-select-sm select-no-border languages" aria-label="Language selection">
                        <option selected value="en">English</option>
                        <option value="fr">French</option>
                        <option value="ar">Arabic</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>
</header>

    <main class="mainPage">
        <!-- Discover -->
        <section class="discover">
            <div class="slider">
                <figure></figure>
            </div>
            <div class="exploretheworld">
                <h1 class="text-center title-explore">explore the world with us!</h1>
            </div>
            <div class="searchContainer">
                <h2>Find Your Flight</h2>
                <form>
                    <div class="searchBar my-4">
                        <select>
                            <option>Roundtrip</option>
                            <option>One-way</option>
                            <option>Multi-city</option>
                        </select>
                        <input type="text" placeholder="Leaving from">
                        <input type="text" placeholder="Going to">
                        <input type="date">
                        <select>
                            <option>1 Traveler</option>
                            <option>2 Travelers</option>
                            <option>3+ Travelers</option>
                        </select>
                    </div>
                    <button class="btn">Search</button>
                </form>
            </div>
        </section>
        <div class="seperator"></div>
        <!-- Trips -->
        <section class="packages" id="packages">
            <h1 class="feel">Feel at home wherever you go</h1>
            <div class="seperator"></div>
            <div class="cards">
                <div class="card">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Spain
                    </div>
                    <img src="images/spainBeach.webp" id="Spain" alt="Spain Beach">
                    <div class="card-content">
                        <h2>Spain</h2>
                        <p><i class="fas fa-home me-2"></i>1054 holiday rentals</p>
                        <p>Flight Ticket From <strong>259 MAD</strong></p>
                        <a href="spain.php" class="exploreBtn"><i class="fas fa-plane-departure me-2"></i>Explore</a>
                    </div>
                </div>
                
                <div class="card">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Italy
                    </div>
                    <img src="images/italyCity.jpg" id="Italy" alt="Italy City">
                    <div class="card-content">
                        <h2>Italy</h2>
                        <p><i class="fas fa-home me-2"></i>1794 holiday rentals</p>
                        <p>Flight Ticket From <strong>410 MAD</strong></p>
                        <a href="italy.php" class="exploreBtn"><i class="fas fa-plane-departure me-2"></i>Explore</a>
                    </div>
                </div>
                
                <div class="card">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> United States
                    </div>
                    <img src="images/bridge sf.jpeg" id="Boston" alt="United States">
                    <div class="card-content">
                        <h2>United States</h2>
                        <p><i class="fas fa-home me-2"></i>3945 holiday rentals</p>
                        <p>Flight Ticket From <strong>7,700 MAD</strong></p>
                        <a href="boston.php" class="exploreBtn"><i class="fas fa-plane-departure me-2"></i>Explore</a>
                    </div>
                </div>
                
                <div class="card">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Thailand
                    </div>
                    <img src="images/thailand.jpeg" id="thailand" alt="Thailand">
                    <div class="card-content">
                        <h2>Thailand</h2>
                        <p><i class="fas fa-home me-2"></i>1794 holiday rentals</p>
                        <p>Flight Ticket From <strong>7,292 MAD</strong></p>
                        <a href="thailand.php" class="exploreBtn"><i class="fas fa-plane-departure me-2"></i>Explore</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="seperator"></div>        
        <!-- Best Trips Section -->
        <section class="bestTrip" id="bestTrip">
            <div>
                <h1 class="our">Our best trip</h1>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Saudia Arabia
                    </div>
                    <img src="images/mecca.jpeg" id="Hajj" alt="Mecca">
                    <div class="card-content">
                        <h2>الحج</h2>
                        <p><i class="fas fa-home me-2"></i>6040 holiday rentals</p>
                        <p>Flight Ticket From <strong>5,999 MAD</strong></p>
                        <a href="hejj.php" class="exploreBtn"><i class="fas fa-plane-departure me-2"></i>Explore</a>
                    </div>
                </div>
                
                <div class="card">
                    <div class="location-badge">
                        <i class="fas fa-map-marker-alt"></i> Saudia Arabia
                    </div>
                    <img src="images/hajj.jpeg" id="umrah" alt="Umrah">
                    <div class="card-content">
                        <h2>العمرة</h2>
                        <p><i class="fas fa-home me-2"></i>14,211 holiday rentals</p>
                        <p>Flight Ticket From <strong>4,999 MAD</strong></p>
                        <a href="umrah.php" class="exploreBtn"><i class="fas fa-plane-departure me-2"></i>Explore</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="seperator"></div>
        <!-- Swiss -->
        <section>
            <div class="swissContainer container">
                <div class="row">
                    <div class="col-lg-4 swisstext">
                        <h2>Depressed?</h2>
                        <p>Come to <span>Switzerland</span>!</p>
                    </div>
                    
                    <div class="col-lg-8 swissContent">
                        <div class="swissImages">
                            <div class="image-container">
                                <img src="images/swiss1.jpg" alt="Switzerland landscape">
                                <div class="image-overlay">
                                    <div>
                                        <h3>Beautiful Mountains</h3>
                                        <p>Experience the majestic Alps</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="image-container">
                                <img src="images/swiss4.jpg" alt="Switzerland landscape">
                                <div class="image-overlay">
                                    <div>
                                        <h3>Crystal Lakes</h3>
                                        <p>Discover pristine waters</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="image-container">
                                <img src="images/swiss2.jpg" alt="Switzerland landscape">
                                <div class="image-overlay">
                                    <div>
                                        <h3>Charming Villages</h3>
                                        <p>Explore traditional Swiss life</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="image-container">
                                <img src="images/swiss3.jpg" alt="Switzerland landscape">
                                <div class="image-overlay">
                                    <div>
                                        <h3>Alpine Adventures</h3>
                                        <p>Find your thrill in nature</p>
                                    </div>
                                </div>
                            </div>
                                                
                        </div>
                    </div>
                </div>
            </div>
        
        </section>
        <div class="seperator"></div>
        <!-- Merzouga -->
        <section class="Merzouga">
                <div class="text-center merzougaTitle">
                    <h2>Plan Your Trip to Merzouga</h2>
                </div>
                <div class="merzougaContainer">
                    <div class="merzougaText">
                        <p>Experience the beauty of Merzouga’s golden dunes</p>
                    </div>
                    <div class="merzougaImages">
                        <img src="images/merzouga1.jpg" alt="">
                        <img src="images/merzouga2.jpg" alt="">
                        <img src="images/merzouga.jpg" alt="">
                        <img src="images/merzouga3.jpg" alt="">
                        <a href="swiss.php">Reserve Your Place</a>

                    </div>
                </div>
        </section>
        <div class="seperator"></div>
        <!-- Stay -->
        <section>
            <div class="stayContainer">
                <div class="stay">
                    <h1>Discover Your New Stay</h1>
                </div>
                <div class="stayImages">
                    <div>
                        <img src="images/cavarane.jpg" alt="Caravane">
                        <h3>Caravane</h3>
                    </div>
                    <div>
                        <img src="images/capsule.jpg" alt="Capsules">
                        <h3>Capsules</h3>
                    </div>
                    <div>
                        <img src="images/appartement.png" alt="Appartement">
                        <h3>Appartement</h3>
                    </div>
                    <div>
                        <img src="images/riad.jpg" alt="Riad">
                        <h3>Riad</h3>
                    </div>
                    <div>
                        <img src="images/villa.webp" alt="Villa">
                        <h3>Villa</h3>
                    </div>
                    <div>
                        <img src="images/cottage.jpg" alt="Cottage">
                        <h3>Cottage</h3>
                    </div>
                    <!-- <div>
                        <img src="images/houseboat.webp" alt="Houseboat">
                        <h3>Houseboat</h3>
                    </div> -->
                </div>
            </div>
        </section>
    </main>

    <div class="seperator"></div>
    <!-- application -->
    
    <!-- Footer -->
    <footer class="py-5 text-light" style="background-color: #A9CCE3 ;">
        <div class="container" style="color: #8F7B4E ;font-weight: bolder;">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                        <li class="nav-item mb-2"><a href="#packages" class="nav-link p-0 text-light">Packages</a></li>
                        <li class="nav-item mb-2"><a href="#bestTrip" class="nav-link p-0 text-light">Best Trips</a>
                        </li>
                    </ul>

                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5>About Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-light">About RA7ALAT</a></li>
                        <li class="nav-item mb-2"><a href="work.php" class="nav-link p-0 text-light">How We Work!</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 offset-md-1 mb-3">
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <form>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <input type="email" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" style="background: #ddd;
                            border-radius: 20px;
                            box-shadow: 10px 10px 20px #a3b1c6 , -10px -1px 20px #ffffff;border:none"
                                type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2024 RA7ALAT Agency. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>