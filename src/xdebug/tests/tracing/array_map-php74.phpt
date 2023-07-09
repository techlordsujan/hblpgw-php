--TEST--
Test with internal callbacks (PHP < 8.0)
--SKIPIF--
<?php
require __DIR__ . '/../utils.inc';
check_reqs('PHP < 8.0');
?>
--INI--
xdebug.mode=trace
xdebug.start_with_request=no
xdebug.collect_return=0
xdebug.collect_assignments=0
xdebug.trace_format=0
xdebug.var_display_max_depth=2
xdebug.var_display_max_children=3
--FILE--
<?php
require_once 'capture-trace.inc';

$ar = array('a', 'bb', 'ccc');
$r = array_map('strlen', $ar);

xdebug_stop_trace();
?>
--EXPECTF--
TRACE START [%d-%d-%d %d:%d:%d.%d]
%w%f %w%d     -> array_map($callback = 'strlen', ...$arrays = variadic(0 => [0 => 'a', 1 => 'bb', 2 => 'ccc'])) %sarray_map-php74.php:5
%w%f %w%d       -> strlen($str = 'a') %sarray_map-php74.php:5
%w%f %w%d       -> strlen($str = 'bb') %sarray_map-php74.php:5
%w%f %w%d       -> strlen($str = 'ccc') %sarray_map-php74.php:5
%w%f %w%d     -> xdebug_stop_trace() %s:%d
%w%f %w%d
TRACE END   [%d-%d-%d %d:%d:%d.%d]
