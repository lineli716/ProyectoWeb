{include file="templates/Cabeceras/Header.tpl"}
<div class="row">
        <div class="col s11" align="center">
        <h3>Ver ingreso de mercaderías</h3>  
        </div>   
    <div class="row">
        <div class="input-field col s11">
            <table>
                <thead class="text_center">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Razon</th>
                    </tr>
                </thead>
                <tbody>
            {if isset ($administrador)}
                    {foreach from=$administrador item=$Admin }
                        <tr>
                            
                            <td>
                                {$Admin['Nombre']}
                            </td>

                            <td>
                                 {$Admin['Cantidad']}
                            </td>

                            <td>
                                 {$Admin['Razon']}
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