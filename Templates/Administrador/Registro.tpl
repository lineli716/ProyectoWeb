{include file="templates/Cabeceras/Header.tpl"}
<div class="card-panel cyan accent-1">         
      
      <div class="row">
          <div class="col s12 m6">
          <div class="card blue-grey darken-1">
          </div>
          </div>
      </div>      
     

<div class="row">

    <div class="col s8">
        <form method="post" action="?controller=Administrador&method=RegistroAdministrador">

            <div class="input-field col s8">
            <input id="edad" type="number" name="edad"/>
            <label for="edad">Nombre</label>
            </div>

            <div class="input-field col s8">
            <input id="nombre" type="text" name="Consulta"/>
            <label for="nombre">Descripcion</label>
           </div>

            <div class="input-field col s8">
            <input id="cantidad" type="number" name="DPI"/>
            <label for="DPI">Precio</label>
            </div>
            
            <div class="input-field col s8">
            <input id="cantidad" type="number" name="DPI"/>
            <label for="DPI">Cantidad</label>
            </div>
             
             

            <div class="row">
                    <div class="input-field col s8 center-align">
                      <input class="waves-effect waves-light btn" type="submit"value="Guardar Producto"/>
                    </div>
            </div>
        </form>
    </div>
</div>
</div> 
{include file="templates/Cabeceras/Footer.tpl"}