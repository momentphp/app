{extends file='layouts/default.tpl'}

{block 'content'}

    <div class="page-section -white particle-ground">
        <div class="page-heading text-center">
            <h1 class="title">{$htmlTitle}</h1>
            <p class="description">
                Method not allowed.<br>
                Must be one of: {', '|implode:$methods}<br>
                <a href="/">Visit the Home Page &rarr;</a>
            </p>
        </div>
    </div>

{/block}

