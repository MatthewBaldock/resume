<html>
<head>

<link href="bootstrap-theme.css" rel="stylesheet">
<link href="bootstrap-theme.min.css" rel="stylesheet">
<link href="bootstrap.css" rel="stylesheet">
<title>
AGENA
</title>
</head>
<body> 
<div class="col-lg-3">
<small>(super cool name)</small>
<p class="lead">
Asset Generator Application
(AGENA)
</p>
<p class="lead">
Here you can generate icon assets for your mobile development projects
</p>
<p class="lead">
Soon to come: Download as zip, IOS Assets.
</p>
</div>
<div class="col-lg-6">
<div class="well bs-component">
<form class="form-horizontal"> 
<div > 
		<img id="myImg" src="#" alt="your image" />
		<input type='file' accept='image/png,image/gif'onchange="imageLoaded(this)"/>
		 <button type="button" class="btn btn-warning" onclick="copySquare()">Copy</button>
		 </div>
		<div >
		<h3> Android Assets </h3>
		<canvas id="mdpi" width="48" height="48" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		
		 <canvas id="hdpi" width="72" height="72" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		  <canvas id="xhdpi" width="96" height="96" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		  <canvas id="xxhdpi" width="144" height="144" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		  <canvas id="xxxhdpi" width="192" height="192" style="border:1px solid #d3d3d3";>
		 
		 </canvas>
		 </div>
		 <h3> iOS Assets </h3>
		 <div>
		  Coming Soon...
		 </div>
		 </form>
		 </div>
		 </div>

 <script>
 	function downloadStuff()
	{
	var zip = new JSZip();
	var resources = zip.folder("images");
	resources.file(canvas.toDataUrl(), imgData, {base64: true});
	var content = zip.generate({type:"blob"});
	saveAs(content, "example.zip");
	}
    var mdpi = document.getElementById("mdpi");
    var mdpitx = mdpi.getContext("2d");
	var hdpi = document.getElementById("hdpi");
    var hdpitx = hdpi.getContext("2d");
	var xhdpi = document.getElementById("xhdpi");
    var xhdpitx = xhdpi.getContext("2d");
	var xxhdpi = document.getElementById("xxhdpi");
    var xxhdpitx = xxhdpi.getContext("2d");
	var xxxhdpi = document.getElementById("xxxhdpi");
    var xxxhdpitx = xxxhdpi.getContext("2d");
   function copySquare()
	{   
		var img = document.getElementById("myImg");
		mdpitx.drawImage(img, 0,0, 48,48);
		hdpitx.drawImage(img, 0,0, 72,72);
		xhdpitx.drawImage(img, 0,0, 96,96);
		xxhdpitx.drawImage(img, 0,0, 144,144);
		xxxhdpitx.drawImage(img, 0,0, 192,192);
	}
	function imageLoaded(input) {
   
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#myImg')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>
 <script src="jquery-1.11.1.min.js"></script>
 <script src="bootstrap.js"></script>
 <script src="bootstrap.min.js"></script>
 <script src="jszip.min.js"></script>
 </body>
</html>