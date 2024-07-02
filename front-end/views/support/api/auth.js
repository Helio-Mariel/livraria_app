const apiBaseUrl = 'http://localhost/livraria_app/back-end/index.php'

document.getElementById('sign_up').addEventListener('submit', function (event) {
    event.preventDefault()

    const nome = document.getElementById('nome').value
    const apelido = document.getElementById('apelido').value
    const password = document.getElementById('password').value
    const nacionalidade = document.getElementById('nacionalidade').value
    const BI = document.getElementById('BI').value
    const n_telefone = document.getElementById('n_telefone').value
    const email = document.getElementById('email').value

    const profissao = document.getElementById('profissao').value
    const morada = document.getElementById('morada').value

    console.log(nome, apelido, password, nacionalidade, BI, n_telefone, email, profissao, morada)

    axios.post(`${apiBaseUrl}/user`, { nome, apelido, password, nacionalidade, BI, n_telefone, email, profissao, morada }
    ).then(response => {
        alert("Sucesso")
        window.location.href = '/livraria_app/front-end/views/index.html'
    }).catch(error => {
        alert("Erro")
    })
})

document.getElementById('login').addEventListener('submit', function (event) {
    event.preventDefault();

    const email = document.getElementById('email').value
    const password = document.getElementById('password').value

    axios.post(`${apiBaseUrl}/cliente/login`, { email, password }
    ).then(response => {
        alert("Sucesso")
        window.location.href = '/livraria_app/front-end/views/index.html'
    }).catch(error => {
        alert("Erro")
    });

})

document.getElementById('admin-login').addEventListener('submit', function (event) {
    event.preventDefault()

    const username = document.getElementById('username').value
    const password = document.getElementById('password').value

    axios.post(`${apiBaseUrl}/admin/login`, { username, password }
    ).then(response => {
        alert("Sucesso")
        window.location.href = '/livraria_app/front-end/views/admin/index.html'
    }).catch(error => {
        alert("Erro")
    })
})




