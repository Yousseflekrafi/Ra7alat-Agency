<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="webpage icon" href="images/RA7ALAT.png" type="image/png" >
    <title>Site Maintenance</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #343a40;
            overflow: hidden;
        }
        
        .container {
            text-align: center;
            max-width: 600px;
            padding: 40px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            position: relative;
            z-index: 1;
        }
        
        h1 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #212529;
        }
        
        p {
            font-size: 18px;
            line-height: 1.6;
            color: #6c757d;
            margin-bottom: 24px;
        }
        
        .loader {
            width: 80px;
            height: 4px;
            background-color: #e9ecef;
            margin: 30px auto;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
        }
        
        .loader::after {
            content: '';
            position: absolute;
            width: 40%;
            height: 100%;
            background-color: #4263eb;
            border-radius: 20px;
            top: 0;
            left: -40%;
            animation: loading 1.5s infinite ease-in-out;
        }
        
        .contact {
            font-size: 16px;
            margin-top: 24px;
            color: #868e96;
        }
        
        .contact a {
            color: #4263eb;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        
        .contact a:hover {
            color: #364fc7;
        }
        
        .background-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }
        
        .shape {
            position: absolute;
            opacity: 0.2;
            border-radius: 50%;
        }
        
        .shape1 {
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, #4263eb, #74c0fc);
            top: -150px;
            right: -150px;
        }
        
        .shape2 {
            width: 200px;
            height: 200px;
            background: linear-gradient(45deg, #fa5252, #ff922b);
            bottom: -100px;
            left: -100px;
        }
        
        .shape3 {
            width: 150px;
            height: 150px;
            background: linear-gradient(45deg, #20c997, #82c91e);
            bottom: 100px;
            right: 100px;
        }
        
        @keyframes loading {
            0% {
                left: -40%;
            }
            100% {
                left: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 30px;
                margin: 0 20px;
            }
            
            h1 {
                font-size: 28px;
            }
            
            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="background-shapes">
        <div class="shape shape1"></div>
        <div class="shape shape2"></div>
        <div class="shape shape3"></div>
    </div>
    
    <div class="container">
        <h1>This page is under maintenance</h1>
        <p>We're currently making some improvements to enhance your experience. Please check back soon.</p>
        <div class="loader"></div>
        <p class="contact">Need assistance? <a href="mailto:support@example.com">Contact our support team</a></p>
    </div>
</body>
</html>