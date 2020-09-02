<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title></title>
<style type="text/css">
#container {background:green;width:960px;margin:30px auto;}
.slider_container{position:relative;}
.slider_container .sliderItems{position:absolute;opacity:0;width:100%;transition:all 2s;}
.slider_container .sliderItems.active{opacity:1;}





</style>
</head>
<body>
<div id="container">
<div class="slider_container">
<div class="sliderItems active"> <h1> Ami rusni</h1></div>
<div class="sliderItems"><h1> ami joy</h1> </div>

</div>
 </div>







<script type="text/javascript">














setInterval(function(){
if(document.getElementsByClassName("sliderItems")[0].classList.contains("active")){
document.getElementsByClassName("sliderItems")[1].classList.add("active");
document.getElementsByClassName("sliderItems")[0].classList.remove("active");
}else if(document.getElementsByClassName("sliderItems")[1].classList.contains("active")){
document.getElementsByClassName("sliderItems")[0].classList.add("active");
document.getElementsByClassName("sliderItems")[1].classList.remove("active");
}
},3000);



















</script>
<a href="content.html" > Back to home </a>
</body>
</html>