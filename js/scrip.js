'use strict';

let precios = [];


class precioVenta{
    constructor(codigo,nombre,precio){
        this.codigo=codigo;
        this.nombre=nombre;
        this.precio=precio;
    }
}

//funcion para validar

function validateFields(){
        
    if (document.getElementById('codigo').value =="") {
        alert('Debe ingresar el codigo');
        return false;
    }

    if (document.getElementById('nombre').value=="") {
        alert('Debe ingresar el nombre');
        return false;

    }

    if (document.getElementById('precio').value=="") {
        alert('Debe ingresar el precio');
        return false;
    
    }

    return true;
}

//poblar arreglo
function addRecord(){
    let codigo=document.getElementById('codigo').value;
    let nombre=document.getElementById('nombre').value;
    let precio=document.getElementById('precio').value;

    precios.push(new precioVenta(codigo,nombre,precio));
}

function showData() {
    
    let rows="";

    for (let index = 0; index < precios.length; index++) {
        
        rows += '<tr>'
        rows += '<td>' + precio[index].codigo + '</td>'
        rows += '<td>' + precio[index].nombre + '</td>'
        rows += '<td>' + precio[index].precio + '</td>'    
        rows += '<tr>'
        
    }

    document.getElementById('listado').innerHTML = rows;
}

//funcion principal
function addData() {

     //Validar campos
     if (validateFields() == false) {
        return;

    }
    //poblar arreglo
    addRecord();

    //mostar arreglo
    showData();

    alert('Vamos bien');

    //limpiar controles
}