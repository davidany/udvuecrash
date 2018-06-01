<?php
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>udvuecrash</title>
	<!-- development version, includes helpful console warnings -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


</head>
<body>

<div id="app">
	<h1>{{ message }}</h1>
	<h1>{{ number + 10 }}</h1>
	<h1>{{ isActive ? 'is Active' : 'is not active' }}</h1>
	<h1>{{ message.split('').reverse('').join('') }}</h1>
</div>

</body>
<script>


  let vm =  new Vue({
			el: '#app',
		    data: {
			  number: 10,
			  message: 'hello',
		      isActive: false
		    }
          });

</script>

</html>
