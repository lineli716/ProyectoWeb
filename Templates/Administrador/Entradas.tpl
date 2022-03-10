{include file="templates/Cabeceras/Header.tpl"}

<div class="row">

    <div class="col s8">
        <form method="post" action="?controller=Administrador&method=Entradas">

            <div class="input-field col s8">
                <input id="idProducto" type="text" name="idProducto"/>
                <label for="idProducto">Nombre</label>
            </div>

            <div class="input-field col s8">
                <input id="Cantidad" type="number" name="Cantidad"/>
                <label for="Cantidad">Cantidad a ingresar</label>
            </div>

            <div class="input-field col s8">
                <input id="Razon" type="text" name="Razon"/>
                <label for="Razon">Razon del ingreso</label>
            </div>

            
            <div class="row">
                    <div class="input-field col s8 center-align">
                    <input class="waves-effect waves-light btn" type="submit"value="Guardar Ingreso"/>
            </div>
            </div>
        </form>
    </div>
</div>


{include file="templates/Cabeceras/Footer.tpl"} 