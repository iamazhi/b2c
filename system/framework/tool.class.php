<?php
class tool
{
    static public function getParams($key = null,$default = null)
    {
         $params =  array_merge($_GET, $_POST);
         if(null == $key) return $params;
         $data = isset($params[$key]) ? $params[$key] : $default;
         return $data;
     }
}
