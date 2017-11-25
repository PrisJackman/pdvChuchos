@extends('master')

@section('contenido')
<div class="jumbotron" align="center">
	<form >
    <fieldset>
      <legend>Registro de ventas</legend>
        
          <section class="col-lg-6" id="s1">
            <article class="form-group">
            
              <label class="control-label col-lg-2" >Folio</label> 
              <div class="col-lg-4">   
                <input type="number" name="" class="form-control">
              </div>             
              <label class="control-label col-lg-1" >Fecha</label>
              <div class="col-lg-5">
                <a href="">{{$fecha}}</a>
              </div>          
              <br>
            </article>
            <article class="form-group">
              <label class="control-label col-lg-2">Nombre:</label>
              <div class="col-lg-10">
                <a href="">{{ Auth::user()->name }}</a>
              </div>   
            <article>
              
            </article>
            <br>
            <br>
            <br>
            <article>
              <!--<textarea   class="form-control" readonly="" rows="20" cols="50" id="textArea">-->
                <table class="table table-striped table-hover ">
                  <thead>
                    <tr class="info">
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>xxxx</td>
                      <td>xxx</td>
                      <td>xxx</td>
                    </tr>
                  </tbody>
                </table>
              <!--</textarea>-->
            </article>
          </section>
          <section class="col-lg-6" id="s2">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#sencillos" data-toggle="tab" aria-expanded="true">Sencillos</a></li>
              <li class=""><a href="#especiales" data-toggle="tab" aria-expanded="false">Especiales</a></li>
              <li class=""><a href="#bebidas" data-toggle="tab" aria-expanded="false">Bebidas</a></li>
              <li class=""><a href="#extras" data-toggle="tab" aria-expanded="false">Extras</a></li>
            </ul>
            <article id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="sencillos">
                  <br>
                  <br>
                  <div class="col-lg-10 ">
                     <button  class="btn btn-info circ">Papas locas</button>
                     <button  class="btn btn-info circ">Cacahuatadas</button>
                     <button  class="btn btn-info circ">Cevicurros</button>

                  </div>

                  <div class="col-lg-10 ">
                     <br>
                     <button  class="btn btn-info circ">Chimichangas</button>
                     <button  class="btn btn-info circ">Esquites</button>
                     <button  class="btn btn-info circ">Tostiesquites</button>
                  </div>
              </div>
              <div class="tab-pane fade" id="especiales">
                  <br>
                  <br>
                  <div class="col-lg-10 ">
                     <button  class="btn btn-info circ">Papas locas</button>
                     <button  class="btn btn-info circ">Cacahuatadas</button>
                     <button  class="btn btn-info circ">Cevicurros</button>

                  </div>
                  <div class="col-lg-10 ">
                     <br>
                     <button  class="btn btn-info circ">Chimichangas</button>
                     <button  class="btn btn-info circ">nose</button>
                     <button  class="btn btn-info circ">nose</button>
                  </div>
              </div>
              <div class="tab-pane fade" id="bebidas">
                  <br>
                  <br>
                  <div class="col-lg-10 ">
                     <button  class="btn btn-info circ">Coca cola 600ml</button>
                     <button  class="btn btn-info circ">Sprite 600ml</button>
                     <button  class="btn btn-info circ">Fanta naranja 600ml</button>

                  </div>
                  <div class="col-lg-10 ">
                     <br>
                     <button  class="btn btn-info circ">Manzanita 600ml</button>
                     <button  class="btn btn-info circ">Agua ciel 1lt</button>
                     <button  class="btn btn-info circ">Agua ciel 600ml</button>
                     
                  </div>

              </div>
              <div class="tab-pane fade" id="extras">
                  <br>
                  <br>
                  <div class="col-lg-10 ">
                     <button  class="btn btn-info circ">Salchicha</button>
                     <button  class="btn btn-info circ">Rielito</button>
                     <button  class="btn btn-info circ">Cacahuates</button>

                  </div>
              </div>
            </article>
          </section>
        
    </fieldset>
  </form>
</div>

@stop
