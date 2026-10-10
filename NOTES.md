Technical Test Notes


Running the application

I used Laravel Herd on Windows and accessed the application at http://tech-test.test.

The .env file needs these additional settings:

CUSTOMER_API_URL=https://webhook.site/da0575be-4a80-4084-8e42-44d90ba2356a
CUSTOMER_API_TOKEN=bc_test_9f4e2a7c1d8b6053e1a4


Decisions and assumptions

I used Laravel's built-in validation to check the form before sending any data to the API.

I made all customer details required apart from marketing consent, which is an optional checkbox.

I added basic phone number validation to reject obviously invalid input.

I used Laravel's old() helper to keep entered details when validation fails.

I used Laravel's HTTP client to send the data as JSON with a Bearer token.

I kept the API URL and token in .env rather than putting them directly in the code to keep it private.

I used a CSS stylesheet to keep the form clear and easy to use.


Testing

I manually tested valid submissions, validation errors and an unavailable API.

I checked Webhook.site to confirm that requests were being received.


What I'd improve with more time

Add automated tests for validation and API success/failure cases.

Prevent accidental duplicate submissions.

Add more thorough international phone number validation.


Webhook.site URL

https://webhook.site/da0575be-4a80-4084-8e42-44d90ba2356a