<?php

return [

    'pathTemplate' => app('bundle')->location('template'),

    'pathCompile' => implode(DIRECTORY_SEPARATOR, [app('pathTmp'), 'template', app('bundle')->fingerprint()]),

    'escapeHtml' => false

];
