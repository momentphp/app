{if $this->app->debug}

    <div class="page-section -gray-200">
        <div class="table-default">
            <table>
                <tr>
                    <th>
                        $app&rarr;database&rarr;getConnection()
                        <small>Domyślne połączenie z bazą danych (<code>false</code> jeśli framework nie może nawiązać połączenia)</small>
                    </th>
                    <td>{$this->dump($this->app->database->connectionStatus())}</td>
                </tr>
                <tr>
                    <th>
                        $app&rarr;env
                        <small>Środowisko aplikacji</small>
                    </th>
                    <td>{$this->dump($this->app->env)}</td>
                </tr>
                <tr>
                    <th>
                        $app&rarr;environment
                        <small>Środowisko serwera (z tablicy <code>$_SERVER</code>)</small>
                    </th>
                    <td>{$this->dump($this->app->environment)}</td>
                </tr>
                <tr>
                    <th>
                        $app&rarr;debug
                        <small>Tryb debugowania aplikacji</small>
                    </th>
                    <td>{$this->dump($this->app->debug)}</td>
                </tr>
                <tr>
                    <th>
                        $app&rarr;pathBase
                        <small>Katalog z instalacją frameworka</small>
                    </th>
                    <td>{$this->dump($this->app->pathBase)}</td>
                </tr>
                 <tr>
                    <th>
                        $app&rarr;pathWeb
                        <small>Katalog serwera WWW (DocumentRoot)</small>
                    </th>
                    <td>{$this->dump($this->app->pathWeb)}</td>
                </tr>
                <tr>
                    <th>
                        $app&rarr;pathTmp
                        <small>Katalog na pliki tymczasowe</small>
                    </th>
                    <td>{$this->dump($this->app->pathTmp)}</td>
                </tr>
                <tr>
                    <th>
                        $app&rarr;config&rarr;getItems()
                        <small>Konfiguracja aplikacji</small>
                    </th>
                    <td>{$this->dump($this->app->config->getItems())}</td>
                </tr>
                <tr>
                    <th>
                        $app&rarr;bundle&rarr;loaded()
                        <small>Załadowane paczki</small>
                    </th>
                    <td>{$this->dump($this->app->bundle->loaded())}</td>
                </tr>
                <tr>
                    <th>
                        $app&rarr;getContainer()&rarr;keys()
                        <small>Nazwy usług w kontenerze</small>
                    </th>
                    <td>{$this->dump($this->app->getContainer()->keys())}</td>
                </tr>
            </table>
        </div>
    </div>

{/if}
