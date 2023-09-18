<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


	<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>
    <style>
        .payment{
            text-align:center;
            margin-top:200px;
        }
        .payment h1{
            margin-top:-100px;
        }
        .payment a{
            margin-top:100px;
            border:1px solid black;
            font-weight:bold;
            font-size:20px;
        }
    </style>

</head>
<body>

    <div class="payment">
        <h1>Payment Page</h1>
        <a class="btn btn-secondry" href="{{route('processPaypal')}}"><img src="paypal.png" alt="" height="50px" width="50px"> 100$</a>
    </div>
	


	@if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
    @endif

    
    @if(\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
    @endif

</body>
</html>