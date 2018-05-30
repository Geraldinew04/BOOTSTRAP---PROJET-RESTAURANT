<?php include("./partials/header.php") ?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
font-family: Arial, Helvetica, sans-serif;
}

input[type=text], select, textarea {
width: 100%;
padding: 8px 10px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
/*margin-bottom: 16px;*/
resize: vertical;
}

input[type=submit] {
background-color: #149654;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: #149654;
}

.container {
border-radius: 5px;
padding: 20px;
}

.contact{
	background-color: #fdc415;
	padding: 20px; 
}

h3{
text-align: center; 
padding-bottom: 20px; 
color: #149654;
}

#logo{
	display: block;
	margin-left: auto;
	margin-right: auto;
	border-radius: 50%;
}


</style>


<div class="container">

	<div class="row">
		<div class="col-sm-4">
	  		<div class="container1">
	  			<!-- <h3><a><img src="img/skull4.png"> Contact <img src="img/skull4.png"></a></h3> -->
				<img src="img/cantina.jpg" class="center-block" id="logo" style="width: 200px; height:150px;">
				
			</div>
	  	</div>

		<div class="col-sm-8">

		  <form>

		  	<div class="contact">
		  	<div class="form-group">   
		  		<label for="fname">First Name</label>
		    	<input type="text" id="fname" name="firstname" placeholder="Your name..">
			</div>

		  	<div class="form-group">
		    	<label for="lname">Last Name</label>
		    	<input type="text" id="lname" name="lastname" placeholder="Your last name..">
			</div>

		  	<div class="form-group">
				<label for="email">Email address</label>
		  		<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		  	</div>

		  	<div class="form-group">
			    <label for="message">Objet du message</label>
			    <select id="message" name="message">
			      <option value="reservation">Réservation</option>
			      <option value="réclamation">Réclamation</option>
			      <option value="evenement">Evénement</option>
			      <option value="emploi">Emploi</option>
			      <option value="autre">Autre</option>
			    </select>
			</div>

		  	<div class="form-group">
			    <label for="subject">Message</label>
			    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
			</div>
			<div class="button" style="text-align: right;">
    			<input type="submit" value="Submit" >
			
			</div>
		  </form>
		  </div>

	  </div>

	 

	</div>  
</div>

</body>
</html>

