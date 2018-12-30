<?php

if (!function_exists('p')) {
    function p($data = [])
    {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

if (!function_exists('image_url')) {
    function image_url($data)
    {
        if(!empty($data))
            return asset('storage/' . $data);
        else 
            return 'http://www.piniswiss.com/wp-content/uploads/2013/05/image-not-found-4a963b95bf081c3ea02923dceaeb3f8085e1a654fc54840aac61a57a60903fef-300x199.png';
    }
}


if (!function_exists('showError')) {
    function showError($msg){
        $html='<span class="invalid-feedback" role="alert">
                    <strong>'.$msg.'</strong>
                </span>';
        return $html;
    }
}

if (!function_exists('successAlert')) {
    function successAlert($msg){
        $html='<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>'.$msg.'</strong>
            </div>';
        return $html;
    }
}

if (!function_exists('filterDate')) {
    function filterDate($dateTime){
        return date("d-m-Y", strtotime($dateTime));
    }
}