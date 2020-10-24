var numero;
var operacao;
function reinicio(){
    document.calculadora.visor.value = '';
}
function botao(num){ 
    numero = document.calculadora.visor.value += num;
}
function resultado(){ 
    operacao = document.calculadora.visor.value;
    document.calculadora.visor.value = eval(operacao);
}
	