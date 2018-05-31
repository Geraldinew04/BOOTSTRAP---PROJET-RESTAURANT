<?php include("./partials/header.php") ?>

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
	background-color: rgba(253, 196, 21, 0.7);
	padding: 40px; 
	border-radius: 10%;	
}

h3{
text-align: center; 
padding-bottom: 20px; 
color: #666;
}

#logo{
	display: block;
	margin-left: auto;
	margin-right: auto;
	border-radius: 50%;
}

#frida{
	display: block;
	margin-left: auto;
	margin-right: auto;
	padding-top: 20px; 
	margin-top: 40px; 
	border-radius: 50%;
}

</style>


<div class="container">

	<div class="row">

		<div class="col-sm-4" style="background-color: rgba(253, 196, 21, 0.5); border-radius: 10%;	 ">

			<div class="frida">
				<img src="img/frida.jpg" class="center-block" id="frida" style="max-width: 200px; width: 100%; height: 350px;">				
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div  class="titre" style="text-align: center; margin-top: 40px; ">
						<h3 ><strong>FOLLOW US</strong></h3>
					</div>
				</div>
			</div>
			<div class="row" style="text-align: center;" >
					<div class="col-sm-6">
						<div class="facebook">
							<i class="fab fa-facebook fa-2x" style=" color: #666"></i>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="instagram">
							<i class="fab fa-instagram fa-2x" style=" color: #666"></i>
						</div>
				</div>
			</div>	
	  	</div>

		<div class="col-sm-8">

		  	<form>

			  	<div class="contact">
				  	<div class="form-group">   
				  		<label for="fname" style=" color: #666;">First Name</label>
				    	<input type="text" id="fname" name="firstname" placeholder="Your name..">
					</div>

				  	<div class="form-group">
				    	<label for="lname" style=" color: #666">Last Name</label>
				    	<input type="text" id="lname" name="lastname" placeholder="Your last name..">
					</div>

				  	<div class="form-group">
						<label for="email" style=" color: #666">Email address</label>
				  		<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				  	</div>

				  	<div class="form-group">
					    <label for="message" style=" color: #666">Objet du message</label>
					    <select id="message" name="message">
					      <option value="reservation">Réservation</option>
					      <option value="réclamation">Réclamation</option>
					      <option value="evenement">Evénement</option>
					      <option value="emploi">Emploi</option>
					      <option value="autre">Autre</option>
					    </select>
					</div>

				  	<div class="form-group">
					    <label for="subject" style=" color: #666">Message</label>
					    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
					</div>
					<div class="button" style="text-align: right;">
		    			<input type="submit" value="Submit" >
					
					</div>

				</div>

		  	</form>

	    </div>

	</div>
 
</div>

<br>
 
<?php include("./partials/footer.php") ?>

