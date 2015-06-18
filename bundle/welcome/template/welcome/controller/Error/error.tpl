{extends file='welcome/layout/default.tpl'}

{block 'content'}

    <div class="page-section -white">
        <div class="page-heading">
            <h1>500</h1>
            <p>
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

