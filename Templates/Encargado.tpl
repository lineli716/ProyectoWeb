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
            <li><a href="http://localhost/ProyectoWeb/ProyectoWeb/"><i class="material-icons">exit_to_app</i></a>
            <li><a href="http://localhost/ProyectoWeb/ProyectoWeb/"><i class="material-icons">person_pin</i></a>
           </ul>
          </div>
      </nav>
  </nav>
</div>
<div class="center"> <h3>Encargado</h3></div>
<br></br>
  <div class="col s5">
    {include file="Navs/Encar.tpl"}
    </div>
    <div class="col 1">
    </div>
    <div class="col s5">
   
      {if isset($rol)}
          {if $rol=='Inventario'}
            {include file='Encargado/Inventario.tpl'}
            {else if $rol=='RegistroProducto'}
              {include file='Encargado/Productos.tpl'}
              {else if $rol=='RegistroMarca'}
                {include file='Encargado/Marcas.tpl'} 
                 {else if $rol=='RegistroCategoria'}
                   {include file='Encargado/Categorias.tpl'}
                    {else if $rol=='Entredas'}
                      {include file='Encargado/Entredas.tpl'}
                      {else if $rol=='Salidas'}
                         {include file='Encargado/Salidas.tpl'}
          {/if}
      {/if}         
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