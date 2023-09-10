const buscar = function(){
    const callback = function(r){
        $('table tr:not(.cabecalho)').remove()
        const code = r.map((t,i)=>{
            let html = `<tr class="${i%2===0?'':'up'}">`
                html+= `    <td>${t.origin.description.toUpperCase()}</td>`
                html+= `    <td class="center">${t.value.toLocaleString('pt-BR',{style:'currency',currency:'BRL'})}</td>`
                html+= `    <td class="center">${t.registrationDate.split('-').reverse().join('/')}</td>`
                html+= `    <td class="center">${t.year}/${t.month.toString().padStart(2,"0")}</td>`
                html+= `    <td class="center">${t.monthly}</td>`
                html+= `    <td class="center link">${t.observation?`<svg data-text='${t.observation}' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px" fill="currentColor"><path d="M12,3C17.5,3 22,6.58 22,11C22,15.42 17.5,19 12,19C10.76,19 9.57,18.82 8.47,18.5C5.55,21 2,21 2,21C4.33,18.67 4.7,17.1 4.75,16.5C3.05,15.07 2,13.13 2,11C2,6.58 6.5,3 12,3M11,14V16H13V14H11M11,12H13V6H11V12Z" /></svg>`:``}</td>`
                html+= `</tr>`
            return html
        }).join('')

        $('table').append(code)
        $('[data-text]').on({click:mostrarMensagem})
        $('#load').hide()
    }
    request({url:'http://localhost:84/receitas',start:true,callback})
}

const mostrarMensagem = function(){
    let mensagem = $(this).data('text')
    Util.mensagem(mensagem,'OBSERVAÇÃO')
}

const buscarOrigem = function(){
    const callback = function(r){
        const code = r.map((t,i)=>`<option value="${t}">${t}</option>`).join('')
        $('#list_origem').html(code)
    }
    request({url:'http://localhost:84/origem-receitas/descricao',callback})
}

const salvar = function(e){
    e.preventDefault()
    let form = this
    const callback = function(r){
        $('#origem,#valor,#data,#observacao').val('')
        $('#observacao').trigger('paste')
        $('#mensal').val('N')
        buscar()
        buscarOrigem()
    }
    request({url:'http://localhost:84/receitas',method:'POST',data:$(this).serialize(),start:true,callback})
}