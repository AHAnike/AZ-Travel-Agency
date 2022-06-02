<?php
//--------------------------------Database Connection-------------------------//
    function db_connection()
        {
            $link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            if($link)
                {
                    $result = mysqli_select_db(DB_NAME,$link);
                    if($result)
                        {
                            echo ("Database is connected");
                            return $link;
                        }
                    else
                        {
                            exit('Database does not exists or no permission to the databaes- '.DB_NAME . '.');
                        }
                }
            else
                {
                    exit('can not connect to the database server'.DB_HOST . '.');
                }
        }

    ?>