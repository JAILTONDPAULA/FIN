const request = function({url,data=null,method='get',start=true,callback=null}){
    $.ajax({
        url        ,
        type:method,
        data       ,
        dataType:'json',
        beforeSend(){
            start && $('#load').css({display:'flex'})
        },
        success(r){
            if(!r.success){
                $('#load').hide()
                alert('ERROR')
            }else{  
                callback ? callback(r.cod) : $('#load').hide()
            }
        },
        error(a,b,c){
            $('#load').hide()
            const msg = a.responseJSON?a.responseJSON.mesage:'Error inesperado'
            Util.mensagem(msg,'ERROR')
        }
    })
}