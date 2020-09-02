<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title></title>
<style type="text/css">

#demo4 h1 {color:green; }


</style>
</head>
<body>

<div id="kutta">  </div>  
<div id="kuttaa">  </div> 
<div id="demo1"><h1>hlw joy</h1>  </div> 
<button id="demo3"> Click Me </button>
<br/>
<br/>
<br/>
<select id="cuntry">
<option value=""> select </option>
<option value="1"> Bangladesh </option>
<option value=""> India </option>
<option value=""> USA </option>
<option value=""> Missor </option>
</select>
<div id="selectw">    </div>
<br/>
<br/>

<div id="demo4"> 

<input placeholder="           I LOVE YOU " type="text" id="myInput"/>



<h1></h1>


</div>

<br/>
<br/>

<script type="text/javascript">
function aleert(){
alert ("HELLO");
};
var j = ["3","w","0","0","0"];
document.write(j.length);
function call(j,o,y){
document.write("<h1> Fast Name : " + j +"</h1><br/>");
document.write("<h1> Middile Name : " + o +"</h1><br/>");
document.write("<h1> Last Name : " + y +"</h1><br/>");
}
call("Hercules","Joy","Pro");
call("D'Croz","Rusni","Pro");
var age = 18 ;
var parsson = 119 ;
if(age<=parsson){document.getElementById("kutta").innerHTML="<h1>you adalt</h1>";}
else{document.getElementById("kutta").innerHTML="<h1>TUMI EKHONO SOTO</h1>";}
var calltoww = "";
switch(calltoww){
case "joy":
document.getElementById("kuttaa").innerHTML="hi joy";
break;
case "rusni":
document.getElementById("kuttaa").innerHTML="hi rusni";
break;
case "ayon":
document.getElementById("kuttaa").innerHTML="hi ayon";
break;
default:
document.getElementById("kuttaa").innerHTML="no body";
}
var arry = ["joy","joy1","joy2","joy3","joy4",];
var leng = arry.length - 1 ;
rusnii = 0 ;
while (rusnii <= leng){
document.write("hi"+arry[rusnii]+"<br/>");
rusnii++;
}
var obj = {fname: "hercules",lname:"joy",myfunc: function(){
return this.fname+" "+this.lname ;
}};
document.write(obj.myfunc());
function caaal (j,o,y){
document.write("ami "+j+"<br/>");
document.write("ami "+o+"<br/>");
document.write("ami "+y+"<br/>");
}
caaal ("joy","maruf","ruhani");
document.querySelector("button#demo3").addEventListener("click",function (){
document.querySelector("#demo1").prepend(document.createElement("h1"));
document.querySelector("#demo1 h1").innerHTML="hlw";
document.querySelector("#demo1").append(document.createElement("h2"));
document.querySelector("#demo1 h2").innerHTML="hi";
document.querySelector("#demo1 h2").classList.add("layla");
document.querySelector(".layla").setAttribute("style","background:red");
}
);
document.querySelector("#cuntry").addEventListener("change",function(){
if(this.value==1){
document.querySelector("#selectw").innerHTML='<select id=""><option value=""> hI </option></select>';
}
});


document.querySelector("#myInput").addEventListener("keyup",function(){
if(this.value=="hi"){
document.querySelector("#demo4 h1").innerHTML="hello";}
else if(this.value=="hlw"){document.querySelector("#demo4 h1").innerHTML="Hi";}
else if(this.value=="hey"){document.querySelector("#demo4 h1").innerHTML="Hi ";}
else if(this.value=="hello"){document.querySelector("#demo4 h1").innerHTML="Hi";}
else if(this.value=="howareyou"){document.querySelector("#demo4 h1").innerHTML="i am fine ";}
else if(this.value=="tumiselenakimeye?"){document.querySelector("#demo4 h1").innerHTML=" Ami Meye ! Keno amake dekhe ki tumake sele mone hosse? ";}
else if(this.value=="tumikiselenakimeye?"){document.querySelector("#demo4 h1").innerHTML=" Ami Meye ! Keno amake dekhe ki tumake sele mone hosse? ";}
else if(this.value=="tumikiselenameye?"){document.querySelector("#demo4 h1").innerHTML=" Ami Meye ! Keno amake dekhe ki tumake sele mone hosse? ";}
else if(this.value=="tumiselenakimeye"){document.querySelector("#demo4 h1").innerHTML=" Ami Meye ! Keno amake dekhe ki tumake sele mone hosse? ";}
else if(this.value=="tumikiselenakimeye"){document.querySelector("#demo4 h1").innerHTML=" Ami Meye ! Keno amake dekhe ki tumake sele mone hosse? ";}
else if(this.value=="tumikiselenameye"){document.querySelector("#demo4 h1").innerHTML=" Ami Meye ! Keno amake dekhe ki tumake sele mone hosse? ";}
else if(this.value=="na"){document.querySelector("#demo4 h1").innerHTML=" Oh tay ok sono ";}
else if(this.value=="nah"){document.querySelector("#demo4 h1").innerHTML=" Oh tay ok sono ";}
else if(this.value=="arana"){document.querySelector("#demo4 h1").innerHTML=" Oh tay ok sono ";}
else if(this.value=="nathiktanoy"){document.querySelector("#demo4 h1").innerHTML=" Oh tay ok sono ";}
else if(this.value=="natanoy"){document.querySelector("#demo4 h1").innerHTML=" Oh tay ok sono ";}
else if(this.value=="hmbolo"){document.querySelector("#demo4 h1").innerHTML=" Tumar ki GF ase? hm ";}
else if(this.value=="habolo"){document.querySelector("#demo4 h1").innerHTML=" Tumar ki GF ase? hm ";}
else if(this.value=="natokeno"){document.querySelector("#demo4 h1").innerHTML="NA asole amar o kono gf nai";}
else if(this.value=="na"){document.querySelector("#demo4 h1").innerHTML="NA asole amar o kono gf nai";}
else if(this.value=="nakeno"){document.querySelector("#demo4 h1").innerHTML="NA asole amar o kono gf nai";}
else if(this.value=="nah"){document.querySelector("#demo4 h1").innerHTML="NA asole amar o kono gf nai";}
else if(this.value=="o"){document.querySelector("#demo4 h1").innerHTML="hm tahole to valoy holo ar apnake dekhte onek cute/nice";}
else if(this.value=="kenonay"){document.querySelector("#demo4 h1").innerHTML="hm tahole to valoy holo ar apnake dekhte onek cute/nice";}
else if(this.value=="kenonai"){document.querySelector("#demo4 h1").innerHTML="hm tahole to valoy holo ar apnake dekhte onek cute/nice";}
else if(this.value=="kan"){document.querySelector("#demo4 h1").innerHTML="hm tahole to valoy holo ar apnake dekhte onek cute/nice";}
else if(this.value=="oh"){document.querySelector("#demo4 h1").innerHTML="hm tahole to valoy holo ar apnake dekhte onek cute/nice";}
else if(this.value=="tumarphonenumbertadebeplz"){document.querySelector("#demo4 h1").innerHTML="ok nao 012345678910";}
else if(this.value=="tumarphonenumbertadao"){document.querySelector("#demo4 h1").innerHTML="ok nao 012345678910";}
else if(this.value=="tumarphonenumberdeyajabe"){document.querySelector("#demo4 h1").innerHTML="ok nao 012345678910";}
else if(this.value=="tumarphonenumberamakedebe?"){document.querySelector("#demo4 h1").innerHTML="ok nao 012345678910";}
else if(this.value=="ektutumarphonenumbertadau"){document.querySelector("#demo4 h1").innerHTML="ok nao 012345678910";}
else if(this.value=="phoneasetumar"){document.querySelector("#demo4 h1").innerHTML="hm ase keno bolo to ha ki korbe amar phone tumi ";}
else if(this.value=="tumikiphoneusekoro"){document.querySelector("#demo4 h1").innerHTML="i phone 5";}
else if(this.value=="kiphoneusekorotumi"){document.querySelector("#demo4 h1").innerHTML="i phone 5";}
else if(this.value=="tumarphoneernamki"){document.querySelector("#demo4 h1").innerHTML="i phone 5";}
else if(this.value=="kiphonetumar"){document.querySelector("#demo4 h1").innerHTML="i phone 5";}
else if(this.value=="pricekoto"){document.querySelector("#demo4 h1").innerHTML="52k assa eysob bad dao ami kisu bolte chai tumake ";}
else if(this.value=="damkoto"){document.querySelector("#demo4 h1").innerHTML="52k assa eysob bad dao ami kisu bolte chai tumake ";}
else if(this.value=="kotonisilo"){document.querySelector("#demo4 h1").innerHTML="52k assa eysob bad dao ami kisu bolte chai tumake ";}
else if(this.value=="kotodam"){document.querySelector("#demo4 h1").innerHTML="52k assa eysob bad dao ami kisu bolte chai tumake ";}
else if(this.value=="kotoprice"){document.querySelector("#demo4 h1").innerHTML="52k assa eysob bad dao ami kisu bolte chai tumake ";}
else if(this.value=="kemonaso"){document.querySelector("#demo4 h1").innerHTML=" hm valoi achi";}
else if(this.value=="good night"){document.querySelector("#demo4 h1").innerHTML=" ekhon e good night ok good night";}
else if(this.value=="hiamiarnab"){document.querySelector("#demo4 h1").innerHTML="opps! ekhon mone hosse tumake kheye feli sedin mohila colleg a dekha korbar kotha silo but tumi asho nai ami sedin onek kanna koresilam jano Arnab anyway jao breckup and don't text me agein ok noyto amader video viral hoye jabe now bye be good ";}
else if(this.value=="goodmorning"){document.querySelector("#demo4 h1").innerHTML="hi good morning kemon aso ?";}
else if(this.value=="valo"){document.querySelector("#demo4 h1").innerHTML="oh ok bye";}
else if(this.value=="hm"){document.querySelector("#demo4 h1").innerHTML="hmm2";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value==""){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value=="shohidkechino"){document.querySelector("#demo4 h1").innerHTML="Hm o ekta lucca sele i hate . amake sudhu miss call dey ektu baron kore dio plz plz 01998811173 ey je ey number theke call disilo";}
else if(this.value=="ekhonkikorsho"){document.querySelector("#demo4 h1").innerHTML="Tumar Shate Chatting Korsi ";}
else if(this.value=="oitumibiyekoreso"){document.querySelector("#demo4 h1").innerHTML="Na age ektu prem korbo tarpor biye korbo";}
else if(this.value=="tumikibiyekoreso"){document.querySelector("#demo4 h1").innerHTML="Na age ektu prem korbo tarpor biye korbo";}
else if(this.value=="tumibiyekoreso"){document.querySelector("#demo4 h1").innerHTML="Na age ektu prem korbo tarpor biye korbo";}
else if(this.value=="amarbarikothay"){document.querySelector("#demo4 h1").innerHTML="Horihora,Shailkupa";}
else if(this.value=="amarbarikoy"){document.querySelector("#demo4 h1").innerHTML="Horihora,Shailkupa";}
else if(this.value=="amarbarikoi"){document.querySelector("#demo4 h1").innerHTML="Horihora,Shailkupa";}
else if(this.value=="otay"){document.querySelector("#demo4 h1").innerHTML="hm";}
else if(this.value=="bangladesherrajdhaniki?"){document.querySelector("#demo4 h1").innerHTML="DHAKA";}
else if(this.value=="bangladesherrajdhaniki"){document.querySelector("#demo4 h1").innerHTML="DHAKA";}
else if(this.value=="amarjellarnamki"){document.querySelector("#demo4 h1").innerHTML="jhenaidh";}
else if(this.value=="tumarjellarnamki"){document.querySelector("#demo4 h1").innerHTML="jhenaidh";}
else if(this.value=="torjellarnamki"){document.querySelector("#demo4 h1").innerHTML="jhenaidh";}
else if(this.value=="apnarjellarnamki"){document.querySelector("#demo4 h1").innerHTML="jhenaidh";}
else if(this.value=="amarthanarnamki"){document.querySelector("#demo4 h1").innerHTML="Shailkupa";}
else if(this.value=="torthanarnamki"){document.querySelector("#demo4 h1").innerHTML="Shailkupa";}
else if(this.value=="tumarthanarnamki"){document.querySelector("#demo4 h1").innerHTML="Shailkupa";}
else if(this.value=="apnarthanarnamki"){document.querySelector("#demo4 h1").innerHTML="Shailkupa";}
else if(this.value=="tumike"){document.querySelector("#demo4 h1").innerHTML=" Ami Rusni";}
else if(this.value=="tuike"){document.querySelector("#demo4 h1").innerHTML="Ami Rusni";}
else if(this.value=="tuyke"){document.querySelector("#demo4 h1").innerHTML="Ami Rusni";}
else if(this.value=="apnike"){document.querySelector("#demo4 h1").innerHTML="Ami Rusni";}
else if(this.value=="amike"){document.querySelector("#demo4 h1").innerHTML="Inshan";}
else if(this.value=="torbarikoi"){document.querySelector("#demo4 h1").innerHTML=" Amar bari Shailkupa Thana Horihora grame ";}
else if(this.value=="torbarikoy"){document.querySelector("#demo4 h1").innerHTML=" Amar bari Shailkupa thana Horihora grame ";}
else if(this.value=="tumarbarikoi"){document.querySelector("#demo4 h1").innerHTML=" Amar bari Shailkupa thana Horihora grame ";}
else if(this.value=="tumarbarikoy"){document.querySelector("#demo4 h1").innerHTML=" Amar bari Shailkupa thana Horihora grame ";}
else if(this.value=="apnarbarikoy"){document.querySelector("#demo4 h1").innerHTML=" Amar bari Shailkupa thana Horihora grame ";}
else if(this.value=="apnarbarikoi"){document.querySelector("#demo4 h1").innerHTML=" Amar bari Shailkupa thana Horihora grame ";}
else if(this.value=="torgramernamki"){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value=="tumargramernamki"){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value=="torgramernamki"){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value=="apnargramernamki"){document.querySelector("#demo4 h1").innerHTML="";}
else if(this.value=="tumarnamki"){document.querySelector("#demo4 h1").innerHTML="Rusni";}
else if(this.value=="tornamki"){document.querySelector("#demo4 h1").innerHTML="Rusni";}
else if(this.value=="apnarnamki"){document.querySelector("#demo4 h1").innerHTML="Rusni";}
else{document.querySelector("#demo4 h1").innerHTML=" Ki Lekhso Ami Bujhte Parchi Na Valo Kore Bolo ";}
});





</script>
<a href="content.html" >Back to home </a>
</body>
</html>