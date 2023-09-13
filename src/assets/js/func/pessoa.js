const buscar = function(){
    const callback = function(r){
        $('table tr:not(.cabecalho)').remove()
        $('.valor p').text('0')

        let valor = 0

        const code = r.map((t,i)=>{
            valor++
            let html = `<tr class="${i%2===0?'':'up'}">`
                html+= `    <td class="center">${t.name}</td>`
                html+= `    <td class="center">${t.kinship}</td>`
                html+= `    <td class="center linkII" data-pessoa='${JSON.stringify(t)}'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor"><path d="M7,14.94L13.06,8.88L15.12,10.94L9.06,17H7V14.94M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M16.7,9.35L15.7,10.35L13.65,8.3L14.65,7.3C14.86,7.08 15.21,7.08 15.42,7.3L16.7,8.58C16.92,8.79 16.92,9.14 16.7,9.35M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2" /></svg></td>`
                html+= `    <td class="center" data-delete='${JSON.stringify(t)}'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M16,10V17A1,1 0 0,1 15,18H9A1,1 0 0,1 8,17V10H16M13.5,6L14.5,7H17V9H7V7H9.5L10.5,6H13.5Z" /></svg></td>`
                html+= `</tr>`
            return html
        }).join('')

        $('table').append(code)
        // $('[data-text]').on({click:mostrarMensagem})
        $('[data-pessoa]').on({click:adicionar})
        $('[data-delete]').on({click:exclui})
        $('#load').hide()
        $('.valor p').text(valor)
    }
    request({url:'http://localhost:84/pessoas',start:true,callback})
}

const mostrarMensagem = function(){
    let mensagem = $(this).data('text')
    Util.mensagem(mensagem,'OBSERVAÇÃO')
}

const adicionar = function(){
    let data = $(this).is('[data-pessoa]')?$(this).data('pessoa'):null;
    $.get('/template-pessoa/',data,function(html){
        const callback = function(){
            $('#pessoas').off('submit').on({submit:salvar})
        }
        Modal.open({id:'pessoas',html,callback})
    })
}

const exclui = function(){
    let data = $(this).data('delete');
    $.get('/template-delete/',{id:data.id,registro:data.name},function(html){
        const callback = function(){
            $('#apagar').off('submit').on({submit:apagar})
        }
        Modal.open({id:'apagar',html,callback})
    })
}

const apagar = function(e){
    e.preventDefault()
    const callback = function(r){
        buscar()
        Modal.close()
    }
    request({url:`http://localhost:84/pessoas/${$('#apagar #id').val()}`,method:'DELETE',callback,start:true})

}

const buscarOrigem = function(){
    const callback = function(r){
        const code = r.map((t,i)=>`<option value="${t}">${t}</option>`).join('')
        $('#list_origem').html(code)
    }
    request({url:'http://localhost:84/origem-receitas/descricao',callback,start:false})
}

const salvar = function(e){
    e.preventDefault()
    const method = $('#pessoas #id').length > 0?'PUT':'POST'
    const callback = function(r){
        buscar()
        Modal.close()
    }
    request({url:'http://localhost:84/pessoas',method,data:$(this).serialize(),start:true,callback})
}