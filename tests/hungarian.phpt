--TEST--
Hungarian stemming algorithm (extensive)
--SKIPIF--
<?php if (!extension_loaded("stem") || !stem_enabled(STEM_HUNGARIAN)) print "skip"; ?>
--POST--
--GET--
--FILE--
<?php

require("fulltests.php");

runTest(STEM_HUNGARIAN, "hungarian.txt");

?>
--EXPECT--
BAD: 0