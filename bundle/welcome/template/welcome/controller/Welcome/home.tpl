{extends file='welcome/layout/default.tpl'}

{block 'header'}

    <div class="page-section -white">

        <div class="page-heading">
            <h1>
                <a href="{$this->app->router->urlFor('welcomeHome')}">{$this->app->config->get('bundle.welcome.title')}</a>
            </h1>
            <p>
                {$this->app->config->get('bundle.welcome.description')}
            </p>
        </div>

    </div>

{/block}

{block 'content'}

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
