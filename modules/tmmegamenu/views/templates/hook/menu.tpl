{if isset($MENU) && $MENU !=''} 
    {if $hook == 'left_column' || $hook == 'right_column'}
        <section class="{$hook|escape:'htmlall':'UTF-8'}_menu block">
            <h4 class="title_block">{l s='Menu' mod='tmmegamenu'}</h4>
            <div class="block_content">
    {else}
        <div class="{$hook|escape:'htmlall':'UTF-8'}_menu">
	
            <div class="menu-title">{l s='Menu' mod='tmmegamenu'}</div>
    {/if}
          {$MENU} 
    
    {if $hook == 'left_column' || $hook == 'right_column'}
            </div>
        </section>
    {else}
        </div>
    {/if}
{/if}