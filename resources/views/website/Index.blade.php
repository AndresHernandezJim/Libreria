@extends('templates.website')
@section('content')
<section id= "slider-libreria" class="container">
            <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="/img/1.jpg">
                    <div class="caption right-align">
                      <h3><font color="blue">Amplio Surtido</font></h3>
                      <h6><font color="7C9CFC">Contamos con diversos generos literarios, desde lecturas ligeras hasta libros especializados</font></h6>
                    </div>
                  </li>
                  <li>
                    <img src="/img/2.jpg">
                    <div class="caption left-align">
                      <h3>Tu eliges lo que quieres comprar</h3>
                      <h6>Nuestra tienda virtual te ofrece todas las </h6>
                    </div> 
                  </li>
                  <li>
                    <img src="/img/3.jpg">
                    <div class="caption center-align">
                      <h3>Disfruta</h3>
                    </div>
                  </li>
                  <li>
                    <img src="/img/4.jpg">
                  </li>
                </ul>
              </div>
  </section>
  <section id="section2" class="container">
            <div class="row">
                <div class="col s12 l4">
                    <center>
                        <i class="fa fa-check-square-o fa-3x"></i> </center>
                        <center>Calidad</center><br>
                        Un cliente es el visitante más importante en nuestras instalaciones, no depende de nosotros. Nosotros dependemos de él. <br>
                        Por estas razones, con nosostros encontrarás productos de calidad 100% garantizada, no tienes que preocuparte por defectos en los productos dado que cuentan con garantia contra entrega
                </div>
                <div class="col s12 l4">
                    <center><i class="fa fa-truck fa-3x"></i></center>
                    <center><h6>Envios</h6></center><br>
                    
                      No necesitas preocuparte por tu ubicación, los envios se realizan al domicilio asociado a la cuenta, estos se realizan a cualquier parte del país  e incluso a cualquier parte del mundo *. <br>
                      <font face="courier;impact" size="0.2" alig="right ">* Se aplicarán cargos extra  </font>
                    

                </div>
                <div class="col s12 l4">
                    <center><i class="fa fa-credit-card fa-3x"></i></center>
                    <center><h6><b>Pago Fácil</b></h6></center><br>
                      Acpetamos diversos medios de pago, desde tarjetas de debito y crédito hasta pago directo contra entrega, los métodos tradicionales de pago tambien aplican en nuestros modelos de acceso
                    
                    <a href="/formaspago"></a>
                </div>
            </div>
  </section>

 @stop