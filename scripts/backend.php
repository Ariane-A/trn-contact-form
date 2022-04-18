<?php
// Field name => Field label
const REQUIRED_FIELDS = [
    'firstname' => 'First name',
    'lastname' => 'Last name',
    'email' => 'Email address',
    'message' => 'Message'
];

// only run for GET requests
if (isset($_GET)) {
    session_start();

    $error = false;
    $errorMessage = '';
    $fieldErrors = [];

    // simple check that required fields have been completed
    foreach (REQUIRED_FIELDS as $name => $label) {
        if (!isset($_GET[$name]) || strlen($_GET[$name]) === 0) {
            $error = true;
            $fieldErrors[$name] = $label;
        }
    }

    // randomly fake an error
    if (mt_rand(0,1) > 0.5) {
        $error = true;
        $errorMessage = "There's was an error with your form submission, please try again.";
    }

    if ($error) {
        $_SESSION['error'] = true;
        $_SESSION['submittedFields'] = $_GET;

        if (!empty($fieldErrors)) {
            $_SESSION['fieldErrors'] = $fieldErrors;
        }

        if (strlen($errorMessage)) {
            $_SESSION['errorMessage'] = $errorMessage;
        }
    } else {
        $_SESSION['success'] = true;
    }
}

// redirect back to form
header('Location: /');
exit;
