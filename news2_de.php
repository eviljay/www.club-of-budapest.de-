<!-- generated by HK-CMS - Version 2.5 -->
<html>
<head>
<title>Club of Budapest - News</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="/formate.css">
<script language="JavaScript">
function JustSoPicWindow(imageName,imageWidth,imageHeight,alt,bgcolor,hugger,hugMargin) {

// by E Michael Brandt of ValleyWebDesigns.com - Please leave these comments intact.
// version 2.2.3
	if (bgcolor=="") {
		bgcolor="#FFFFFF";
	}
	var adj=10, lift;
	var w = screen.width;
	var h = screen.height;
	var byFactor=1;

	if(w<740){
	  lift=0.90;
	}
	if(w>=740 & w<835){
	  lift=0.91;
	}
	if(w>=835){
	  lift=0.93;
	}
	if (imageWidth>w){	
	  byFactor = w / imageWidth;			
	  imageWidth = w;
	  imageHeight = imageHeight * byFactor;
	}
	if (imageHeight>h-adj){
	  byFactor = h / imageHeight;
	  imageWidth = (imageWidth * byFactor);
	  imageHeight = h; 
	}
	   
	var scrWidth = w-adj;
	var scrHeight = (h*lift)-adj;

	if (imageHeight>scrHeight){
  	  imageHeight=imageHeight*lift;
	  imageWidth=imageWidth*lift;
	}

	var posLeft=0;
	var posTop=0;

	if (hugger == "hug image"){
	  if (hugMargin == ""){
	    hugMargin = 0;
	  }
	  var scrHeightTemp = imageHeight - 0 + 2*hugMargin;
	  if (scrHeightTemp < scrHeight) {
		scrHeight = scrHeightTemp;
	  } 
	  var scrWidthTemp = imageWidth - 0 + 2*hugMargin;
	  if (scrWidthTemp < scrWidth) {
		scrWidth = scrWidthTemp;
	  }
	  
	  if (scrHeight<100){scrHeight=100;}
	  if (scrWidth<100){scrWidth=100;}

	  posTop =  ((h-(scrHeight/lift)-adj)/2);
	  posLeft = ((w-(scrWidth)-adj)/2);
 	}

	if (imageHeight > (h*lift)-adj || imageWidth > w-adj){
		imageHeight=imageHeight-adj;
		imageWidth=imageWidth-adj;
	}

	var agt=navigator.userAgent.toLowerCase();
	if (agt.indexOf("opera") != -1){
	  var args= new Array();
	  args[0]='parent';
	  args[1]=imageName;
	  var i ; document.MM_returnValue = false;
	  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
	} else {
	newWindow = window.open("vwd_justso.htm","newWindow","width="+scrWidth+",height="+scrHeight+",left="+posLeft+",top="+posTop);
	newWindow.document.open();
	newWindow.document.write('<html><title>'+alt+'</title><body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" bgcolor='+bgcolor+' onBlur="self.close()" onClick="self.close()">');  
	newWindow.document.write('<table width='+imageWidth+' border="0" cellspacing="0" cellpadding="0" align="center" height='+scrHeight+' ><tr><td>');
	newWindow.document.write('<img src="'+imageName+'" width='+imageWidth+' height='+imageHeight+' alt="Click screen to close" >'); 
	newWindow.document.write('</td></tr></table></body></html>');
	newWindow.document.close();
	newWindow.focus();
	}
}
</script><script language="JavaScript">
<!--

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body bgcolor="#F0F0F0" background="/images/bg.gif" text="#000040" link="#8A622A" vlink="#8A622A" alink="#8A622A" onLoad="MM_preloadImages('../images/news_but_over.gif','../images/club_but_over.gif','../images/inst_but_over.gif','/images/phil_but_over.gif','../images/mitgl_but_over.gif','../images/dia_but_over.gif','../images/home_but_over.gif','../images/lit_but_over.gif')">
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="115" valign="top" align="right" rowspan="2"><!-- #BeginLibraryItem "/Library/navbar.lbi" --><script language="JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<p> <img src="images/dummy.gif" width="1" height="245"><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <a href="news_de.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','images/news_but_over.gif',1)"><img name="Image8" border="0" src="images/news_but.gif" width="115" height="22"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('document.Image3','document.Image3','images/dia_but_over.gif','#929629215810')"><br>
  </a> <img src="images/line.gif" width="115" height="3"><br>
  <a href="club/index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','images/club_but_over.gif',1)"><img name="Image9" border="0" src="images/club_but.gif" width="115" height="22"></a><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <a href="projekte/index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/proj_but_over.gif',0)"><img name="Image15" border="0" src="images/proj_but.gif" width="115" height="22"></a><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <a href="institute/index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image18','','images/inst_but_over.gif',1)"><img name="Image18" border="0" src="images/inst_but.gif" width="115" height="22"></a><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <a href="/phil/index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image14','','/images/phil_but_over.gif',1)"><img name="Image14" border="0" src="/images/phil_but.gif" width="115" height="22"></a><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <a href="mitglieder/index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','images/mitgl_but_over.gif',1)"><img name="Image11" border="0" src="images/mitgl_but.gif" width="115" height="22"></a><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <a href="dialog/index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','images/dia_but_over.gif',1)"><img name="Image12" border="0" src="images/dia_but.gif" width="115" height="22"></a><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <a href="literatur/index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image20','','images/lit_but_over.gif',1)"><img name="Image20" border="0" src="images/lit_but.gif" width="115" height="22"></a><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image13','','images/home_but_over.gif',1)"><img name="Image13" border="0" src="images/home_but.gif" width="115" height="22"></a><br>
  <img src="images/line.gif" width="115" height="3"><br>
  <font face="Arial, Helvetica, sans-serif" size="1" color="#8A622A"><a href="http://www.hk-net.de"> 
  </a></font></p>
<!-- #EndLibraryItem --><a href="news_en.php"><img src="images/en.gif" width="30" height="15" border="1"></a></td>
    <td rowspan="2" width="485" valign="top"> 
      <div align="right"> 
        <table width="100%" border="0"
    cellspacing="0" cellpadding="0">
          <tr> 
            <td width="35" rowspan="3" valign="bottom"><img src="/images/dummy.gif" width="35"
        height="1"></td>
            <td width="450" align="right" valign="top">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="/images/newethics_header.gif" width="120" height="50"></td>
                  <td>
                    <div align="right"><img src="/images/news_header.gif" width="300" height="50"></div>
                  </td>
                </tr>
              </table>
              <img src="/images/line_2.gif" width="450" height="13"><br>
              <font face="Arial, Helvetica, sans-serif" size="2"><b><a href="news_de.php"><font color="#8A622A">News</font></a><font color="#8A622A"> 
              - <a href="news_de.php?_from=5">Archiv</a></font></b></font><br>
              <img src="/images/line_2.gif"><br>
              <br>
            </td>
          </tr>
          <tr> 
            <td width="450" align="left" valign="top"> 
              <p>
<br />
<b>Warning</b>:  mysql_fetch_array(): supplied argument is not a valid MySQL result resource in <b>/home/sites/site47/web/news2_de.php</b> on line <b>122</b><br />
              <p>&nbsp; 
            </td>
          </tr>
          <tr> 
            <td width="450" align="center" valign="top"><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<p><font color="#000040" size="1" face="Arial, Helvetica, sans-serif"><a href="../impressum.htm">Stiftung 
  Club of Budapest Deutschland</a></font></p>
<!-- #EndLibraryItem --></td>
          </tr>
        </table>
      </div>
    </td>
  </tr>
  <tr> </tr>
</table>
</body>
</html>