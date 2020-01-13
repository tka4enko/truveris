<?php
/**
 * Class IncludeComponentsFile
 */

class IncludeComponentsFile{
    public function __construct(){ }
    public static function includeFile(){
        foreach (glob(get_template_directory()."/modules/**/*.php") as $component)
        {
            include_once $component;
        }
    }
}