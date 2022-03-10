{include file="templates/Cabeceras/Header.tpl"}
<div class="row">
        <div class="col s11" align="center">
        <h3>Ver retiro de mercadería</h3>  
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
            {if isset ($encargado)}
                    {foreach from=$encargado item=$Enc }
                        <tr>
                            
                            <td>
                                {$Enc['Nombre']}
                            </td>

                            <td>
                                 {$Enc['Cantidad']}
                            </td>

                            <td>
                                 {$Enc['Razon']}
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