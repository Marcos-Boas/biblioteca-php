$(document).ready(function (){
    console.log("hellow word!")
    
    list()
}) 

var ordenado = false


function toggleFav(id) {

    const estadoInicial = $(`#fav-${id}`).val()
    const novoEstado = estadoInicial == '1' ? '0' : '1'

    const data = {
        id,
        favorito: novoEstado
    }

    $.post("./services/update.php", data).then(res => {
        location.reload()
    })
}


async function list() {
    const response = await $.get("./services/get.php").then(res => JSON.parse(res))
    console.log(response)
    createCard(response)
} 

function createCard(data) {
    let customHtml = ''

    data.forEach(card => {
        const { id, titulo, descricao, url, favorito} = card

        const initial = favorito == 1
        const urlImg = initial ? 'assets/images/heart-fill.svg' : 'assets/images/heart.svg'
        
        let cardHtml = `
            <div class="grid-item">
                <div class="div-img">
                    <img src="${url}" alt="" class="img-livro"/>
                    <input type="hidden" name="fav" id="fav-${id}" value="${favorito}" />
                    <a onclick='toggleFav(${id})'>
                        <img src="${urlImg}" class="img-fav" id="img-fav-${id}">
                    </a>
                    <a onclick='deleteBook(${id})'>
                        <img src="assets/images/trash-thin.svg" class="img-trash">
                    </a>
                </div>
                
                <div class="informacoes">
                    <h4><b>${titulo}</b></h4>
                    <span>${descricao}</span>
                </div>
            </div>
            `

            customHtml += cardHtml

    })

    let buttonQueTinhaESomiu = `<button class="btn-adicionar" data-bs-toggle="modal" data-bs-target="#adicionarModal">Adicionar</button>`

    customHtml += buttonQueTinhaESomiu

    $('#card-container').html(customHtml)
}


function enviarLivro() {
    console.log('Enviando os dados...')

    const titulo = $('#titulo').val() ?? ''
    const descricao = $('#descricao').val() ?? ''
    const url = $('#url-img').val() ?? ''

    if(titulo === '' || descricao === '' || url === '')
        return alert("Preencha todos os campos")

    const data ={
        titulo,
        descricao,
        url,
        favorito: '0'
    }

    $.post("./services/insert.php", data).then(res => {
        location.reload()
    })
}


async function orderByFav(){
    if(ordenado === true)
        location.reload()

    const response = await $.get("./services/orderByFav.php").then(res => JSON.parse(res))
    console.log(response)
    createCard(response) 
    return ordenado = true   
    
}



function deleteBook(id){

    const data = {
        id,
    }
    

    if(confirm(`Deseja apagar o livro id: ${id}?`)){
        $.post("./services/delete.php", data).then(res => {
            location.reload()
        })
    }

    return
}




