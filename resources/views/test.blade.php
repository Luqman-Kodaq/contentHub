<!DOCTYPE html>
<html>
<head>
	<title>Test Page</title>

	<link rel="stylesheet" href="css/app.css">

</head>
<body>
<div id="app">
<h1>I'm just a test page...</h1>


            		<label for="password" class="control-label">Password:</label>
            		<input type="text" class="form-control" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">
              		<b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto Generate Password</b-checkbox>



</div>


<script src="js/app.js" charset="utf-8"></script>

<script>
  var app = new Vue({
  el: '#app',
  	data: {
    	auto_password: true
  		}
	});
  </script>

</body>
</html>