<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog website</title>
    <!--Custom style-->
    <link rel="stylesheet" href="./css/style.css">
    <!--iconscout cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--Google Fonts (Montserrat)-->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<section class="form__section">
<div class="container form__section-container">
<h2>Sign up</h2>
<div class="alert__message error">
    <p>This is an error message</p>
</div>
<form action="" enctype="multipart/form-data">
    <input type="text" placeholder="First Name">
    <input type="text" placeholder="Last Name">
    <input type="text" placeholder="User Name">
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Create Password">
    <input type="password" placeholder="Confirm Password">
    <div class="form__control">
       <label for="avatar">User Avatar</label>
       <input type="file" id="avatar">
    </div>
    <button type="submit" class="btn">Sign Up</button>
    <small>Already have an account? <a href="signin.html">Sign In</a></small>

</form>
</div>
</section>
</body>
</html>