// função tradicional
function imprimirConsole() {
    console.log("olá mundo!");
}

imprimirConsole();

// função que passa por parametro o valor
function imprimirNumero(num) {
    console.log(`o numero é ${num}`);
}
imprimirNumero(2);
imprimirNumero(5);
imprimirNumero(10);

// função anonima
const numeroAleatorio = function () {
    console.log(Math.random());
}

numeroAleatorio();