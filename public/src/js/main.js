let nomeCidadeCard = document.getElementById("nomeCidadeCard");

btnProcurar.addEventListener('click', () => {
    let nomeCidade = document.getElementById('cidade').value;
    nomeCidadeCard.textContent = nomeCidade;
 });