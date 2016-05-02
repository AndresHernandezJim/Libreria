@extends('templates.website')
@section('content')
  <div>
  		<table class="bordered highlight responsive-table centered">
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
        </tbody>
      </table>
      <div align="center">
      	<br>
      	<button class="btn waves-effect waves-light">Pagar &nbsp<i class="fa fa-credit-card"></i></button>
      </div>
      <a href="/otropago" class="right-align">Ve nuestras formas de pago</a>
  </div>
 @stop