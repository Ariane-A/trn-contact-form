<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <div id="header" class="container-fluid">
            <h1>Contact Form</h1>
    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 description">
                    <p>We would love to hear from you. Please fill out your details and your message below, and we will get back to you as soon as possible:</p>
                </div>
                <form action="scripts/backend.php" method="get" class="needs-validation" novalidate>
                    <div class="form-group col-sm-12 col-md-6 col-lg-4 mx-auto">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group col-sm-12 col-md-6 col-lg-4 mx-auto">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group col-sm-12 col-md-6 col-lg-4 mx-auto">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group col-sm-12 col-md-6 col-lg-4 mx-auto">
                        <label for="phone">Contact Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>

                    <div class="form-group col-sm-12 col-md-6 col-lg-4 mx-auto">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Type your message here..." rows="5"></textarea>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mx-auto submit">
                        <input type="submit" value="Submit" class="button">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--    example script below-->
<!--    <script src="scripts/validator.js"></script>-->
</body>
</html>
