var n1 = document.getElementById("n1");
var n2 = document.getElementById("n2");
var resultado = document.getElementById("resultado");

somar = () => {
    var somar = parseInt(n1.value) + parseInt(n2.value);
    resultado.innerHTML = somar;
}

subtrair = () => {
    var result = parseInt(n1.value) - parseInt(n2.value);
    resultado.innerHTML = result;
}

multiplicar = () => {
    var result = parseInt(n1.value) * parseInt(n2.value);
    resultado.innerHTML = result;
}

dividir = () => {
    var result = parseInt(n1.value) / parseInt(n2.value);
    resultado.innerHTML = result;
}

limpar = () => {
   n1.value = "";
   n2.value = '';
   resultado.innerHTML= '';
}

