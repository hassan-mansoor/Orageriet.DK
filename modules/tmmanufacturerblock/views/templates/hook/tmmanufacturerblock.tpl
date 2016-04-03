{if $manufacturers}
    <div id="tm_manufacturers_block" class="clearfix">
        <ul class="manufacturers_items{if !$display_caroucel} row{else} clearfix{/if}">
        	{foreach from=$manufacturers item=manufacturer name=manufacturers}
            	{if $smarty.foreach.manufacturers.iteration <= $nb_display}
                    <li class="manufacturer_item{if !$display_caroucel} col-xs-6 col-sm-3{else} caroucel_item{/if}">
                        {if isset($display_name) && $display_name}
                            <a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" title="{l s='More about %s' sprintf=[$manufacturer.name] mod='tmmanufacturerblock'}">{$manufacturer.name|escape:'html':'UTF-8'}</a>
                        {/if}
                        {if isset($display_image) && $display_image}
                        	<a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html'}" title="{l s='More about %s' sprintf=[$manufacturer.name] mod='tmmanufacturerblock'}">
                            	<img class="img-responsive" src="{$img_manu_dir}{$manufacturer.image|escape:'html':'UTF-8'}-{$image_type}.jpg" alt="{$manufacturer.image|escape:'html':'UTF-8'}" />
                            </a>
                        {/if}
                    </li>
                {/if}
            {/foreach}
        </ul>
    </div>
    {addJsDef m_display_caroucel=$display_caroucel|intval}
    {if $display_caroucel}
        {addJsDef m_caroucel_nb=$caroucel_nb|intval}
        {addJsDef m_caroucel_slide_width=$slide_width|intval}
        {addJsDef m_caroucel_slide_margin=$slide_margin|intval}
        {addJsDef m_caroucel_item_scroll=$caroucel_item_scroll|intval}
        {addJsDef m_caroucel_auto=$caroucel_auto|intval}
        {addJsDef m_caroucel_speed=$caroucel_speed|intval}
        {addJsDef m_caroucel_auto_pause=$caroucel_auto_pause|intval}
        {addJsDef m_caroucel_random=$caroucel_random|intval}
        {addJsDef m_caroucel_loop=$caroucel_loop|intval}
        {addJsDef m_caroucel_hide_controll=$caroucel_hide_controll|intval}
        {addJsDef m_caroucel_pager=$caroucel_pager|intval}
        {addJsDef m_caroucel_control=$caroucel_control|intval}
        {addJsDef m_caroucel_auto_control=$caroucel_auto_control|intval}
        {addJsDef m_caroucel_auto_hover=$caroucel_auto_hover|intval}
    {/if}
{/if}