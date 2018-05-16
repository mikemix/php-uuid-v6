<?php
require __DIR__.'/../vendor/autoload.php';

define('UUID_V1', 'ea6974c6-590f-11e8-b0f9-02421fa799ff');
define('UUID_V6', '1e8590fe-a697-64c6-b0f9-02421fa799ff');

if (($uuid6 = \mikemix\Uuid::uuid1ToUuid6(UUID_V1)) !== UUID_V6) {
    throw new LogicException(sprintf('Test failed. "%s" given, but "%s" was expected', $uuid6, UUID_V6));
}
