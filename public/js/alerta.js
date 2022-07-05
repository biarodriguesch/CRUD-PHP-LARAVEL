function buscarDados(params) {
    console.log(params);

    $('.data-nome').text(params.nome)
    $('.data-email').text(params.email)
    $('.data-idade').text(params.idade)
    $('.data-endereco').text(params.endereco)
    $('.data-telefone').text(params.telefone)
}
