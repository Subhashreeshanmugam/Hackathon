<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&family=Roboto:wght@300&family=Satisfy&display=swap"
        rel="stylesheet">


</head>

<body>
    <section class="form_selection">
        <div class="container form__section-container">
            <h2>Sign Up</h2>
            <div class="alert__message error">
                <p>This is an error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="Username">
                <input type="text" placeholder="Department">
                <input type="text" placeholder="Designation">
                <input type="text" placeholder="Phone Number">
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