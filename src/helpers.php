<?php

/**
 * Get hook router
 * 
 * @param array
 */
function hook($config = [])
{
    return OpenSID\Hook::getHooks($config);
}

/**
 * Get all routes
 * 
 * @return array
 */
function routes()
{
    return OpenSID\Route::getRoutes();
}

