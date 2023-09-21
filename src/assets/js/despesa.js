$(window).on({load:_=>{
    buscar()
    $('#receitas>button').on({click:adicionar})
    buscarDespesa()
    buscarTipos()
    buscarMarcas()
}})