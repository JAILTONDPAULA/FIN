class Util{
    static contador(){
        $(this).siblings('small').find('span').text($(this).attr('maxlength') - this.value.length)
    }

    static mensagem(mensagem,titulo){
        $('#mensagem').find('h6').text(titulo)
        $('#mensagem').find('p').text(mensagem)
        $('#mensagem').css({display:'flex'})
        setTimeout(_=>{
            $('#mensagem').find('div').slideDown(300)
        },300)

    }
}