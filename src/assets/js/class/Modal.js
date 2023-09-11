class Modal{
    static open({id,html,callback}){
        $('#modalDefault form').attr('id',id).html(html)
        $('#modalDefault').css({display:'flex'})
        setTimeout(_=>{
            $('#modalDefault form').css({transform:'scale(1)'}).find('i').off('click').on({click:Modal.close})
            $('#modalDefault .close').off('click').on({click:Modal.close})
            callback()
        },300)
    }

    static close(){
        $('#modalDefault form').css({transform:'scale(0)'})
        setTimeout(_=>{
            $('#modalDefault').css({display:'none'})
            $('#modalDefault form').attr('id','').html('')
        },300)
    }
}