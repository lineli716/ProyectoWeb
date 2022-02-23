{include file="templates/Cabeceras/Header.tpl"}

<div class="navbar-fixed">
   <nav>
      <nav class="lime accent-3">
         <div class="container">

            <img src="Recursos/Lgo.png" height="60" width="55"> 
            <a href="" class="brand-logo">ATTICO</a>
            <ul class="right hide-on-med-and-down">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href="c"><i class="material-icons">exit_to_app</i></a>
            <li><a href="http://localhost/ProyectoWeb/ProyectoWeb/"><i class="material-icons">person_pin</i></a>
           </ul>
          </div>
      </nav>
  </nav>
</div>

<div class="row">

    <div class="col s8">
        <form method="post" action="?class=Administrador&method=Producto">

            <div class="input-field col s8">
                <input id="idControl" type="number" name="idControl"/>
                <label for="idControl">Usuario_idUsuario</label>
            </div>


            <div class="input-field col s8">
                <input id="idControl" type="number" name="idControl"/>
                <label for="idControl">Control_idControl</label>
            </div>
           
           <div class="input-field col s8">
                <input id="idCategoria" type="number" name="idCategoria"/>
                <label for="idCategoria">Categoria_idCategorial</label>
            </div>
           
            <div class="input-field col s8">
                <input id="Nombre" type="text" name="Nombre"/>
                <label for="Nombre">Nombre</label>
            </div>

            <div class="input-field col s8">
                <input id="Descripcion" type="text" name="Descripcion"/>
                <label for="Descripcion">Descripcion</label>
            </div>

            <div class="input-field col s8">
                <input id="Precio" type="number" name="Precio"/>
                <label for="Precio">Precio</label>
            </div>
            
            <div class="input-field col s8">
                <input id="Cantidad" type="number" name="Cantidad"/>
                <label for="Cantidad">Cantidad</label>
            </div>
             
            <div class="row">
                    <div class="input-field col s8 center-align">
                    <input class="waves-effect waves-light btn" type="submit"value="Guardar Producto"/>
            </div>
            </div>
        </form>
    </div>
</div>

<footer class="page-footer card  lime accent-3 "><div class="card  lime accent-3">
    <div class="container  ">
        <div class="row ">
        <div class="col l6 s12">
        <h5 class="white-text  "></h5>
        <p class="green accent-2 text-lighten-4"></p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text"></h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
        </ul>
        </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2021 Copyright ATTICO
        <a class="grey-text text-lighten-4 right" href="#!"></a>
    </div>
</footer>
</div> 

{include file="templates/Cabeceras/Footer.tpl"} 