--TEST--
Dutch stemming algorithm (extensive)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_DUTCH)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("runfulltest.inc");

runTest(STEM_DUTCH, "dutch.txt");

?>
--EXPECT--
BAD: 0
