<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title></title>
<style type="text/css">
div#demo1 {
      background:silver;
      color:black;
      text-align:center;
      width:350px;
      line-height:175px;
      opacity:0;
      transform:scaleY(0);
      transform-origin:top;
      transition:all 1s;
}
#demo2{
    color:blue;
    font-size:50px;
    display:block;
    overflow:hidden;
}
#demo3{
    color:blue;
    font-size:50px;
    display:block;
    overflow:hidden;
}
#demo4 {
    background: #ffe500;
    width: 400px;
    padding: 50px;
    border-top: 21px solid blue;
    border-bottom: 21px solid blue;
    margin: auto;
    text-align: center;
    border-radius: 3px;
    box-shadow: 0px 0px 20px 20px #ffe500;
    display: block;
    overflow: hidden;
}
#demo5{
background:red;width:220px;
}
</style>
</head>
<body>
<div id="button">
<button id="clickbtn"  > Click </button>
<button id="clickbtn2" > Clikc </button>
</div>
<div id="demo1"> Welcome  </div>
<div id="demo4">
<div id="demo2"></div>
<div id="demo3"></div>
<h1> Time Zoon </h1>
<b><marquee> Deginer By Joy <br/> 2.28am/24.9.2019 </marquee></b>
</div>
<div id="demo5">  </div>
<div id="demo6">  </div>
<script type="text/javascript">
document.getElementById("clickbtn").addEventListener("click",function(){
document.getElementById("demo1").setAttribute("style","opacity:1;transform:scaleY(1);")
})
document.getElementById("clickbtn2").addEventListener("click",function(){
document.getElementById("demo1").setAttribute("style","opacity:0;transform:scaleY(0);")
})
//time zoon//
var myVar = setInterval(myTimer,1000);
function myTimer(){
var d = new Date();
var t = d.toLocaleTimeString();
document.getElementById("demo2").innerHTML=t;
}
var mmyVar = setInterval(mmyTimer,1000);
function mmyTimer(){
var x = new Date();
var dd = x.toLocaleDateString();
document.getElementById("demo3").innerHTML=dd;
}
//time zoon end//
var call = "hi";
if (call=="hi"){
document.getElementById("demo5").innerHTML="<h1> hello </h1>"; 
}
else if (call=="howareyou"){
document.getElementById("demo5").innerHTML="<h1> hm i am fine today.  anyway how are you ? </h1>"; 
}
else if(call=="amiovalo"){
document.getElementById("demo5").innerHTML="<h1> o assa tor gf ase </h1>"; 
}
else if(call=="naretorase"){
document.getElementById("demo5").innerHTML="<h1> oh tahole to valoy holo r na amar kono gf nai but ekhon no tention   </h1>"; 
}
else if(call=="keno"){
document.getElementById("demo5").innerHTML="<h1> keno abar ekhon ami ar tuii jomiye golpo korbo tay  </h1>"; 
}
else if(call=="ohtaynaki"){
document.getElementById("demo5").innerHTML="<h1> hm ok son amar gf miss call disse ektupor kotha bolsi bye </h1>"; 
}
var d = 1;
while(d<10){
document.write(d+".hercules<br/>");
d++;
}
var arryname = ["ruhani","masum","naim","nafiz","shaiful","rimon","maruf","tuhin","shohid","rasel"];
var getarraylength = arryname.length - 1;
x = 0 ;
while (x <= getarraylength){
document.write(arryname[x]+ "<br/>");
x++;
}
document.write("<br/>");



var myobj = {

fname: "joy",
lname: "khan",
myfunc: function(){

return this.lname+" "+this.lname;


}
};
document.querySelector("#demo6").innerHTML=myobj.myfunc();







</script>
<a href="content.html" > Back to home </a>
</body>
</html>