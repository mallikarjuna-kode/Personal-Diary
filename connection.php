<?php

    $link = mysqli_connect("shareddb-o.hosting.stackcp.net", "secretdi-31303909eb", "P@ssw@rd", "secretdi-31303909eb");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>