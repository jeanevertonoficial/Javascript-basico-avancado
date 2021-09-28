let a = 18; // escopo global

function multiplicar(x,y){
    let a = x * y;

    if(a > 10) {

        let a = 0;
        a++; 
        console.log(a); // retorna o valor do A dentro do if

    }
    console.log(a);
}

// retora o valor do A do escopo global 
console.log(a);

//passando o parametro para a funcao multiplicar 
multiplicar(3,7);


let b = 18; 

function somar(d,c) {
    let b = d + c;
    
    if(b > c) {
        let c = 25;

        console.log(c); // retorna 25, porque o C recebe 25 e o B não recebe valor algum
    }
    console.log(b);
}
somar(9,10);

console.log(b);