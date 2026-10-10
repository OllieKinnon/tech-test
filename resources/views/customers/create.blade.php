<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
</head>
<body>
    <h1>Customer Details</h1>

    <p>Please enter your details below.</p>

    <form action="#" method="POST">
        <div>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>

        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div>
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
        </div>

        <div>
            <label>
                <input type="checkbox" name="marketing_consent" value="yes">
                I consent to receive marketing communications (optional)
            </label>
        </div>

        <button type="submit">Submit</button>
    </form>

</body>
</html>