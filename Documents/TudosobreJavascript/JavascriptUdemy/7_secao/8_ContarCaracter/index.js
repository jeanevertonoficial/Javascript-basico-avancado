function contatorCaracter(nome) {
    if (nome.length >= 10) {
        console.log(`Texto muito longo`);
    } else if (nome.length < 10) {
        console.log('Texto dentro do limite.');
    }
}

console.log(contatorCaracter('Jean Everton'));