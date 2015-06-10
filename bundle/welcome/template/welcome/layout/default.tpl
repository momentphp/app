<!DOCTYPE html>
<html>
<head>
    {$this->Html->charset()}
    <title>{$this->Html->title()}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    {block 'head'}{/block}
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="{$this->Html->bodyClass()}">

    {block 'header'}{/block}
    {block 'content'}{/block}
    {block 'footer'}{/block}

    {include file='welcome/element/queryLog.tpl'}

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    {block 'scripts'}{/block}

</body>
</html>
