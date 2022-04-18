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
    <header class="d-flex justify-content-center align-items-center">
        <h1>Contact Form</h1>
    </header>
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-6">
                <p>We would love to hear from you. Please fill out your details and your message below, and we will get back to you as soon as possible:</p>
                <p class="desc-required">Required fields denoted by an asterisk (<span class="required">*</span>).</p>
            </div>
            <form action="scripts/backend.php" method="get" class="row justify-content-center needs-validation" novalidate>
                <div class="col-sm-12 col-md-8 col-lg-6 pb-3">
                    <label class="form-label" for="firstname">First Name<span class="required">*</span></label>
                    <input type="text" id="firstname" name="firstname" class="form-control" required>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please enter a first name.</div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-6 pb-3">
                    <label class="form-label" for="lastname">Last Name<span class="required">*</span></label>
                    <input type="text" id="lastname" name="lastname" class="form-control" required>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please enter a last name.</div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-6 pb-3">
                    <label class="form-label" for="email">Email Address<span class="required">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-6 pb-3">
                    <label class="form-label" for="phone">Contact Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control">
                </div>

                <div class="col-sm-12 col-md-8 col-lg-6 pb-3">
                    <label class="form-label" for="message">Message<span class="required">*</span></label>
                    <textarea id="message" name="message" class="form-control" placeholder="Type your message here..." rows="5"></textarea>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please type your message here.</div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-6 p-5 mb-4">
                    <input type="submit" value="Submit" class="button">
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--    example script below-->
<!--    <script src="scripts/validator.js"></script>-->
</body>
</html>
