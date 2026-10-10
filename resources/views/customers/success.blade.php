
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission successful</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="container">
        <h1>Submission successful!</h1>

        <p>Thank you. Your details have been submitted.</p>

        <h2>Submitted details</h2>

        <p><strong>First name:</strong> {{ $customer['first_name'] }}</p>
        <p><strong>Last name:</strong> {{ $customer['last_name'] }}</p>
        <p><strong>Email:</strong> {{ $customer['email'] }}</p>
        <p><strong>Phone:</strong> {{ $customer['phone'] }}</p>
        <p><strong>Date of birth:</strong> {{ $customer['date_of_birth'] }}</p>
        <p><strong>Marketing consent:</strong> {{ isset($customer['marketing_consent']) ? 'Yes' : 'No' }}</p>

        <p><a href="{{ route('customers.create') }}">Submit another customer</a></p>
    </div>
    
</body>
</html>