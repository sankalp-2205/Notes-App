<?php

    $link = new mysqli("localhost","webshoff_notesapp","82A2TggWo","webshoff_notesapp");
           if($link -> connect_errno > 0)
    {
        die ("Unable to connect to database : " . $link ->connect_error);
    }

?>