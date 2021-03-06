<?php

namespace JobsApp;

class Render{
    static public function printData($data){

        echo"<tr>";
        foreach($data as $item){

        echo"<th>$item</th>";

        }
        echo"</tr>";

    }



}