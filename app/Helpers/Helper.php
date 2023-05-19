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

function get_midtrans_snap_js(): string
{
    return config('midtrans.is_production') ? 'https://app.midtrans.com/snap/snap.js' : 'https://app.sandbox.midtrans.com/snap/snap.js';
}

function get_categories()
{
    return \App\Models\Category::all();
}
