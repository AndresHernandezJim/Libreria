<div class="card-panel" v-if="carIdioma">
			    	<center>
			    		<label>ESCRIBE EL IDIOMA</label> <br>
			    		<label>Da enter para guardar</label>
			    	</center>
			    	<div class="row">
				        <div class="input-field col s12">
				          	<input type="text" class="validate" v-model="newIdioma" v-on:keyup.enter="storeIdioma">
				        </div>
				    </div>
				     <a href="#!" v-on:click="agregarIdioma">Cerrar</a>
		        </div>
		        <div class="card-panel" v-if="carEditorial">
			    	<center> 
			    		<label>ESCRIBE EL EDITORIAL</label> <br>
			    		<label>Da enter para guardar</label>
			    	</center>
			    	<div class="row">
				        <div class="input-field col s12"> 
				          	<input type="text" class="validate" v-model="newEditorial" v-on:keyup.enter="storeEditorial"><br>
				          	<label>Nombre</label><br>
				        </div>
				        <div class="input-field col s12">
				          	<input type="text" class="validate" v-model="newTelefono" v-on:keyup.enter="storeEditorial"><br>
				          	<label>Telefono</label><br>
				        </div> 
				        <a href="#!" v-on:click="agregarEditorial">Cerrar</a>
				    </div>
				</div>
			    <div class="card-panel" v-if="carAutor">
			    	<center>
			    		<label>ESCRIBE EL NOMBRE DEL AUTOR</label> <br>
			    		<label>Da enter para guardar</label>
			    	</center>
			    	<div class="row">
				        <div class="input-field col s12">
				          	<input type="text" class="validate" v-model="newAutor" v-on:keyup.enter="storeAutor">
				        </div>
				    </div>
				     <a href="#!" v-on:click="agregarAutor">Cerrar</a>
		        </div>