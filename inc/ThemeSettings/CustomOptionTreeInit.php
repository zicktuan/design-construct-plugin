<?php
if (!function_exists('ot_type_input_empty')) {

    function ot_type_input_empty($args = [])
    {
        new MyPlugin\AdminSettings\CustomField\InputEmpty($args);
    }
}