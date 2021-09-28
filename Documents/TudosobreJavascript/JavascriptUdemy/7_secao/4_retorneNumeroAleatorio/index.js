function ImprimirNumAleatorio(num){
    // floor arredonda para baixo o numero
    //random imprimi numero aleatorios
        return Math.floor(Math.random() * num) + 1;
       
}

console.log(ImprimirNumAleatorio(1250));
console.log(ImprimirNumAleatorio(50));