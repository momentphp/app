<?php

return [

    'template' => app('bundle')->location('template'),

    'compile' => implode(DIRECTORY_SEPARATOR, [app('pathTmp'), 'template', app('bundle')->fingerprint()]),

    'escapeHtml' => false,

];
