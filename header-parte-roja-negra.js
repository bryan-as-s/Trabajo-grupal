function ventana(){
	let a = window.getComputedStyle(document.getElementById("body")).getPropertyValue("width"); //Importante ya que me controla el tamanio de la pantalla
	a = parseInt(a.replace('px',''));

	return a;
}

const puertaCollap = document.getElementById("puerta_colap");
var colap_estado = false;
const elemento = document.querySelector(".colap");
const flecha = document.querySelector(".fa-caret-down")

puertaCollap.addEventListener("click", collapsible, false);

function collapsible(){
	if(!colap_estado){
		elemento.style.display = "flex";
		elemento.style.flexDirection = 'column'
		flecha.style.transform = 'rotateX(180deg)'
		colap_estado = true;
	}
	else {
		elemento.style.display = 'none'
		colap_estado = false;
		flecha.style.transform = 'rotateX(0deg)'
	}	
}


const hamburguesa = document.querySelector(".header_hamburguesa"); //Caja donde esta el icono hamburguesa
var hamburguesa_estado_pc = true;
var hamburguesa_estado_cel = true;
const letra = document.querySelectorAll(".nav_elemento--letra");   //letra de cada opcion del nav
const nav_elemento = document.querySelectorAll(".nav_elemento");   //Caja de cada elemento del nav
const nav = document.getElementById("nav");						   //Todo el nav	
const perfil = document.querySelector(".nav_perfil");			   //Perfil del nav	
const icono = document.querySelectorAll(".icono_nav")			   //icono de las opciones del nav	
var a = window.getComputedStyle(document.getElementById("body")).getPropertyValue("width"); //Importante ya que me controla el tamanio de la pantalla
a = parseInt(a.replace('px',''));

hamburguesa.addEventListener("click", funcHamburguesa, false);	

function funcHamburguesa(){
var a = window.getComputedStyle(document.getElementById("body")).getPropertyValue("width"); //Importante ya que me controla el tamanio de la pantalla
a = parseInt(a.replace('px',''));

	if (a > 800){
		if(!hamburguesa_estado_cel){hamburguesa_estado_pc=false}
		nav.style.left = "0"
		if(hamburguesa_estado_pc){
			nav.style.width="8vh";
			perfil.style.transform = 'translateX(-500px)';

			//Borrar la letra al costado de cada elemento del nav
			try {
				for (i in letra) {
					letra[i].style.display = "none";
				}
			}catch(e) {}

			//Con esto elimino la parte de muevo los elemento del nav arriba
			try {
				for (i in nav_elemento) {
					perfil.style.zIndex = '-1'
					nav_elemento[i].style.transform = 'translate(0, -120px)'
					nav_elemento[i].style.justifyContent = 'center'
				}
			} catch(e) {}

			//Posiciona el icono
			try {
				for (i in icono) {
					icono[i].style.marginRight = '0'
				}
			} catch(e) {}

			perfil.style.transform = 'translateX(-500px)';
			hamburguesa_estado_pc = false;
		}
		else {
			nav.style.width="calc(25% - 8vh)"
			perfil.style.transform = "translateX(0)"

			//Borrar la letra al costado de cada elemento del nav
			try {
				for (i in letra) {
					letra[i].style.display = "flex";
				}
			}catch(e) {}

			//Con esto elimino la parte de muevo los elemento del nav arriba
			try {
				for (i in nav_elemento) {
					perfil.style.zIndex = '1'
					nav_elemento[i].style.transform = 'translate(0, 0)'
					nav_elemento[i].style.justifyContent = 'flex-start'
				}
			} catch(e) {}

			//Posiciona el icono
			try {
				for (i in icono) {
					icono[i].style.marginRight = '0.8vw'
				}
			} catch(e) {}

			hamburguesa_estado_pc = true;
		}//Fin del bucle if-else dentro del modo pc
		hamburguesa_estado_cel=true
	}

	else{
			nav.style.width = "200px"
			if (hamburguesa_estado_cel) {
				nav.style.left = '-300px'
				hamburguesa_estado_cel = false
			} else {
				nav.style.left = "0"
				hamburguesa_estado_cel = true
			}
	}

}//Fin de la funcion hamburguesa



