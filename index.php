<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay4This</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="container my-4">
<h2 class="text-center">Intro to React $50</h2>
<form action="./charge.php" method="post" id="payment-form">
  <div class="form-row">
  <input name="first_name" type="text" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name" required>
  <input name="last_name" type="text" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name" required>
  <input name="email" type="text" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" required>
    <label for="card-element">
    </label>
    <div id="card-element" class="form-control">
    </div>
    <div id="card-errors" role="alert"></div>
  </div>
  <button class="btn btn-primary btn-block mt-4">Submit Payment</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>
</html>