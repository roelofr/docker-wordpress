<?php

$imageName = 'roelofr/wordpress';

$phpVersions = [
  "php5.6",
  "php7.0",
  "php7.1",
  "php7.2"
];

$webEngines = [
  'apache',
  'fpm',
  'fpm-alpine'
];

$dockerConfig = [];

foreach ($phpVersions as $version) {
    foreach ($webEngines as $engine) {
        $dockerConfig[] = (object)[
          'tag' => "${version}-${engine}",
          'dir' => "${version}/${engine}"
        ];
    }
}

foreach ($webEngines as $engine) {
    $dockerConfig[] = (object)[
        'tag' => "${engine}",
        'dir' => "latest/${engine}"
    ];
}

$dockerConfig[] = (object)[
    'tag' => 'latest',
    'dir' => 'latest/default'
];
