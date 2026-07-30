<?php

$exports = [];

$_onImpl = function ($reflect, $p, $f, $g, $r) use (&$_onImpl) {
    $tag = $reflect($p);
    if ($r->type === $tag) {
        return $f($r->value);
    }
    return $g($r);
};

$exports['onImpl'] = $_onImpl;

return $exports;
