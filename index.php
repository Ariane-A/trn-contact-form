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
<?php session_start(); ?>
<?php if (isset($_SESSION['error']) && $_SESSION['error'] === true): ?>
    <div class="alert alert-danger" role="alert">
        <h2>Error</h2>
        <?php if (isset($_SESSION['errorMessage'])): ?>
            <p><?= $_SESSION['errorMessage']; ?></p>
            <?php unset($_SESSION['errorMessage']); ?>
        <?php endif; ?>
        <?php if (isset($_SESSION['fieldErrors'])): ?>
            <p>There were errors with the following fields:</p>
            <ul>
                <?php foreach($_SESSION['fieldErrors'] as $fieldError): ?>
                    <li><?= $fieldError; ?></li>
                <?php endforeach; ?>
            </ul>
            <?php unset($_SESSION['fieldErrors']); ?>
        <?php endif; ?>
        <?php
            $submittedFields = $_SESSION['submittedFields'];
            unset($_SESSION['submittedFields']);
            unset($_SESSION['error']);
        ?>
    </div>
<?php endif; ?>
<?php if (isset($_SESSION['success']) && $_SESSION['success'] === true): ?>
    <div class="alert alert-success" role="alert">
        <h2>Success</h2>
        <p>Thank you for your submission.</p>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<!--connecting to database-->
<?php
    $unix_socket = '/Applications/MAMP/tmp/mysql/mysql.sock';
    $db   = 'trn-contact-form';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8mb4';
    $dsn = "mysql:unix_socket=$unix_socket;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo 'connected to server';
    } catch (\PDOException $e) {
        echo 'Connection failed' . $e->getMessage();
    }
//
//    // Insert one row
//
//        $insert = "INSERT INTO query VALUES (23, 'Thomas', 'Green', 'thomas.green@gmail.com', '07795214556', 'I urgently need someone to contact me as soon as possible')";
//        $stmt = $pdo->prepare($insert);
//        $stmt->execute();
//
//    // Insert Multiple Rows
//
//    $data = [
//        [24, 'Larissa', 'Alex', 'larissa.alex@gmail.co.uk', NULL, 'Missed my train. Do I have to pay to schedule another one?'],
//        [25, 'Paul','Swindon', 'paul.swindon@yahoo.co.uk', '02085556666', 'The app says it is no longer supported on my phone'],
//        [26, 'Alexis', 'Adams', 'alexis.adams55@outlook.co.uk', '07412365478', "Trainline won't accept paypal?"],
//        [27, 'Lisa', 'Platt-Smith', 'lisa.plattsmith@outlook.co.uk', NULL, 'Does trainline have a contact number? I need to speak to someone']
//    ];
//    $stmt = $pdo->prepare("INSERT INTO query VALUES (?, ?, ?, ?, ?, ?)");
//    try {
//        $pdo->beginTransaction();
//        foreach ($data as $row)
//        {
//            $stmt->execute($row);
//        }
//        $pdo->commit();
//    }catch (Exception $e){
//        $pdo->rollback();
//        throw $e;
//    }
//
//    //    Update
//
//        $update = "UPDATE query SET email = 'james.obrien123@gmail.co.uk' WHERE firstname = 'James'";
//        $stmt = $pdo->prepare($update);
//        $stmt->execute();
?>
    <header class="d-flex justify-content-center align-items-center">
        <h1>Contact Form</h1>
    </header>
    <main class="container py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-8 col-lg-6">
                <p>We would love to hear from you. Please fill out your details and your message below, and we will get back to you as soon as possible:</p>
                <p><small>Required fields denoted by an asterisk (<span class="required">*</span>).</small></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <form action="scripts/backend.php" method="get" class="col-12 col-md-8 col-lg-6 needs-validation" novalidate>
                <div class="mb-3">
                    <label class="form-label" for="firstname">First Name<span class="required">*</span></label>
                    <input type="text" id="firstname" name="firstname" class="form-control" required>
                    <div class="invalid-feedback">Please enter a first name.</div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="lastname">Last Name<span class="required">*</span></label>
                    <input type="text" id="lastname" name="lastname" class="form-control" required>
                    <div class="invalid-feedback">Please enter a last name.</div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email Address<span class="required">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phone">Contact Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="message">Message<span class="required">*</span></label>
                    <textarea id="message" name="message" class="form-control" placeholder="Type your message here..." rows="5" required></textarea>
                    <div class="invalid-feedback">Please type your message here.</div>
                </div>

                <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts/validator.js"></script>
</body>
</html>
