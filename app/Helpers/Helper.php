<?php

use Illuminate\Support\Str;

function str_limit($string, $limit, $end = '...')
{
    return Str::limit($string, $limit, $end);
}

function title_filter($title)
{
    return explode('|', $title)[0];
}
