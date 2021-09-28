let maiordeIdade = 17;
let cnh = false;

if (maiordeIdade >= 18 && cnh == false){
    console.log(`É maior de idade, mais não tem CNH.`);
}else if (maiordeIdade >= 18 && cnh == true){
    console.log(`É maior de idade e possui CNH então pode dirigir.`);
} else {
    console.log(`É menor de idade e não possui CNH.`);
}