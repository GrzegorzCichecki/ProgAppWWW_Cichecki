function sprawdzmejla(email) {
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
}
function obliczanieceny(cena, ilosc){
	 return (cena*ilosc);
}
let przycisk = document.querySelector("#tryb");
let kolor = document.getElementById("html");
if(localStorage.getItem("theme") ==null){
	localStorage.setItem("theme", "brak");

}
	if(localStorage.getItem("theme")=="light"){
		kolor.dataset.theme= "light";
		
		przycisk.setAttribute("aria-pressed","false");
		let styl= document.querySelector(":root");
		let kafelki = document.getElementsByClassName("elkatalogu");
		
		styl = getComputedStyle(styl);
		document.body.style.backgroundColor=styl.getPropertyValue("--kolor_tla");
		document.body.style.color=styl.getPropertyValue("--kolor_tekstu");
		for(const el of kafelki){
		el.style.backgroundColor=styl.getPropertyValue("--kolor_karty");
		}
	}
	else if(localStorage.getItem("theme")=="dark"){
		kolor.dataset.theme= "light";
		
		let styl= document.querySelector(":root");
		let kafelki = document.getElementsByClassName("elkatalogu");
		przycisk.setAttribute("aria-pressed","true");
		styl = getComputedStyle(styl);
		document.body.style.backgroundColor=styl.getPropertyValue("--kolor_tla_c");
		document.body.style.color=styl.getPropertyValue("--kolor_tekstu_c");
		for(const el of kafelki){
		el.style.backgroundColor=styl.getPropertyValue("--kolor_karty_c");
	}
	}

przycisk.addEventListener("click",kolorek=()=>{
	if(kolor.dataset.theme== "light" ){
		localStorage.setItem("theme", "dark");
		kolor.dataset.theme= "dark";
		
		let styl= document.querySelector(":root");
		let kafelki = document.getElementsByClassName("elkatalogu");
		przycisk.setAttribute("aria-pressed","true");
		styl = getComputedStyle(styl);
		document.body.style.backgroundColor=styl.getPropertyValue("--kolor_tla_c");
		document.body.style.color=styl.getPropertyValue("--kolor_tekstu_c");
		for(const el of kafelki){
		el.style.backgroundColor=styl.getPropertyValue("--kolor_karty_c");
		}
		
	}
	else if(kolor.dataset.theme== "dark" ){
		localStorage.setItem("theme", "light");
		kolor.dataset.theme= "light";
		
		let styl= document.querySelector(":root");
		let kafelki = document.getElementsByClassName("elkatalogu");
		przycisk.setAttribute("aria-pressed","false");
		styl = getComputedStyle(styl);
		document.body.style.backgroundColor=styl.getPropertyValue("--kolor_tla");
		document.body.style.color=styl.getPropertyValue("--kolor_tekstu");
		for(const el of kafelki){
		el.style.backgroundColor=styl.getPropertyValue("--kolor_karty");
		}
	}
	
	
});
//////////////////////////////////////////////////////////////////////////
if (document.body.id == "index"){
	

const lokalizacja = new Intl.Locale("pl-PL");
let zegar = document.getElementById("godzina");
const datastartowa = Date.now();
zegar.innerHTML=(Intl.DateTimeFormat("pl-PL",{dateStyle: "full",timeStyle: "long",timeZone: lokalizacja.getTimeZones()}).format(datastartowa));
let interwal = setInterval(zegarek=()=>{
	const data = Date.now();
	zegar.innerHTML=(Intl.DateTimeFormat("pl-PL",{dateStyle: "full",timeStyle: "long",timeZone: lokalizacja.getTimeZones()}).format(data));
	
},1000);

let stop = document.getElementById("godzinastop")
stop.addEventListener("click", zatrzymaj=()=>{
	if (interwal != null){
		clearInterval(interwal);
		interwal = null;
	}
});
let start = document.getElementById("godzinastart")
start.addEventListener("click", rusz=()=>{
	if (interwal == null){
	interwal = setInterval(zegarek=()=>{
	const data = Date.now();
	zegar.innerHTML=(Intl.DateTimeFormat("pl-PL",{dateStyle: "full",timeStyle: "long",timeZone: lokalizacja.getTimeZones()}).format(data))
	});
	}
});

}
/////////////////////////
if (document.body.id == "index"){
let zliczenie = document.getElementsByClassName("elkatalogu");
let ile=0;
for(const el of zliczenie){
	ile=ile+1;
}
document.getElementById("ilosc").innerHTML ="Ilość wyników: "+ ile;
szukaj = document.getElementById("wyszukiwanie");
szukaj.addEventListener("input",filtrowanie=()=>{
	let zapytanie = szukaj.value.trim().toLowerCase();
	let wszystkie = document.getElementsByClassName("elkatalogu");
	for(const el of wszystkie){
		if(zapytanie==""){
			el.hidden=false;
		}
		else{
			if(el.id.toLowerCase().includes(zapytanie)){
				el.hidden =false;
			}
			else{
				el.hidden=true;
				
			}
		}
	}
	ile=0
	for(const el of wszystkie){
		if(el.hidden==false){
			ile=ile+1;
		}		
}
	document.getElementById("ilosc").innerHTML ="Ilość wyników: "+ ile;
});	

}
////////////
if (document.body.id == "kontakt"){


	
/*
let email = document.getElementById("adresemail");
email.addEventListener("input",zmiana_email=()=>{
	
	if(sprawdzmejla(email.value)){document.getElementById("wyniki_adres").innerHTML= "Adres e-mail: "+email.value;}
	else{document.getElementById("wyniki_adres").innerHTML="Adres e-mail błędny, poprawny format _@_._";}
});
let wybor = document.getElementById("wybor");
wybor.addEventListener("input",zmiana_wybor=()=>{
	if (wybor.value=="szymanowska"){
		document.getElementById("wyniki_wybor").innerHTML="Produkt: Mąka pszenna Szymanowska typ 480";
	}
	else if(wybor.value=="janex"){
		document.getElementById("wyniki_wybor").innerHTML="Produkt: Mąka ziemniaczana JANEX";
	}
	else if(wybor.value=="proszek"){
		document.getElementById("wyniki_wybor").innerHTML="Produkt: Proszek do pieczenia dr Oetker";
	}
		});

let ilosc = document.getElementById("ilosc");
ilosc.addEventListener("input",zmiana_wybor=()=>{
	let wartosc = parseInt(ilosc.value);

	if(typeof wartosc== "number"&& Number.isInteger(wartosc) && wartosc>0 && wartosc<6 ){
		document.getElementById("wyniki_ilosc").innerHTML = "Ilość: "+wartosc ;
		
	}
	else{
		document.getElementById("wyniki_ilosc").innerHTML = "Ilość: Wpisz liczbę między 1 a 5";
	}
});

let wiadomosc = document.getElementById("tekst");
wiadomosc.addEventListener("input",zmiana_wiadomosci=()=>{
	if (wiadomosc.value.trim().length<10 || wiadomosc.value.trim().length>500){
		document.getElementById("wyniki_wiadomosc").innerHTML="Wiadomość: Zła ilosc literek";
	}
	else{document.getElementById("wyniki_wiadomosc").innerHTML="Wiadomość: "+ wiadomosc.value;}
});

*/
let el1 = [document.getElementById("op1").value,document.getElementById("op1").innerHTML,312];
let el2 = [document.getElementById("op2").value,document.getElementById("op2").innerHTML,356];
let el3 = [document.getElementById("op3").value,document.getElementById("op3").innerHTML,150];
let tablica= [el1, el2, el3];
let spr = document.getElementById("sprawdzacz")
let cena = 0;

spr.addEventListener("click",liczenie=()=>{
	let email = document.getElementById("adresemail");
	if(sprawdzmejla(email.value)){document.getElementById("wyniki_adres").textContent= "Adres e-mail: "+email.value;
	document.getElementById("wyniki_adres_blad").hidden=true;}
	else{document.getElementById("wyniki_adres_blad").textContent="Adres e-mail błędny, poprawny format _@_._";
	email.focus();
	document.getElementById("wyniki_adres_blad").hidden=false;}
	/////
	let wybor = document.getElementById("wybor");
	if (wybor.value=="szymanowska"){
		document.getElementById("wyniki_wybor").textContent="Produkt: Mąka pszenna Szymanowska typ 480";
		document.getElementById("wyniki_wybor_blad").hidden=true;
	}
	else if(wybor.value=="janex"){
		document.getElementById("wyniki_wybor").textContent="Produkt: Mąka ziemniaczana JANEX";
		document.getElementById("wyniki_wybor_blad").hidden=true;
	}
	else if(wybor.value=="proszek"){
		document.getElementById("wyniki_wybor").textContent="Produkt: Proszek do pieczenia dr Oetker";
		document.getElementById("wyniki_wybor_blad").hidden=true;
	}
	else{
		document.getElementById("wyniki_wybor_blad").textContent="Poprawnie wybierz produkt";
		document.getElementById("wyniki_wybor_blad").hidden=false;
		wybor.focus();
	}
	///
	let ilosc = document.getElementById("ilosc");
	console.log(typeof Number(ilosc.value));
	let wartosc = Number(ilosc.value);
	if(Number.isInteger(wartosc) && wartosc>0 && wartosc<6 ){
		document.getElementById("wyniki_ilosc").textContent = "Ilość: "+wartosc ;
		document.getElementById("wyniki_ilosc_blad").hidden=true;
		if (wybor.value!=null && wybor.value!="" && wybor.value){
		for(const el of tablica){
			if (el[0]==wybor.value){
				cena = el[2];
				}
		}
		
		let cenarazyilosc = obliczanieceny(cena,ilosc.value);
		//console.log(obliczanieceny(cena,ilosc.value));
		document.getElementById("wyniki_wartosc").textContent="Wartość: "+(Intl.NumberFormat("pl-PL", { style: "currency", currency: "PLN" }).format(cenarazyilosc/100));
		
		}
		
	}
	else{
		document.getElementById("wyniki_ilosc_blad").textContent = "Wpisz liczbę między 1 a 5";
		document.getElementById("wyniki_ilosc_blad").hidden=false;
		document.getElementById("wyniki_wartosc").textContent="Wartość: ";
		ilosc.focus()
	}
	//
	let wiadomosc = document.getElementById("tekst");
	if (wiadomosc.value.trim().length<10 || wiadomosc.value.trim().length>500){
		document.getElementById("wyniki_wiadomosc_blad").textContent="Wiadomość: Zła ilosc literek";
		document.getElementById("wyniki_wiadomosc_blad").hidden=false;
		wiadomosc.focus();
	}
	else{document.getElementById("wyniki_wiadomosc").textContent="Wiadomość: "+ wiadomosc.value;
	document.getElementById("wyniki_wiadomosc_blad").hidden=true;}
	
	////////
	
	
	event.preventDefault();
	///
	
});
}

/*
<form method="get" action="kontakt.html">
<label for="adresemail">Adres email</label>
<input type="email" name="email"  id="adresemail" required>
<label for="wybor">Wybor produktu</label>
<select name="produkt"  id="wybor" required >
<option value="">wybierz produkt</option>
<option value="szymanowska" id="op1">Mąka przenna Szymanowska typ 480</option>
<option value="janex" id="op2">Mąka ziemniaczana JANEX</option>
<option value="proszek" id="op3">Proszek do pieczenia dr Oetker</option>
</select>
<label for="ilosc">Ilość produktów</label>
<input type="number" name="liczba"  id="ilosc" required min="1" max="5" step="1">
<label for="tekst">Wiadomość dołączona do zamówienia</label>
<input type="text" name="wiadomosc" id="tekst" required minlength="10" maxlength="500">
<button type="button" id="sprawdzacz">Sprawdź zapytanie</button>
</form>



<p id="wyniki_adres">Adres e-mail: </p>
<p id="wyniki_wybor">Produkt: </p>
<p id="wyniki_ilosc">Ilość: </p>
<p id="wyniki_wiadomosc">Wiadomość: </p>
*/ 