function multiplicarTresNumeros(x, y ,z) {
    return x * y * z;
}
console.log(multiplicarTresNumeros(2,3,4));


const mult = multiplicarTresNumeros(5,4,8);

console.log("O valor do mult é " + mult);

function podeDirigir(idade, cnh) {
    if(idade >= 18 && cnh == true){
        console.log("Pode dirigir.");
    } else {
        console.log("Não pode dirigir.");
    }
}

podeDirigir(15, false);
podeDirigir(18, true);
podeDirigir(19, false);
podeDirigir(19, 1);