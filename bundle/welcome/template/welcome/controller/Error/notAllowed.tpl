{extends file='welcome/layout/default.tpl'}

{block 'content'}

    <div class="page-section -white particleground">
        <div class="page-heading text-center">
            <h1>{$htmlTitle}</h1>
            <p>
                Method not allowed.<br>
                Must be one of: {', '|implode:$methods}<br>
                <a href="/">Visit the Home Page &rarr;</a>
            </p>
        </div>
    </div>

{/block}

