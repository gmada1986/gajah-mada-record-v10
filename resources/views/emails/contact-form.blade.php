<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>

<body>

    <h2>Contact Form Submission</h2>

    <h2><strong>Name:</strong> {{ $formData['name'] }}</h2>
    <h2><strong>Email:</strong> {{ $formData['email'] }}</h2>
    <h2><strong>Subject:</strong> {{ $formData['subject'] }}</h2>
    <h2><strong>Message:</strong> {{ $formData['message'] }}</h2>

    <h3>Thank you for reaching out!</h3>
</body>

</html>
