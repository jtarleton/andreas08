<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>andreas08: ignore the trends</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Your website description goes here" />
<meta name="keywords" content="your,keywords,goes,here" />
<link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet"> 

<style type="text/css">
  /* andreas08 - an open source xhtml/css website layout by Andreas Viklund - http://andreasviklund.com . Free to use in any way and for any purpose as long as the proper credits are given to the original designer. Version: 1.0, November 28, 2005 */

  /**************** Body and tag styles ***************
  <!-- 

  <link rel="stylesheet" href="andreas08.css" type="text/css" media="screen,projection" /> -->
  */

  *{ 
     margin:0; padding:0; 
  }
  .codeblock {
    border-radius: 3px;
    color:#525C65;
    font-size: 90%;
    white-space: pre;
    padding:10px 50px;
    font-weight:500;
    font-family:Consolas, monaco, monospace;
    display: block;
    margin: auto;
    border:0px solid #c9c9c9;

  }

  body{
   font:76% Verdana,Tahoma,Arial,sans-serif;
  line-height:1.4em;
  text-align:justify;
  color:#303030;
  }
 /*
  a{
  color:#467aa7;

  text-decoration:none;
  background-color:inherit;
  }

  a:hover{color:#2a5a8a; text-decoration:none; background-color:inherit;}
  a img{border:none;}

  p{padding:0 0 1.6em 0;}
  p form{margin-top:0; margin-bottom:20px;} */

  img.left,img.center,img.right{padding:4px; border:1px solid #a0a0a0;}
  img.left{float:left; margin:0 12px 5px 0;}
  img.center{display:block; margin:0 auto 5px auto;}
  img.right{float:right; margin:0 0 5px 12px;}

  /**************** Header and navigation styles ****************/

  #ccontainer{
   width:100%; 
  margin:20px auto; 
  padding:1px 0;
  text-align:left;
  background:#FFF;
  color:#303030;
  border:0px solid red;/* #a0a0a0; */
  }

  #hheader{
  height:110px;
  width:auto;


  margin:0 1px 1px 1px;
  background:#467aa7;
  color:#ffffff;
  }

  #hheader h1{
  padding:35px 0 0 20px;
  font-size:2.4em;
  background-color:inherit;
  color:#ffffff;
  letter-spacing:-2px;
  font-weight:normal;
  }

  #hheader h2{
  margin:10px 0 0 20px;
  /* font-size:1.4em; */
  background-color:inherit;
  color:#f0f2f4;
  letter-spacing:-1px;
  font-weight:normal;
  
  font-family: 'Reenie Beanie', cursive;
  color: #000;
  /* text-shadow: 2px 2px 0px rgba(0,0,0,0.2), 4px 4px 8px rgba(0,0,0,0.2);  */

  }

  #nnavigation{
  height:3.2em;  
  line-height:3.2em;
  width:auto;
  margin:0 1px;
  background:#578bb8;
  color:#ffffff;
  }

  #nnavigation li{
  float:left;  height:3.2em;  
  line-height:3.2em;
  list-style-type:none;
  border-right:1px solid #ffffff;
  white-space:nowrap;
  }

  #nnavigation li a{
  display:block;
  padding:0 10px;
  font-size:0.8em;
  font-weight:normal;
  text-transform:uppercase;
  text-decoration:none;
  background-color:inherit;
  color: #ffffff;
  }

  * html #nnavigation a {width:1%;}

  #nnavigation .selected,#nnavigation a:hover{
  background:#80b0da;
  color:#ffffff;
  text-decoration:none;
  }

  /**************** Content styles ****************/

  #ccontent{
  /*float:left;*/
  text-align:justify;
  /*width: 100%;  1030px;
  font-size:0.9em; */
 
  padding: 30px 10px 10px 10px; 
  }

  #ccontent h2{
  display:block;
  margin:0 0 16px 0;
  font-size:1.7em;
  font-weight:normal;
  letter-spacing:-1px;
  color:#505050;
  background-color:inherit;
  }

  #ccontent h2 a{font-weight:normal;}
  #ccontent h3{margin:0 0 5px 0; font-size:1.4em; letter-spacing:-1px;}
  #ccontent a:hover,#subcontent a:hover{}
  #ccontent ul,#content ol{margin:0 5px 16px 35px;}
  #ccontent dl{margin:0 5px 10px 25px;}
  #ccontent dt{font-weight:bold; margin-bottom:5px;}
  #ccontent dd{margin:0 0 10px 15px;}

  /**************** Sidebar styles ****************/

  #subcontent{
  float:right;
  width:170px;
  padding:20px 20px 10px 0;
  line-height:1.4em;
  }

  #subcontent h2{
  display:block;
  margin:0 0 15px 0;
  font-size:1.6em;
  font-weight:normal;
  text-align:left;
  letter-spacing:-1px;
  color:#505050;
  background-color:inherit;
  }

  #subcontent p{margin:0 0 16px 0; font-size:0.9em;}

  /**************** Menublock styles ****************/

  .menublock{margin:0 0 20px 8px; font-size:0.9em;}
  .menublock li{list-style:none; display:block; padding:2px; margin-bottom:2px;}
  .menublock li a{font-weight:bold; text-decoration:none;}
  .menublock li a:hover{text-decoration:none;}
  .menublock li ul{margin:3px 0 3px 15px; font-size:1em; font-weight:normal;}
  .menublock li ul li{margin-bottom:0;}
  .menublock li ul a{font-weight:normal;}

  /**************** Searchbar styles ****************/

  #searchbar{margin:0 0 20px 0;}
  #searchbar form fieldset{margin-left:10px; border:0 solid;}

  #searchbar #s{
  height:1.2em;
  width:110px;
  margin:0 5px 0 0;
  border:1px solid #a0a0a0;
  }

  #searchbar #searchbutton{
  width:auto;
  padding:0 1px;
  border:1px solid #808080;
  font-size:0.9em;
  text-align:center;
  }

  /**************** Footer styles ****************/

  #ffooter{
  clear:both;
  width:auto;
  padding:5px 0;
  margin:0 1px;
  font-size:0.9em;
  color:#f0f0f0;
  background:#467aa7;
  }

  #ffooter p{padding:0; margin:0; text-align:center;}
  #ffooter a{color:#f0f0f0; background-color:inherit; font-weight:bold;}
  #ffooter a:hover{color:#ffffff; background-color:inherit; }

  /**************** Misc classes and styles ****************/

  .splitcontentleft{float:left; width:48%;}
  .splitcontentright{float:right; width:48%;}
  .clear{clear:both;}
  .small{font-size:0.8em;}
  .hide{display:none;}
  .textcenter{text-align:center;}
  .textright{text-align:right;}
  .important{color:#f02025; background-color:inherit; font-weight:bold;}

  .box{
  margin:0 0 20px 0;
  padding:10px;
  border:1px solid #c0c0c0;
  background-color:#fafbfc;
  color:#505050;
  line-height:1.5em;
  }


  .snippet {
    
    background: #f9f9f9;
    border-left: 10px solid #ccc;
    margin: 1.5em 0px;
    padding: 0.5em 10px;
    quotes: "\201C""\201D""\2018""\2019";
  }
  .snippet :before {
    color: #ccc;
    
    font-size: 4em;
    line-height: 0.1em;
    margin-right: 0.25em;
    vertical-align: -0.4em;
  }
  .snippet:after {
    color: #ccc;

    font-size: 4em;
    line-height: 0.1em;
    margin-left: 0.25em;
    vertical-align: -0.4em;
  }
  .snippet p {
    display: inline;
  }

  blockquote {

    background: #f9f9f9;
    border-left: 10px solid #ccc;
    margin: 1.5em 0px;
    padding: 0.5em 10px;
    quotes: "\201C""\201D""\2018""\2019";
  }
  blockquote:before {
    font-family: "Times New Roman",serif;
    color: #ccc;
    content: open-quote;
    font-size: 4em;
    line-height: 0.1em;
    margin-right: 0.25em;
    vertical-align: -0.4em;
  }
  blockquote:after {
    font-family: "Times New Roman",serif;
    color: #ccc;
    content: close-quote;
    font-size: 4em;
    line-height: 0.1em;
    margin-left: 0.25em;
    vertical-align: -0.4em;
  }
  blockquote p {
    display: inline;
  }

  table a:link {
    color: green;
    /* font-weight: bold; */
   
  }
  table a:visited {
    color: green;
    /* font-weight:bold; */
    
  }
  table a:active,
  table a:hover {
    color: lime;
    
  }
  table {
    width:100%;
    table-layout: fixed;
    font-family:Verdana, sans-serif;
    color:#666;
    /* font-size:12px; */
    /* text-shadow: 1px 1px 0px #fff; */
    background:#eaebec;
    /* margin:20px; */
    border:#ccc 1px solid;

    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;

   /*  -moz-box-shadow: 0 1px 2px #d1d1d1;
    -webkit-box-shadow: 0 1px 2px #d1d1d1;
    box-shadow: 0 1px 2px #d1d1d1; */
  }
  table th {
    /* padding:21px 25px 22px 25px; */
    border-top:1px solid #fafafa;
    border-bottom:1px solid #e0e0e0;
    font-weight: normal;
    /*font-weight: 550; */
    /* background: #ededed; 
    background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
    background: -moz-linear-gradient(top,  #ededed,  #ebebeb);*/
  }
  table th:first-child {
    text-align: left;
    /* padding-left:20px; */
  }
  table tr:first-child th:first-child {
    -moz-border-radius-topleft:3px;
    -webkit-border-top-left-radius:3px;
    border-top-left-radius:3px;
  }
  table tr:first-child th:last-child {
    -moz-border-radius-topright:3px;
    -webkit-border-top-right-radius:3px;
    border-top-right-radius:3px;
  }
  table tr {
    text-align: left;
    /* padding-left:20px; */
  }
  table td:first-child {
    text-align: left;
    /* padding-left:20px; */
    border-left: 0;
  }
  table td {
    /* padding:18px; */
    border-top: 1px solid #ffffff;
    border-bottom:1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;

    background: #fafafa;
    /* background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);*/
  }
  table tr.even td {
    background: #f6f6f6;
    /* background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
    background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6); */
  }
  table tr:last-child td {
    border-bottom:0;
  }
  table tr:last-child td:first-child {
    -moz-border-radius-bottomleft:3px;
    -webkit-border-bottom-left-radius:3px;
    border-bottom-left-radius:3px;
  }
  table tr:last-child td:last-child {
    -moz-border-radius-bottomright:3px;
    -webkit-border-bottom-right-radius:3px;
    border-bottom-right-radius:3px;
  }
  /* table tr:hover td {
    background: #f2f2f2;
    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
    background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);  
  } */
  </style>
   <link rel="stylesheet" href="fndn/css/foundation.css"> 
  <link rel="stylesheet" href="fndn/css/app.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Qwigley" rel="stylesheet">
-->
<link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day" rel="stylesheet"> 
  <style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url('http://weblocal.ad-id.org/Smoothstone/SmoothStone-Regular.ttf');
}


  h1 {
    /* font-size:78px; */
    
   font-family: 'Reenie Beanie', cursive;
   font-size: 28px;
font-weight:900;

  color: #FFF;
  text-shadow: 2px 2px 0px rgba(0,0,0,0.2), 4px 4px 8px rgba(0,0,0,0.2);  

}
h4 {
  font-size: 18px;
}
    
  </style>
</head>
<body style="margin:0; padding:0;background-color:#e8eaec;">
<div id="ccontainer">
<div id="hheader" style="padding-bottom:10px;">      
  <h1>James Tarleton's Home Page</h1>
  <!-- <h4 style="text-align:left;">Welcome to my Home Page</h4> -->

</div>
<div id="nnavigation">
<ul style="margin:0;">
<li class="selected"><a href="ind.php?action=welcome">Home</a></li>
<li><a href="ind.php?action=projects">Projects</a></li>
<li><a href="ind.php?action=client">Client</a></li>
<li><a href="ind.php?action=server">Server</a></li>
<li><a href="ind.php?action=archive">Archive</a></li>
<li><a href="ind.php?action=about">About</a></li>
<li><a href="ind.php?action=weather">Weather</a></li>
<li><a href="ind.php?action=login">Login</a></li>
</ul>
<div style="padding-right:10px; text-align:right;"><?php 
$dt = new DateTime('now', new DateTimeZone('America/New_York'));
$formatted = $dt->format('d M Y &#0149; g:i a T');
echo $formatted; ?></div>
</div>


<div id="ccontent"> 
