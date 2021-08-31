<?php
//index
//add index
$data = "CREATE INDEX index_title ON posts(title)";
// remote index
$data = "ALTER TABLE posts DROP INDEX index_title";