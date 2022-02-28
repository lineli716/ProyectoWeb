<div class="col s5">
    <nav class = "center-align lime accent-2">Opciones</nav>
        <div class="collection">
            {if $nav='Administrador'}
                <a href="?controller=Direccion&method=Inventario" class="collection-item">Ver Inventario</a>
                <a href="?controller=Direccion&method=RegistroProducto" class="collection-item">Registrar Productos</a>
                 <a href="?controller=Direccion&method=RegistroP" class="collection-item">Registrar Productos</a>
            {/if}
        </div>   
</div>