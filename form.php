<?php
    $headingText = "Welcome!";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="navbar">
        <h5><?php echo $headingText; ?></h5>
        <div class="quote">
            <blockquote>"Great things are not done by impulse, but by a series of small things brought together." </blockquote>
        </div>
    </div>
    
    <div class="forms-section">
        <h2>Submit Your Information</h2>
        <form action="index.php" method="GET" id="user-form">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>


            <label for="method">Choose Submission Method:</label><br>
            <select id="method" name="method" onchange="changeFormMethod()">
                <option value="GET">GET</option>
                <option value="POST">POST</option>
            </select><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <footer>
        <button id="back-to-top">Back to Top</button>
    </footer>

    <script>
        document.getElementById('back-to-top').addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });


        function changeFormMethod() {
            const form = document.getElementById('user-form');
            const method = document.getElementById('method').value;
            form.method = method;
        }
    </script>
</body>

</html>

