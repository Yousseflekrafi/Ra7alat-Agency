<?php
session_start();
require('connection.php');

if (isset($_POST['formbtn'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $age = $_POST['age'];
    $cin = $_POST['cin'];
    $gender = $_POST['gender'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $detail = $_POST['appoiDetails'];
    $date = $_POST['prefeDate'];
    $time = $_POST['prefeTime'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $insert = $pdo->prepare("INSERT INTO appointment 
        (firstName, lastName, age, cin, gender, destinationFrom, destinationTo, travelDetails, rdvDate, rdvTime, phone, email) 
        VALUES 
        (:firstName, :lastName, :age, :cin, :gender, :destinationFrom, :destinationTo, :travelDetails, :rdvDate, :rdvTime, :phone, :email)");

    $insert->execute([
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':age' => $age,
        ':cin' => $cin,
        ':gender' => $gender,
        ':destinationFrom' => $from,
        ':destinationTo' => $to,
        ':travelDetails' => $detail,
        ':rdvDate' => $date,
        ':rdvTime' => $time,
        ':phone' => $phone,
        ':email' => $email,
    ]);

    // Redirect to receipt page
    header("Location: bookReceipt.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book your travel appointment with RA7ALAT Agency. Schedule a consultation for Hajj, Umrah, vacations, and business trips.">
    <link rel="webpage icon" href="images/RA7ALAT.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>RA7ALAT Agency - Book Travel Appointment</title>
    <link rel="stylesheet" href="css/rdv.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/RA7ALAT.png" alt="RA7ALAT" onerror="this.style.display='none'">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#appointment">Book Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="review.php">Reviews</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Book Your Travel Appointment</h1>
                <p class="hero-subtitle">Schedule a consultation with our travel experts to plan your perfect journey. We're here to make your travel dreams come true.</p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Info Cards -->
            <div class="info-cards">
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="info-card-title">Easy Scheduling</h3>
                    <p class="info-card-text">Book your appointment online and choose a time that works best for you</p>
                </div>
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="info-card-title">Expert Consultation</h3>
                    <p class="info-card-text">Meet with our experienced travel advisors for personalized recommendations</p>
                </div>
                <div class="info-card">
                    <div class="info-card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="info-card-title">Free Consultation</h3>
                    <p class="info-card-text">No obligation consultation to discuss your travel needs and preferences</p>
                </div>
            </div>

            <!-- Appointment Form -->
            <div class="appointment-container">
                <div class="form-header">
                    <h2>Schedule Your Consultation</h2>
                    <p>Fill out the form below and we'll get back to you within 24 hours</p>
                </div>

                <div class="form-body">
                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i>
                        <strong>Appointment Booked Successfully!</strong>
                        <p>Thank you for choosing RA7ALAT Agency. We'll contact you soon to confirm your appointment details.</p>
                    </div>

                    <form id="appointmentForm" method="post" novalidate>
                        <!-- Personal Information Section -->
                        <div class="form-section">
                            <h3 class="section-title">
                                <i class="fas fa-user"></i>
                                Personal Information
                            </h3>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName" class="form-label">First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="firstName" name="fName" required>
                                    <div class="error-message" id="firstNameError">Please enter your first name</div>
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="form-label">Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="lastName" name="lName" required>
                                    <div class="error-message" id="lastNameError">Please enter your last name</div>
                                </div>
                            </div>

                            <div class="form-row-3">
                                <div class="form-group">
                                    <label for="age" class="form-label">Age <span class="required">*</span></label>
                                    <input type="number" class="form-control" id="age" name="age" min="1" max="120" required>
                                    <div class="error-message" id="ageError">Please enter a valid age</div>
                                </div>
                                <div class="form-group">
                                    <label for="cin" class="form-label">CIN (Identity) <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="cin" name="cin" placeholder="e.g., AB123456" required>
                                    <div class="error-message" id="cinError">Please enter your CIN</div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gender <span class="required">*</span></label>
                                    <div class="gender-options">
                                        <label class="gender-option" for="male">
                                            <input type="radio" id="male" name="gender" value="male" required>
                                            <i class="fas fa-mars"></i>
                                            Male
                                        </label>
                                        <label class="gender-option" for="female">
                                            <input type="radio" id="female" name="gender" value="female" required>
                                            <i class="fas fa-venus"></i>
                                            Female
                                        </label>
                                    </div>
                                    <div class="error-message" id="genderError">Please select your gender</div>
                                </div>
                            </div>
                        </div>

                        <!-- Travel Information Section -->
                        <div class="form-section">
                            <h3 class="section-title">
                                <i class="fas fa-plane"></i>
                                Travel Information
                            </h3>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="from" class="form-label">From (Departure City)</label>
                                    <select class="form-select" id="from" name="from">
                                        <option value="">Select departure city</option>
                                        <option value="casablanca">Casablanca</option>
                                        <option value="rabat">Rabat</option>
                                        <option value="marrakech">Marrakech</option>
                                        <option value="fes">Fes</option>
                                        <option value="tangier">Tangier</option>
                                        <option value="agadir">Agadir</option>
                                        <option value="meknes">Meknes</option>
                                        <option value="oujda">Oujda</option>
                                        <option value="tetouan">Tetouan</option>
                                        <option value="kenitra">Kenitra</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="to" class="form-label">To (Destination)</label>
                                    <select class="form-select" id="to" name="to">
                                        <option value="">Select destination</option>
                                        <optgroup label="Religious Destinations">
                                            <option value="mecca">Mecca (Hajj/Umrah)</option>
                                            <option value="Palestine">Palestine</option>
                                        </optgroup>
                                        <optgroup label="Europe">
                                            <option value="paris">Paris, France</option>
                                            <option value="london">London, UK</option>
                                            <option value="madrid">Madrid, Spain</option>
                                            <option value="rome">Rome, Italy</option>
                                            <option value="berlin">Berlin, Germany</option>
                                            <option value="amsterdam">Amsterdam, Netherlands</option>
                                        </optgroup>
                                        <optgroup label="Middle East & Asia">
                                            <option value="dubai">Dubai, UAE</option>
                                            <option value="istanbul">Istanbul, Turkey</option>
                                            <option value="cairo">Cairo, Egypt</option>
                                            <option value="bangkok">Bangkok, Thailand</option>
                                            <option value="kuala-lumpur">Kuala Lumpur, Malaysia</option>
                                        </optgroup>
                                        <optgroup label="Americas">
                                            <option value="new-york">Boston, USA</option>
                                            <option value="toronto">Toronto, Canada</option>
                                            <option value="montreal">Montreal, Canada</option>
                                        </optgroup>
                                        <option value="other">Other Destination</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Appointment Details Section -->
                        <div class="form-section">
                            <h3 class="section-title">
                                <i class="fas fa-calendar-alt"></i>
                                Appointment Details
                            </h3>
                            
                            <div class="form-group">
                                <label for="appointmentDetails" class="form-label">Tell us about your travel plans</label>
                                <textarea class="form-control" id="appointmentDetails" name="appoiDetails" 
                                         placeholder="Please provide details about:
                                                        • Type of trip (Hajj, Umrah, vacation, business, etc.)
                                                        • Preferred travel dates
                                                        • Number of travelers
                                                        • Budget range
                                                        • Special requirements or preferences
                                                        • Any specific questions you have" 
                            ></textarea>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="preferredDate" class="form-label">Preferred Appointment Date</label>
                                    <input type="date" class="form-control" id="preferredDate" name="prefeDate" min="">
                                </div>
                                <div class="form-group">
                                    <label for="preferredTime" class="form-label">Preferred Time</label>
                                    <select class="form-select" id="preferredTime" name="prefeTime">
                                        <option value="">Select preferred time</option>
                                        <option value="09:00">9:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="14:00">2:00 PM</option>
                                        <option value="15:00">3:00 PM</option>
                                        <option value="16:00">4:00 PM</option>
                                        <option value="17:00">5:00 PM</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+212 6XX XX XX XX" required>
                                <div class="error-message" id="phoneError">Please enter your phone number</div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="your.email@example.com">
                                <div class="error-message" id="emailError">Please enter a valid email address</div>
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="button" class="btn-reset" onclick="resetForm()">
                                <i class="fas fa-undo"></i> Reset Form
                            </button>
                            <button type="submit" name="formbtn" form="appointmentForm" class="btn-submit">
                                <div class="loading"></div>
                                <span class="btn-text">
                                    <i class="fas fa-calendar-check"></i>
                                    Book Appointment
                                </span>
                            </button>
                        </div>
                    </form>
                </div>

                
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="script/rdv.js"></script>
</body>
</html>
