{include file="templates/Cabeceras/Header.tpl"}
<div class="row">
        <div class="col s11" align="center">
        <h3>Ver Inventario</h3>  
        </div>   
    <div class="row">
        <div class="input-field col s11">
            <table>
                <thead class="text_center">
                    <tr>
                        <th>Marcas</th>
                        <th>Categoria</th>
                        <th>Nombre del Producto</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>

                    </tr>
                </thead>
                <tbody>
            {if isset ($encargado)}
                    {foreach from=$encargado item=$Enc }
                        <tr>
                            
                            <td>
                                {$Enc['Marca']}
                            </td>

                            <td>
                                 {$Enc['Categoria']}
                            </td>

                            <td>
                                 {$Enc['Nombre']}
                            </td>

                             <td>
                                 {$Enc['Descripción']}
                            </td>

                            <td>
                                 {$Enc['Precio']}
                            </td>

                            <td>
                                 {$Enc['Cantidad']}
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