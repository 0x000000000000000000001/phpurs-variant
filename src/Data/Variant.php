<?php

$exports = [];

$_onImpl = function ($reflect, $p = null, $f = null, $g = null, $r = null) use (&$_onImpl) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$_onImpl) {
            return $_onImpl(...array_merge($__args, $more));
        };
    }
    $tag = $reflect($p);
    if ($r->type === $tag) {
        return $f($r->value);
    }
    return $g($r);
};

$exports['onImpl'] = $_onImpl;

return $exports;
