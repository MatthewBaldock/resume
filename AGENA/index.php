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
<p> If you have any requests or suggestions you can shoot me an e-mail. If you would like to support this project please feel free to donate! </p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KXZFGLCMRAFUJ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
<div class="col-lg-8">
<div class="well bs-component">
<form class="form-horizontal"> 
<div > 
		<img id="myImg" src="#" alt="your image" />
		<input type='file' accept='image/png,image/gif'onchange="imageLoaded(this)"/>
		 <button type="button" class="btn btn-warning" onclick="copySquare()">Create Assets</button>
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
		  <table class="table table-striped table-hover ">
  <thead>
    <tr>
	  <th>Icon type</th>
      <th>iPhone 6 Plus</th>
      <th>iPhone 6/5</th>
      <th>iPhone 4s</th>
	  <th>iPad / iPad Mini</th>
	  <th>iPad2 / iPad Mini</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	<td>Toolbar/Navigation</td>
      <td><canvas id="i6pone" width="66" height="66" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65one" width="44" height="44" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4sone" width="44" height="44" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
	  <td><canvas id="iPadone" width="44" height="44" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2one" width="22" height="22" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr>
	<td>Tab bar</td>
      <td><canvas id="i6ptwo" width="75" height="75" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65two" width="50" height="50" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4stwo" width="50" height="50" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPadtwo" width="50" height="50" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2two" width="25" height="25" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr>
	<td>Settings</td>
      <td><canvas id="i6pthree" width="87" height="87" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65trhee" width="58" height="58" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4sthree" width="58" height="58" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPadthree" width="58" height="58" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2three" width="29" height="29" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr>
	<td>Spotlight Search</td>
      <td><canvas id="i6pfour" width="120" height="120" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65four" width="80" height="80" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4sfour" width="80" height="80" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPadfour" width="80" height="80" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2four" width="40" height="40" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr>
	<td>App Icon</td>
      <td><canvas id="i6pfive" width="180" height="180" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i65five" width="120" height="120" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="i4sfive" width="120" height="120" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPadfive" width="152" height="152" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
      <td><canvas id="iPad2five" width="76" height="76" style="border:1px solid #d3d3d3";>
		 
		 </canvas></td>
    </tr>
    <tr>
	<td>Web Clip</td>
	  <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
    </tr>
	 <tr>
	 <td>App Store icon</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
    </tr>
    <tr>
	<td>Launch file</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td>
      <td>Coming soon...</td> 
    </tr>
  </tbody>
</table> 
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
	var i6pone = document.getElementById("i6pone");
    var i6ponetx = i6pone.getContext("2d");
	var i65one = document.getElementById("i65one");
    var i65onetx = i65one.getContext("2d");
	var i4sone = document.getElementById("i4sone");
    var i4sonetx = i4sone.getContext("2d");
	var iPadone = document.getElementById("iPadone");
    var iPadonetx = iPadone.getContext("2d");
	var iPad2one = document.getElementById("iPad2one");
    var iPad2onetx = iPad2one.getContext("2d");
   function copySquare()
	{   
		var img = document.getElementById("myImg");
		mdpitx.drawImage(img, 0,0, 48,48);
		hdpitx.drawImage(img, 0,0, 72,72);
		xhdpitx.drawImage(img, 0,0, 96,96);
		xxhdpitx.drawImage(img, 0,0, 144,144);
		xxxhdpitx.drawImage(img, 0,0, 192,192);
		i6ponetx.drawImage(img, 0,0, 66,66);
		i65onetx.drawImage(img, 0,0, 44,44);
		i4sonetx.drawImage(img, 0,0, 44,44);
		iPadonetx.drawImage(img, 0,0, 44,44);
		iPad2onetx.drawImage(img, 0,0, 22,22);
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
 <footer id="footer" class="col-lg-12">
 <div class="col-lg-5"></div>AGENA Copyright © 2015 <a href="matt.w.g.baldock@gmail.com">Matthew Baldock.</a> All rights reserved
 </footer>
 </body>
 
</html>
