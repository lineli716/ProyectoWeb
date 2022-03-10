{include file="templates/Cabeceras/Header.tpl"}

<div class="row">

    <div class="col s11">
        <form method="post" action="?controller=Encargado&method=RegistroProducto">

            <div class="input-field col s11">
                <input id="idMarca" type="text" name="idMarca"/>
                <label for="idMarca">Marca</label>
            </div>
           
           <div class="input-field col s11">
                <input id="idCategoria" type="text" name="idCategoria"/>
                <label for="idCategoria">Categoria</label>
            </div>
           
            <div class="input-field col s11">
                <input id="Nombre" type="text" name="Nombre"/>
                <label for="Nombre">Nombre</label>
            </div>

            <div class="input-field col s11">
                <input id="Descripcion" type="text" name="Descripcion"/>
                <label for="Descripcion">Descripcion</label>
            </div>

            <div class="input-field col s11">
                <input id="Precio" type="number" name="Precio"/>
                <label for="Precio">Precio</label>
            </div>
            
            <div class="input-field col s11">
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


</div> 

{include file="templates/Cabeceras/Footer.tpl"} 