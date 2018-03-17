<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay4This</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="container my-4">
<h2 class="text-center">Intro to React $25</h2>
<div class="row">

<div class="col-sm-3">
  <svg width="400" height="300">
  <rect width="250" height="300" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
  <text x="30" y="150" fill="red" font-size="35">Intro to React</text>
  <text x="30" y="170" fill="red" font-size="17">By Iliya Mohamad Lokman</text>
  Sorry, your browser does not support inline SVG.  
</svg>
</div>

<div class="col-sm-9">
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
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>
</html>