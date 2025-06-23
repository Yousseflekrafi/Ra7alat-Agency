<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="webpage icon" href="images/RA7ALAT.png">
    <title>RA7ALAT Agency:Reviews!</title>
    <style>
        /* Section container */
.review-submission {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    color: #2c3e50;
}

/* Heading styles */
.review-submission h2 {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #1a1a1a;
}

.review-submission p {
    font-size: 1rem;
    margin-bottom: 30px;
    color: #555;
}

/* Form styles */
form {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    margin-bottom: 40px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 1rem;
    transition: border 0.3s ease;
}

input[type="text"]:focus,
textarea:focus {
    border-color: #007bff;
    outline: none;
}

/* Submit button */
.submit-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background-color: #0056b3;
}

/* Review display cards */
.review-card {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    padding: 20px;
    margin-bottom: 20px;
    transition: transform 0.2s ease;
}

.review-card:hover {
    transform: scale(1.01);
}

.customer-details h2 {
    margin: 0 0 8px;
    font-size: 1.3rem;
    color: #333;
}

.customer-details p {
    margin: 0;
    font-size: 1rem;
    color: #666;
}

.review-card p {
    font-size: 1rem;
    margin-top: 10px;
    color: #444;
    line-height: 1.5;
}

.menu-main {
    background-color: #f8f9fa;
    padding: 12px 0;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.navbar-brand img {
    max-height: 50px;
}


/* Toggler Icon */
.navbar-toggler {
    border: none;
    outline: invert;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' ... "); /* optional, default bootstrap style */
}

/* Responsive adjustments (optional) */
@media (max-width: 768px) {
    .navbar-nav {
        text-align: center;
    }

    .navbar-nav .nav-link {
        padding: 10px;
    }
}


    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg  menu-main" style="background-color: #f8f9fa;">
            <div class="container">
                <a class="navbar-brand" href="index.php">
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
                            <a class="nav-link active" aria-current="page" href="index.php">Back To Home Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
 
    <section class="review-submission">
        <h2>We'd Love to Hear Your Thoughts!</h2>
        <p>Your feedback helps us improve. Please share your experience with us!</p>
        <form action="review.php" method="post">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="Name" placeholder="Your Name" required>
            </div>
    
            <div class="form-group">
                <label for="destination">Your Destination</label>
                <input type="text" id="destination" name="Destination" placeholder="Where did you travel?" required>
            </div>
    
            <div class="form-group">
                <label for="review">Your Review</label>
                <textarea id="review" name="Review" placeholder="Share with us your review.." rows="5" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-button">Save</button>
            </div>
        </form>
        <br><br><br>
        <h2>Reviews </h2>
        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="review-card">
            <div class="customer-info">
                <div class="customer-details">
                    <h2><?php echo $row['name'];?></h2>
                    <p><strong>Destination:</strong><?php echo $row['destination'];?> </p>
                </div>
                <p><?php echo $row['review'];?></p>
            </div>
        </div>
        <?php }?>
    </section>
    <div class="seperator"></div>
    <footer class="py-5 text-light" style="background-color: #A9CCE3 ;">
        <div class="container" style="color: #8F7B4E ;font-weight: bolder;">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                        <li class="nav-item mb-2"><a href="#packages" class="nav-link p-0 text-light">Packages</a></li>
                        <li class="nav-item mb-2"><a href="#bestTrip" class="nav-link p-0 text-light">Best Trips</a></li>
                        <li class="nav-item mb-2"><a href="review.html" class="nav-link p-0 text-light">Review</a></li>
                    </ul>
                    
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <h5>About RA7ALAT</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="about.html" class="nav-link p-0 text-light">About Us</a></li>
                        <li class="nav-item mb-2"><a href="work.html" class="nav-link p-0 text-light">How We Work!</a></li>
                        <li class="nav-item mb-2"><a href="about.html" target="_blank" class="nav-link p-0 text-light">Contact</a></li>
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
                            box-shadow: 10px 10px 20px #a3b1c6 , -10px -1px 20px #ffffff;border:none" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
    
            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2024 RA7ALAT Agency. All rights reserved.</p>
            </div>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
