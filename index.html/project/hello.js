var a=8000
function getnumber(a){
   if (a>1000000){
     return ("我嫁給你"); 
   }else if (a>500000){
     return ("你嫁給我");
   }else {
     return ("存夠錢再來");
   }
}
console.log(getnumber(a))