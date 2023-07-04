<?php

class FilterConverter {

    public static function convertFilter( $array ) {

        $stdObj = new stdClass;


        for( $i = 0 ; $i < count( $array ) ; $i++){

            $selected = $array[$i];

            $opt = '';

            if (isset($selected->gender)) {
                $opt = "gender";
            } 
            else if(isset($selected->type)) {
                $opt = "type";
            }
            else if(isset($selected->size)) {
                $opt = "size";
            }
            else if(isset($selected->baseColor)) {
                $opt = "baseColor";
            }
            else if(isset($selected->category)) {
                $opt = "category";
            }

            switch ($opt) {
                case 'gender':
                    $stdObj->gender[] = $array[$i]->gender;
                    break;
                case 'type':
                    $stdObj->type[] = $array[$i]->type;
                    break;
                case 'size':
                    $stdObj->size[] = $array[$i]->size;
                    break;
                case 'baseColor':
                    $stdObj->baseColor[] = $array[$i]->baseColor;
                    break;
                case 'category':
                    $stdObj->category[] = $array[$i]->category;
                    break;
            }

        }
        return $stdObj;
    }
}