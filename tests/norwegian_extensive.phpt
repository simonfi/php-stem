--TEST--
Norwegian stemming algorithm (extensive)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_NORWEGIAN)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("runfulltest.inc");

runTest(STEM_NORWEGIAN, "norwegian.txt");

?>
--EXPECT--
BAD: 0
