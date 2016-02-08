<!DOCTYPE html>
<html>
<head>
    {$this->Html->charset()}
    <title>{$this->Html->title()}</title>
    <meta name="description" content="{$this->app->config->get('bundles.welcome.description')}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        window.app = window.app || {};
    </script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    {block 'head'}{/block}
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="{$this->Html->bodyClass()}">

    {*$this->app->flash->render()*}

    {if $this->app->bundles('website')}
        {include file='[website]partials/tracking.tpl'}
    {/if}

    {block 'header'}{/block}
    {block 'content'}{/block}
    {block 'footer'}{/block}

    {include file='partials/queryLog.tpl'}

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
    <script src="//cdn.rawgit.com/jnicol/particleground/master/jquery.particleground.js"></script>
    {block 'scripts'}{/block}
    <script src="/js/global.js"></script>

</body>
</html>
