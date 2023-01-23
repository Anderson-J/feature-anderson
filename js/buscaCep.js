document.getElementById('cep').addEventListener('blur', function(){
    let cep = this.value.replace(/[^0-9]/, "");
    
    let url = 'https://republicavirtual.com.br/web_cep.php?cep='+ cep + '&formato=json';

    fetch(url).then(resutlado => resutlado.json()).then(dados => {
        document.getElementById('endereco').value = dados.tipo_logradouro + ' ' + dados.logradouro;
    })
});