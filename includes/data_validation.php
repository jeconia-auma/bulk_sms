<?php
    function validate_data($data){
        $clean_data = htmlspecialchars($data);
        if(filter_var($clean_data)){
            return $clean_data;
        }else {
            return false;
        }
    }

    function validate_email($email){
        if(filter_sanitize_email($email)){
            return $clean_email;
        }else{
            return false;
        }
    }

    function validate_date($dateTime){
        $dateTime = str_replace('T', ' ', $dateTime) . ':00';
        return $dateTime;
    }
?>