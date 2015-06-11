{extends file='welcome/layout/default.tpl'}

{block 'content'}
    <div class="page-section -white">

        <div class="page-heading">
            <h1>{$htmlTitle}</h1>
            <p>
                The page you are looking for could not be found.<br>
                Check the address bar to ensure your URL is spelled correctly.<br>
                <a href="{$this->app->router->urlFor('welcomeHome')}">Visit the Home Page &rarr;</a>
            </p>
        </div>

    </div>
{/block}
