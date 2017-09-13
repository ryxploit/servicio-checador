<!--
/*reloj digital*/
function show(){
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="AM ";
var saludo ="BUENOS DIAS";
if (hours>=12){
dn="PM ";
saludo="BUENAS TARDES";
hours=hours-12;
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds

$("#reloj").html(hours+":"+minutes+":"+seconds+" "+dn);

$("#saludo").html(saludo + '  '+ '<i class="fa fa-sun-o" aria-hidden="true"></i>');

var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
var fecha = new Date;


$(".alert").alert();


$("#fecha").html(fecha.getDate() + "/" + meses[fecha.getMonth() ] + "/" + fecha.getFullYear());

setTimeout("show()",1000)
}
show()
//-->
