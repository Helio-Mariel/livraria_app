const apiBaseUrl = 'http://localhost/livraria_app/back-end/index.php/'

const output = document.getElementById('apiResponse')
document.addEventListener('DOMContentLoaded', function () { getCliente() })

function getCliente() {
    axios.get(`${apiBaseUrl}/user`)
        .then(response => {
            const clientes = response.data
            const tableBody = document.querySelector('#clientesTable tbody')
            tableBody.innerHTML = ''

            console.log(clientes)

            clientes.forEach(cliente => {
                const row = `<tr>
          <td>${cliente.id_cliente}</td>
          <td>${cliente.nome}</td>
          <td>${cliente.apelido}</td>
          <td>${cliente.email}</td>
          <td> <button onclick="deleteClient(${cliente.id_cliente})">Deletar</button>
          </td>           
        </tr>`
                tableBody.innerHTML += row
            })
        })
        .catch(error => output.textContent = error)
}