<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon"> -->
    <title>3D Organs</title>
</head>

<body>
<h3>Subject : : Order received numbe {{ $details['subject'] }} </h3><br>
<p>Body : </p>
  
 Name: <span>{{$details['name']}}</span>
 OrderNumber: <span>{{ $details['subject'] }}</span>
  <img src="{{ asset('assets/images/logo/logo-favicon.png') }}" alt=""><br>

	
	
</body>
</html>	