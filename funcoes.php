<?php
function is_empty($value)
{
    $empty = (is_null($value) || empty($value) || $value == "");
    return $empty;
}
