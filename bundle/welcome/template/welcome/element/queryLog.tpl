{if isset($this->app->database)}

    {assign 'queryLog' $this->app->database->queryLog()}

    {if $this->app->debug and !empty($queryLog)}
        <div class="page-section -black">
            <h2>Database queries</h2>
            {$this->dump($queryLog)}
        </div>
    {/if}

{/if}
