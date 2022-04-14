<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <div id="header">
        <header>
            <h1>
            Contact Us!
            </h1>
        </header>
    </div>
    <main>
        <h3>Contact Form</h3>
        <p>Please fill out your details and your message below, and we will get back to you as soon as possible:</p>
        <form action="backend.php" method="get">
            <div>
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname">
            </div>

            <div>
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname">
            </div>
            <div>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="phone">Contact Number</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Type your message here..." rows="5"></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
