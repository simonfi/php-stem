--TEST--
Turkish stemming algorithm (extensive)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_TURKISH)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("runfulltest.inc");

runTest(STEM_TURKISH, "turkish.txt");

?>
--EXPECT--
BAD: 0
