<style>
	*{
		padding: 0px;
		margin: 0px;
		outline: 0px;
		font-family: Leelawadee UI;
	}
	form{
		height: 300px;
		width: 280px;
		border: 0.5px solid #bacbdd;
		padding: 20px;
		border-radius: 6px;
		box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.1);
	}
	section{
		background: linear-gradient(rgba(172, 13, 204, 0.589),#ae22d80a);
		height: 100vh;
		width: 100%;
	}
	.container p{font-size: 2rem; 
		margin-top: 100px;}
	form input{
		width: 280px;
		height: 36px;
		border: 0.5px solid white;
		text-align: center;
		color: red;
		background-color: transparent;
		box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.1);
	}
	form .p {
		margin-right: 150px;
		margin-top: 2
		0px;
		color: white;
	}
	form .input {
		width: 280px;
		height: 33px;
		border: 0.5px solid white;
		text-align: center;
		border-radius: 6px;
		color: red;
		background-color: transparent;
		box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.1);
	}
</style>

<section>
<div align="center" class="container">
<h2><strong>Create Acount</strong></h2>


</div>
	<div align="center" class="box">
	<form method="POST" action="register.php">
     <p class="p"><strong>Name</strong></p>
     <input type="text" name="name" placeholder="Name"><br>

     <p class="p"><strong>Email</strong></p>
     <input type="text" name="email" placeholder="Name"><br>

     <p style="margin-top: 10px; margin-right: 150px; color: white;"><strong>Senha</strong></p>
     <input type="text" name="password" placeholder="Password"><br><br>

     <input type="submit" name="send" value="Send in" class="input">
	</form>
	</div>
</section>