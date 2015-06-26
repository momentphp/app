<div class="page-heading text-center">
    <div class="logo">
        <img src="/img/logo.png" width="100" height="100" alt="">
    </div>
    <h1 class="title">
        <a href="{$this->app->router->urlFor('home')}">{$this->app->config->get('bundle.welcome.title')}</a>
    </h1>
    <p class="description">
        {$this->app->config->get('bundle.welcome.description')}
    </p>
</div>
