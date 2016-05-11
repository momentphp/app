{extends file='layouts/default.tpl'}

{block 'header'}

    <div class="page-section -white particle-ground">
        {$this->cell('Logo')}
    </div>

{/block}

{block 'content'}

    <div class="page-section -gray-200 _center">
        <a href="{$this->app->config->get('bundles.welcome.url.download')}" class="action-button -fixed js-noexternal">Download</a>
        {if $this->app->bundles('docs')}
            <a href="{$this->app->url('docs')}" class="action-button -fixed">Docs</a>
            <a href="{$this->app->url('api')}" class="action-button -fixed">API</a>
        {else}
            <a href="{$this->app->config->get('bundles.welcome.url.docs')}" class="action-button -fixed">Docs</a>
            <a href="{$this->app->config->get('bundles.welcome.url.api')}" class="action-button -fixed">API</a>
        {/if}
        <a href="{$this->app->config->get('bundles.welcome.url.github')}" class="action-button -fixed">GitHub</a>
    </div>

    {include file='partials/debugInfo.tpl'}

{/block}

{block 'footer'}

    <div class="page-section _center">
        Need help?<br>
        Join: <strong>#momentphp</strong> IRC channel on <a href="https://webchat.freenode.net/?channels=momentphp">freenode</a><br>
        Looking for non-encoded version?<br>
        Write an email: {$this->cell('EmailObfuscator', $this->app->config->get('bundles.welcome.email'))}
    </div>

{/block}

{block 'scripts'}

    <script src="//cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.js"></script>
    <script>
    $(document).ready(function() {
        $('.page-heading h1 a').lettering();
    });
    </script>

{/block}
