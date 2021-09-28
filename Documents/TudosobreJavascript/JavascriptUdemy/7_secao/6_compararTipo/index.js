function verificaTipo(dado) {

    if(typeof dado == 'string'){
        console.log(`Este dado é uma String`);
    } else if (typeof dado == 'number') {
        console.log(`Esta dado é igual a number`);
    } else if (typeof dado == 'boolean'){
        console.log('Este dado é igual a Boolean');
    }
}

verificaTipo(true);
verificaTipo(152);
verificaTipo('Jean');