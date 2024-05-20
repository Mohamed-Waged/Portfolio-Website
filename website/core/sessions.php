<?php

function sessionStore($name, $value)
{
    $_SESSION[$name] = $value;
}


function sessionGet($name, $index)
{
    if (isset($_SESSION[$name][$index])) {
        echo $_SESSION[$name][$index];
    }
}

function sessionRemove($name)
{
    if (isset($_SESSION[$name])) {
        unset($_SESSION[$name]);
    }
}
