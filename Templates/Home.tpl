{include file="templates/Cabeceras/Header.tpl"}

<div class="navbar-fixed">
   <nav>
      <nav class="green accent-2">
         <div class="container">
            <a href="" class="brand-logo">ATTICO</a>
            <ul class="right hide-on-med-and-down">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
           </ul>
          </div>
      </nav>
  </nav>
</div>

<div class="card-panel yellow lighten-2">         
    <div class="container">
       <div class="row">
          <div class="col s12 m6">
           <div class="card yellow lighten-2">
          </div>
        </div>
    </div>      
        <div>
           <h1 class="center-align white-text text- ">Bienvenidos</h1>

             <h5 class="center-align white-text text- ">Ingresa los siguientes datos</h5>
         </div>

         <form method="post" action="?controller=User&method=BuscarUsuario" class="col s4">
             <div class="row">
                <div class="input-field col s6">
                   <input id="user" type="text" class="validate" required="" name="user">
                   <label for="user">Usuario</label>
                </div>
     
                <div class="input-field col s6">
                   <input id="password" type="password" class="validate" required="" name="pass">
                   <label for="password">Password</label>
                </div>
             </div>   

              <div align="center">
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
                </button>
             </div>
          </form>

      </div>
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