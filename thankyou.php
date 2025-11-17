<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #088ad2 0%, #005fa3 100%);
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .thankyou-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            max-width: 500px;
        }
        h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            padding: 12px 25px;
            background: #fff;
            color: #088ad2;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }
        a:hover {
            background: #088ad2;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="thankyou-container">
        <h2>✅ Thank you! Your message has been sent successfully.</h2>
        <a href="index.php">Go back to Home</a>
    </div>
</body>
</html>
