--TEST--
Portuguese stemming algorithm (extensive)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_PORTUGUESE)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("runfulltest.inc");

runTest(STEM_PORTUGUESE, "portuguese.txt");

?>
--EXPECT--
BAD: 0
