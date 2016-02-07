<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$postData = $_POST['shortURL'];

if(!preg_match("/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/", $postData))
{
  echo "Please enter a URL!";
}
else
{
    
    $realURL   = realURL($postData); // Calling function with short url
    preg_match_all('/\./', $realURL,$periods);
    if(sizeof($periods[0]) == 2)
    {
        $replacedURL = preg_replace('/^(https?:\/\/)?([\da-z-]+)\./','',$realURL);
    }
    else
    {
         $replacedURL = preg_replace('/^(https?:\/\/)/','',$realURL);
    }
    $replacedURL = rtrim($replacedURL,'/');
    if(preg_match('/'.addcslashes($replacedURL,'/.').'/', $postData))
    {
        echo "Not a short url, traced url is the same as the one you entered!";
    }
    else
    {
       echo $realURL ;
    }
}
function realURL($url)
{
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_HEADER,true); // Get header information
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,false);
    $header = curl_exec($ch);
    
    $fields = explode("\r\n", preg_replace('/\x0D\x0A[\x09\x20]+/', ' ', $header)); // Parse information
        
    for($i=0;$i<count($fields);$i++)
    {
        if(strpos($fields[$i],'Location') !== false)
        {
            $url = str_replace("Location: ","",$fields[$i]);
        }
    }
    return $url;
}
?>