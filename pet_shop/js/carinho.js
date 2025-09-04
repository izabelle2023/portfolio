function exibirCarrinho() {
    const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
    const container = document.getElementById("carrinho-container");

    if (carrinho.length === 0) {
        container.innerHTML = "<p>Seu carrinho está vazio.</p>";
        return;
    }

    let html = "<ul>";
    let totalGeral = 0;

    carrinho.forEach(item => {
        html += `<li><strong>${item.nome}</strong> — ${item.qtd} unidade(s) — R$${item.total.toFixed(2)}</li>`;
        totalGeral += item.total;
    });

    html += `</ul><p><strong>Total: R$${totalGeral.toFixed(2)}</strong></p>`;
    container.innerHTML = html;
}

function limparCarrinho() {
    localStorage.removeItem("carrinho");
    exibirCarrinho();
    alert("Carrinho limpo!");
}

exibirCarrinho();