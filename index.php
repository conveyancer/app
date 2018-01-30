<?php
namespace conveyancer\app;
// Autoload 自动载入
require './vendor/autoload.php';

use \conveyancer\framework\kernel;

(new kernel())->start();

tool::test();

logger::test();

tool::test();

logger::test();

tool::test();

for ($i = 0; $i < 10000; $i++) {
    tool::test();

    logger::test();
}

$t2 = microtime(true);
echo '耗时' . round($t2 - START_TIME, 3) . '秒<br>';
echo 'Now memory_get_usage: ' . get_size(memory_get_usage()) . '<br />';