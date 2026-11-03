$(document).ready(function(){
let stanklikacza1 = false;
$("#klikacz1").attr("aria-pressed","false");
$("#klikacz1").on("click",function(){
	if(stanklikacza1==false){
		$("#klikacz1").stop(true,false).animate({width:"240px",height:"130px"},300);
		stanklikacza1 = true;
		$("#klikacz1").attr("aria-pressed","true");
}
	else if (stanklikacza1==true){
		$("#klikacz1").stop(true,false).animate({width:"160px",height:"90px"},300);
		stanklikacza1 = false;
		$("#klikacz1").attr("aria-pressed","false");
		}
});


//////////

let stanklikacza2 = false;
let fokusklikacza2 = false;
$("#klikacz2").on("focus",function(){
	fokusklikacza2 = true;
});
$("#klikacz2").on("blur",function(){
	fokusklikacza2 = false;
	
});
$("#klikacz2").on("mouseenter",function(){
	$("#klikacz2").stop(true,false).animate({width:"220px",height:"120px"},300);
	stanklikacza2=true;
});
$("#klikacz2").on("mouseleave",function(){
	if(!fokusklikacza2){
	$("#klikacz2").stop(true,false).animate({width:"160px",height:"90px"},300);
	stanklikacza2=false;
	}
});
let klikniecia = 1;
let kliknieciaD= klikniecia-1;
$("#klikacz3").on("click",function(){
	
	if((160+klikniecia*20<=260 && 90+klikniecia*10<=140) && !($("#klikacz3").is(":animated"))){
			klikniecia=klikniecia+1;
			kliknieciaD= klikniecia-1;
			$("#iloscklikniec").text("Ilość kliknięć: "+kliknieciaD);
			$("#klikacz3").animate({width:"+=20px",height:"+=10px"},300);
	}
});


$("#klikacz4").on("click",function(){
	$("#klikacz1").stop(true,false);
	$("#klikacz1").css("width","160px");
	$("#klikacz1").css("height","90px");
	$("#klikacz1").attr("aria-pressed","false");
	klikniecia=1;
	kliknieciaD= klikniecia-1;
	$("#iloscklikniec").text("Ilość kliknięć: "+kliknieciaD);
	$("#klikacz3").stop(true,false);
	$("#klikacz3").css("width","160px");
	$("#klikacz3").css("height","90px");
	
	
});

if(window.matchMedia("(prefers-reduced-motion: reduce)").matches){
	$.fx.off = true;
}
$("#klikacz5").on("click",function(){
	$("#wynikklikacza5").text("Wysyłanie zapytania.");
	$("#klikacz5").prop("disabled",true);
	$.ajax({
		url: "status.php",
		method:"GET",
		dataType:"text",
		timeout: 5000,
		
	}).done(function(response){
		$("#wynikklikacza5").text(response);
	}).fail(function(jqXHR, textStatus, errorThrown ){
		$("#wynikklikacza5").text(errorThrown);
	}).always(function(){
		$("#klikacz5").prop("disabled",false);
	})
});

});