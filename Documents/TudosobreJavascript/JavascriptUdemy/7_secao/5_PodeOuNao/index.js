function Dirigir(nome,idade){
    if(idade >= 18) {
        console.log(`Ola ${nome}, você tem ${idade} de idade, pode tirar habilitação.`);
    } else {
        console.log(`${nome}, você é menor de idade.`);
    }
}

Dirigir('Jean',19);
//Dirigir('Jean',17);