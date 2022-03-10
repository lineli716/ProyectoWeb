<div class="col s5">
    <nav class= "center-align lime accent-2">Opciones</nav>
        <div class="collection">
            {if $nav='Encargado'}
                <a href="?controller=Direcciones&method=Inventario" class="collection-item">Ver Inventario</a>
                <a href="?controller=Direcciones&method=RegistroProducto" class="collection-item">Registrar Productos</a>
                <a href="?controller=Direcciones&method=RegistroMarca" class="collection-item">Registrar Marcas</a>
                <a href="?controller=Direcciones&method=RegistroCategoria" class="collection-item">Registrar categoria</a>
                <a href="?controller=Direcciones&method=Entreda" class="collection-item">Entrada de Mercadería</a>
                <a href="?controller=Direccioesn&method=Salida" class="collection-item">Salida de Mercadería</a>
            {/if}
        </div>   
</div>