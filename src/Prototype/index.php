<?php

namespace src\Prototype;

use User;
use Task;

/**
 * The client code.
 */
function clientCode()
{
    $assign = new User("John Smith");
    $task = new Task("Its a bug", "Its not a feature", $assign);

    $task->addComment("Please do it asap!");

    $draft = clone $task;

    echo "Dump of the clone. Note that the user is now referencing two objects.\n\n";
    print_r($draft);
}

clientCode();