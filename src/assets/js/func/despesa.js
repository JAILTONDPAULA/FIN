const buscar = function(){
    const callback = function(r){
        $('table tr:not(.cabecalho)').remove()
        $('.valor p').text('R$ 0,00')

        let valor = 0.0

        const code = r.map((t,i)=>{
            valor+=t.value
            let html = `<tr class="${i%2===0?'':'up'}">`
                html+= `    <td>${t.origin.description.toUpperCase()}</td>`
                html+= `    <td class="center">${t.value.toLocaleString('pt-BR',{style:'currency',currency:'BRL'})}</td>`
                html+= `    <td class="center">${t.registrationDate.split('-').reverse().join('/')}</td>`
                html+= `    <td class="center">${t.year}/${t.month.toString().padStart(2,"0")}</td>`
                html+= `    <td class="center">${t.monthly}</td>`
                html+= `    <td class="center${t.observation?` link" data-text='${t.observation}'`:`"`}>${t.observation?`<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor"><path d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3M11,14V16H13V14H11M11,12H13V6H11V12Z" /></svg>`:``}</td>`
                html+= `    <td class="center linkII" data-receita='${JSON.stringify(t)}'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor"><path d="M7,14.94L13.06,8.88L15.12,10.94L9.06,17H7V14.94M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M16.7,9.35L15.7,10.35L13.65,8.3L14.65,7.3C14.86,7.08 15.21,7.08 15.42,7.3L16.7,8.58C16.92,8.79 16.92,9.14 16.7,9.35M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2" /></svg></td>`
                html+= `    <td class="center" data-delete='${JSON.stringify(t)}'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor"><path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4M16,10V17A1,1 0 0,1 15,18H9A1,1 0 0,1 8,17V10H16M13.5,6L14.5,7H17V9H7V7H9.5L10.5,6H13.5Z" /></svg></td>`
                html+= `</tr>`
            return html
        }).join('')

        $('table').append(code)
        $('[data-text]').on({click:mostrarMensagem})
        $('[data-receita]').on({click:adicionar})
        $('[data-delete]').on({click:exclui})
        $('#load').hide()
        $('.valor p').text(valor.toLocaleString('pt-BR',{style:'currency',currency:'BRL'}))
    }
    request({url:'http://localhost:84/receitas',start:true,callback})
}

const mostrarMensagem = function(){
    let mensagem = $(this).data('text')
    Util.mensagem(mensagem,'OBSERVAÇÃO')
}

const adicionar = function(){
    let data = $(this).is('[data-receita]')?$(this).data('receita'):null;
    $.get('/template-receita/',data,function(html){
        const callback = function(){
            $('#receita').off('submit').on({submit:salvar})
            $('textarea').on('paste input',Util.contador)
            $('#valor').mask('9.999.990,00',{reverse:true})
            buscarOrigem()
        }
        Modal.open({id:'receita',html,callback})
    })
}

const exclui = function(){
    let data = $(this).data('delete');
    $.get('/template-receita-delete/',data,function(html){
        const callback = function(){
            $('#apagar').off('submit').on({submit:apagarReceita})
        }
        Modal.open({id:'apagar',html,callback})
    })
}

const apagarReceita = function(e){
    e.preventDefault()
    const callback = function(r){
        buscar()
        Modal.close()
    }
    request({url:`http://localhost:84/receitas/${$('#apagar #id').val()}`,method:'DELETE',callback,start:true})

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
    let form = this
    const method = $('#receita #id').length > 0?'PUT':'POST'
    const callback = function(r){
        buscar()
        Modal.close()
    }
    request({url:'http://localhost:84/receitas',method,data:$(this).serialize(),start:true,callback})
}