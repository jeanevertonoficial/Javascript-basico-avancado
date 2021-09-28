let pessoa = {
    nome: 'Jean',
    idade: '24',
    Profissão:'Programador',
    salario: '2.000',
    falar: function(){
        console.log("Eai jovem bora aumentar o meu salario.");
    }
}

console.log(pessoa);
//deletando uma propriedade
delete pessoa.nome;

console.log(pessoa.nome);


console.log(pessoa);

// adicionando uma nova propriedade
pessoa.casado = false;

console.log(pessoa.casado);
console.log(pessoa);