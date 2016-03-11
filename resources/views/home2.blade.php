<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Librería</title>
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<nav aling="center">
	 <div class="nav-wrapper">
	    <a href="" class="brand-logo">Libreria</a>
	    <ul id="nav-mobile" class="right hide-on-med-and-down">
	       <li><a href=""><i class="material-icons left">add_shopping_cart</i>Carrito</a></li>
	      <li><a href=""><i class="material-icons left">person</i>Mi Cuenta</a></li> 
	    </ul>
	  </div>
	</nav>
	<div class="row">
	    <form class="col s6">
	      <div class="row">
	        <div class="input-field col s6">
	        <br>
	          <i class="material-icons prefix">account_box</i>
	          <input id="nombre" type="text" class="validate">
	          <label for="nombre">Nombre</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6">
	        <br>
	          <i class="material-icons prefix">tag_faces</i>
	          <input id="Nick" type="text" class="validate">
	          <label for="Nick">Nick</label>
	        </div>
	      </div>
	       <div class="row">
	        <div class="input-field col s6">
	        <i class="material-icons prefix">email</i>
	          <br>
	          <input id="email" type="email" class="validate">
	          <label for="email">Email</label>
	        </div>
	        </div>
	      <div class="row">
	        <div class="input-field col s6">
	          <br>
	          <i class="material-icons prefix">lock</i>
	          <input id="password" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	      </div>
	       <div class="row">
	        <div class="input-field col s6">
	          <i class="material-icons prefix">phone</i>
	          <label for="telefono">Telefono</label>
	          <br>
	          <input id="telefono" type="tel" class="validate">
	          
	        </div>
	      </div>
	      </div>
	    </form>
	  </div>





<div class="row card-panel blue-grey lighten-4">
    <div class="col s4 card-panel green accent-1"><br/>
       <form action="/form" method="POST">
       		<i class="material-icons">account_box</i>
			<label>Nombre:</label>
			<input type="text" name="nombre"/><br/>

			<i class="material-icons">tag_faces</i>
			<label>Nick:</label>
			<input type="text" name="nick"/><br/>

			<i class="small material-icons">contacts</i>
			<label>Email:</label>
			<input type="email" name="email"/><br/>

			<i class="material-icons">lock</i>
			<label>Password:</label>
			<input type="password" name="password"/><br/>

			<i class="material-icons">contact_phone</i>
			<label>Telefono:</label>
			<input type="tel" name="telefono"/><br/>

			<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    		<i class="material-icons right">send</i>
 	 		</button>
	   </form><br/>
    </div>

      <div class="col s8 blue-grey lighten-2">
<table class="striped">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Item Name</th>
              <th data-field="price">Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>

        </tbody>
      </table>
       <br/><br/>
          <br/>

      </div>

    </div>
     <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      <nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">primero</a>
        <a href="#!" class="breadcrumb">Segundo</a>
        <a href="#!" class="breadcrumb">Tercero</a>
      </div>
    </div>
  </nav>
</body>
</html>