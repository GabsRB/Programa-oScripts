//2) escreva em js uma função que receba x e y, e retorne 2x^(2)-2
//Função com argumento e com retorno
//Funçao com dois parametros
function expressaoMatematica(x, y) {
    //Math.pow calcula a expressão
    return 2 * Math.pow(x, 2) - 2;
}
//Chamando a função com argumentos e exibindo o retorno
var resultado = expressaoMatematica(3, 4);
console.log(resultado);