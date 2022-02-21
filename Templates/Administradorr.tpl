{include file="templates/Cabeceras/Header.tpl"}

<div class="navbar-fixed">
   <nav>
      <nav class="green accent-2">
         <div class="container">

            <img src="Recursos/Lgo.png" height="60" width="55"> 
            <a href="" class="brand-logo">ATTICO</a>
            <ul class="right hide-on-med-and-down">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href="http://localhost/ProyectoWeb/ProyectoWeb/Home.tpl"><i class="material-icons">exit_to_app</i></a>
           </ul>
          </div>
      </nav>
  </nav>
</div>

 <br></br>
    <div class="col s5">
        {include file="Navs/Admin.tpl"}
    </div>

    <div class="col 1">
     </div>

    <div class="col s5">
            <h1>Administrador</h1>
                 {if isset($rol)}
                    {if $rol=='registro'}
                        {include file='Administrador/Registro.tpl'}
                     {else if $rol==''}
                    {include file='Administrador/.tpl'}
                {/if}
                 {/if}
    </div>
    
<footer class="page-footer card  cyan accent-4  "><div class="card  green accent-2">
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