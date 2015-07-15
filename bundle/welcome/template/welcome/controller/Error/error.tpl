{extends file='welcome/layout/default.tpl'}

{block 'content'}

    <div class="page-section -white particle-ground">
        <div class="page-heading text-center">
            <h1 class="title">500</h1>
            <p class="description">
                Internal server error.<br>
                Try again later.<br>
                <a href="/">Visit the Home Page &rarr;</a>
            </p>
        </div>
    </div>

    {if $exception}
        <div class="page-section -gray-300">
            <div class="table-default">
                {$exception}
            </div>
        </div>
    {/if}

{/block}

