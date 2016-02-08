<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Explore URL</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="container">
        <h2>ExplodeURL.xyz</h2>
        <div>Don't have trustworthy friends? Don't trust your friends? Have a URL from a sketchy website?</div>
        <div>Test your shortened URL to see where it goes!</div>
        <div>
            <label for="shortURL">
                Enter your shortened URL
            </label>
            <input id="shortURL" type="text" title="URL"/>
            <input id="subURL" type="submit" value="Submit"/>
            <span id="urlERR" class="label label-danger"></span>
        </div>
        <div id="responseText">
            
        </div>
        </div>
    </body>
    <footer>
        <script src ="https://php-mattchat.rhcloud.com/explodeurl/js/myScript.js" type="text/javascript"></script>
    </footer>
</html>
