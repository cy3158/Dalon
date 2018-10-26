<?php

// Don't redefine the functions if included multiple times.
foreach(glob(__DIR__ . '/*.php') as $start_file)
{
    require_once $start_file;
}
