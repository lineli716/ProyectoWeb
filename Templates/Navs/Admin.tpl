<div class="col s8">
    <nav class= "center-align lime accent-2">Opciones</nav>
        <div class="collection">
            {if $nav='Administrador'}
                <a href="?controller=Direccion&method=Inventario" class="collection-item">Ver Inventario</a>
                <a href="?controller=Direccion&method=RegistroProducto" class="collection-item">Registrar Productos</a>
                <a href="?controller=Direccion&method=RegistroMarca" class="collection-item">Registrar Marcas</a>
                <a href="?controller=Direccion&method=RegistroCategoria" class="collection-item">Registrar Categoria</a>
                <a href="?controller=Direccion&method=Entradas" class="collection-item">Entrada de Mercadería</a>
                <a href="?controller=Direccion&method=Salidas" class="collection-item">Salida de Mercadería</a>
                 <a href="?controller=Direccion&method=Ingresos" class="collection-item">Registro de Ingreso de Mercadería</a>
                 <a href="?controller=Direccion&method=Egresos" class="collection-item">Registro Retiro de Mercadería</a>
            {/if}
        </div>   
</div>