<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Customer Details</h1>

        <p>Please enter your details below.</p>

        @if ($errors->any())
            <div>
                <p>
                    @if ($errors->has('api'))
                        There was a problem submitting your details:
                    @else
                    Please correct the following errors:
                    @endif
                </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div>
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
            </div>

            <div>
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
            </div>

            <div>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
            </div>

            <div>
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
            </div>

            <div>
                <label>
                    <input type="checkbox" name="marketing_consent" value="yes" @checked(old('marketing_consent') === 'yes')>
                    I consent to receive marketing communications (optional)
                </label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>    

</body>
</html>