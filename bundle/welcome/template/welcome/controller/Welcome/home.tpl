{extends file='welcome/layout/default.tpl'}

{block 'header'}

    <div class="particleground page-section -white">

        {include file='welcome/element/logo.tpl'}

    </div>

{/block}

{block 'content'}

    <div class="page-section -gray-200">

        <a href="{$this->app->config->get('bundle.welcome.url.github')}" class="button-action">GitHub</a>
        {if $this->app->bundle->has('docs')}
            <a href="{$this->app->router->urlFor('docsHome')}" class="button-action">Docs</a>
        {else}
            <a href="{$this->app->config->get('bundle.welcome.url.docs')}" class="button-action">Docs</a>
        {/if}
        <a href="{$this->app->config->get('bundle.welcome.url.api')}" class="button-action">API</a>

    </div>

    {include file='welcome/element/debugTable.tpl'}

{/block}

{block 'scripts'}

    <script src="//cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.js"></script>
    <script>
    $(document).ready(function() {
        $('.page-heading h1 a').lettering();
    });
    </script>

{/block}
