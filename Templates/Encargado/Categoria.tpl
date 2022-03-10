{include file="templates/Cabeceras/Header.tpl"}

<div class="row">

    <div class="col s8">
        <form method="post" action="?controller=Encargado&method=RegistroCategoria">

            <div class="input-field col s8">
                <input id="Nombre" type="text" name="Nombre"/>
                <label for="Nombre">Nombre</label>
            </div>

            <div class="row">
                    <div class="input-field col s8 center-align">
                    <input class="waves-effect waves-light btn" type="submit"value="Guardar Categoria"/>
            </div>
            </div>
        </form>
    </div>
</div>



{include file="templates/Cabeceras/Footer.tpl"} 