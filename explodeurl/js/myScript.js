/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#subURL").on('click',function(){
    var shortURL = $("#shortURL").val();
    if(! shortURL.match(/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/))
    {
        $("#urlERR").text("Please enter a URL!");
    }
    else
    {
         $("#urlERR").empty();
        $.post('https://matthewbaldock.github.io/resume/explodeurl/explode/index.php',{shortURL:shortURL},function(data){
            $("#responseText").text(data); 
        });
    }
   
});
