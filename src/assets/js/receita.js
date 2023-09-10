$(window).on({load:_=>{
    buscar()
    buscarOrigem()
    $('#receita').on({submit:salvar})
    $('textarea').on('paste input',Util.contador)
    $('#valor').mask('9.999.990,00',{reverse:true})
}})