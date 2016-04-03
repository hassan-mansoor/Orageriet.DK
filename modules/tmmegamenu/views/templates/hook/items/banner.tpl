{if isset($banner) && $banner}
	<li class="banner{if $banner.specific_class} {$banner.specific_class|escape:'htmlall':'UTF-8'}{/if}">
    	<a href="{$banner.url|escape:'htmlall':'UTF-8'}" {if $banner.blank}target="_blank"{/if}>
        	<img class="img-responsive" src="{$image_baseurl|escape:'htmlall':'UTF-8'}{$banner.image|escape:'htmlall':'UTF-8'}" alt="{$banner.title|escape:'htmlall':'UTF-8'}" />
        </a>
    </li>
	
{/if}
