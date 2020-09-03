(function() {
    'use strict';
    //Regalo 
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {

        //Mapa de la libreria leaflet
        var map = L.map('mapa').setView([19.314302, -99.186888], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([19.314302, -99.186888]).addTo(map)
            .bindPopup('Boletos ya Disponibles GDLWEBCAMP')
            .openPopup()
            .bindTooltip('Tooltip')
            .openTooltip();




        //console.log("Listo x2");
        //Campos datos del usuario 

        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos pases 

        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_dosdias = document.getElementById('pase_dosdias');


        //Botones 
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var btnRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //extras 
        let camisas = document.getElementById('camisa_evento');
        let etiquetas = document.getElementById('etiquetas');


        //A partir del clicj en el boton se va calcular el precio 
        //EventListener le decimos a partir de que va a responder
        calcular.addEventListener('click', calcularMontos);
        pase_dia.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);

        function validarMail() {
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #eeeeee';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Ingresa un email valido';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red'
            }
        }

        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es Obligatorio';
                this.style.border = '1px solid red';
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #eeeeee';
            }

        }

        function calcularMontos(event) {
            event.preventDefault(); //Se le pasa un evento a la funcion "click"
            //Se necesita veririfcar que se ha elegido un regalo 
            if (regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus;
            } else {
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                    cantCamisas = parseInt(camisas.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                let totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);
                console.log(totalPagar);
                var listadoProductos = []; //Arreglo de elementos del carrito que se compren 
                if (boletosDia >= 1) {
                    listadoProductos.push(boletosDia + ' Pase(s) por dia');
                }
                if (boletos2Dias >= 1) {
                    listadoProductos.push(boletosDia + ' Pase(s) por  2 dias');
                }
                if (boletoCompleto >= 1) {
                    listadoProductos.push(boletoCompleto + ' Pase(s) Completo');
                }
                if (cantCamisas >= 1) {
                    listadoProductos.push(cantCamisas + ' Camisas');
                }
                if (cantEtiquetas >= 1) {
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');

                }

                lista_productos.style.display = "block"; //Para mostrarlo solo cuando este el resultado
                lista_productos.innerHTML = ''; //Para agregar el comentario 
                for (let index = 0; index < listadoProductos.length; index++) {
                    lista_productos.innerHTML += listadoProductos[index] + '<br/>'

                }

                suma.innerHTML = "$ " + totalPagar.toFixed(2);

            }
        }

        function mostrarDias() {
            // console.log(pase_dia.value);
            let boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                boletoCompleto = parseInt(pase_completo.value, 10) || 0;
            let viernes = document.getElementById('viernes'),
                sabado = document.getElementById('sabado'),
                domingo = document.getElementById('domingo');
            var diasElegidos = [];
            if (boletosDia > 0) {
                diasElegidos.push('vienes');
                console.log(diasElegidos);
            } else {
                viernes.style.display = 'none';
            }
            if (boletos2Dias > 0) {
                diasElegidos.push('viernes', 'sabado');
                console.log(diasElegidos);

            } else {
                sabado.style.display = 'none';
            }
            if (boletoCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo')
                console.log(diasElegidos);

            } else {
                domingo.style.display = 'none';
            }

            for (let index = 0; index < diasElegidos.length; index++) {
                document.getElementById(diasElegidos[index]).style.display = 'block';

            }


        }


    }); // Dom Cont Loaded 
})();

// $(function() {
//     //Programa de conferencias
//     $('.programa-evento .info-curso:first').show();
//     //$('div.ocultar').hide();
//     $('.menu-programa a').on('click', function() {
//         $('.ocultar').hide();
//         var enlace = $(this).attr('href');
//         $(enlace).faceIn(1000);
//         return false;
//     });
// });

$(function() {
    //Programa conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    //Funcion mostrar las diferentes opciones del menu 
    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide(); //Para ocultar la que no se le da click 
        var enlace = $(this).attr('href'); //Al id que se esta referiendo
        $(enlace).fadeIn(1000);
        return false; //Para que no de el brinco al inicio de la pagina 
    }); //Jquery sirve mucho para ahorrar codigo pero mas para plugins



    // Animaciones para los numros
    //No se usa first ni last porque no tienen numeracion
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1500); //1200 tiempo que se tarda
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 1500); //1200 tiempo que se tarda
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 2000); //1200 tiempo que se tarda
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1500); //1200 tiempo que se tarda


});