{extends file='welcome/layout/default.tpl'}

{block 'content'}

    <div class="page-section -white particleground">
        <div class="page-heading text-center">
            <h1 class="title">{$htmlTitle}</h1>
            <p class="description">
                The page you are looking for could not be found.<br>
                Check the address bar to ensure your URL is spelled correctly.<br>
                <a href="/">Visit the Home Page &rarr;</a>
            </p>
        </div>
    </div>

{/block}
