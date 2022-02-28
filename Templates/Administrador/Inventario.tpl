{include file="templates/Cabeceras/Header.tpl"}
<div class="row">
        <div class="input-field col s12">
            <h4 class="center-align black-text">Ver Consultas</h4>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <table>
                <thead class="text_center">
                    <tr>
                        <th>Control_idControl</th>
                        <th>Usuarios_idUsuario</th>
                        <th>Marcas_idMarcas'</th>
                        <th>Categoria_idCategoria</th>
                        <th>Nombre del Producto</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>

                    </tr>
                </thead>
                <tbody>
            {if isset ($productos)}
                    {foreach from=$productos item=$Admin }
                        <tr>
                             <td>
                                {$Admin['Control_idControl']}
                            </td>

                            <td>
                                {$Admin['Usuarios_idUsuario']}
                            </td>

                            <td>
                                {$Admin['Marcas_idMarcas']}
                            </td>

                            <td>
                                 {$Admin['Categoria_idCategoria']}
                            </td>

                            <td>
                                 {$Admin['Nombre']}
                            </td>

                             <td>
                                 {$Admin['Descripcion']}
                            </td>

                            <td>
                                 {$Admin['Precio']}
                            </td>

                            <td>
                                 {$Admin['Cantidad']}
                            </td>
                        </tr>
                    {/foreach}
            {{/if}}        
                </tbody>
            </table>
        </div>
    </div>
    
</div
{include file="templates/Cabeceras/Footer.tpl"} 