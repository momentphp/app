{if $this->app->debug}

    <div class="page-section -gray-300">
        <div class="default-table">
            <table>
                {foreach $this->app->debugInfo->get() as $data}
                    <tr>
                        <th>{$data.title} <small>{$data.description}</small></th>
                        <td>{$this->d($data.value)}</td>
                    </tr>
                {/foreach}
            </table>
        </div>
    </div>

{/if}
