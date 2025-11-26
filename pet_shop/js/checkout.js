// checkout.js

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const pagamentoSelect = document.getElementById("pagamento");
    const pagamentoExtra = document.getElementById("pagamento-extra");

    // Atualiza opções de pagamento
    pagamentoSelect.addEventListener("change", function () {
        pagamentoExtra.innerHTML = "";

        if (this.value === "cartao") {
            pagamentoExtra.innerHTML = `
        <input type="text" id="numero_cartao" name="numero_cartao" placeholder="Número do Cartão" required>
        <input type="text" id="validade" name="validade" placeholder="Validade (MM/AA)" required>
        <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
      `;
        } else if (this.value === "pix") {
            pagamentoExtra.innerHTML = `<p>Escaneie o QR Code para pagar via PIX</p><img src="qrcode.png" width="150">`;
        } else if (this.value === "boleto") {
            pagamentoExtra.innerHTML = `<p>Um boleto será gerado após a finalização da compra.</p>`;
        }
    });

    // Captura e exibe os dados do cliente no resumo
    form.addEventListener("submit", function (e) {
        e.preventDefault(); // impede envio direto para validar

        // Capturar dados do cliente
        const nome = document.getElementById("nome").value;
        const cpf = document.getElementById("cpf").value;
        const email = document.getElementById("email").value;
        const telefone = document.getElementById("telefone").value;
        const endereco = document.getElementById("endereco").value;
        const cidade = document.getElementById("cidade").value;
        const estado = document.getElementById("estado").value;

        // Atualizar resumo no lado esquerdo
        const resumo = document.querySelector(".resumo");
        let dadosClienteDiv = document.getElementById("dadosClienteResumo");

        if (!dadosClienteDiv) {
            dadosClienteDiv = document.createElement("div");
            dadosClienteDiv.id = "dadosClienteResumo";
            resumo.appendChild(dadosClienteDiv);
        }

        dadosClienteDiv.innerHTML = `
      <hr>
      <h4>Dados do Cliente</h4>
      <p><strong>Nome:</strong> ${nome}</p>
      <p><strong>CPF:</strong> ${cpf}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>Telefone:</strong> ${telefone}</p>
      <p><strong>Endereço:</strong> ${endereco}, ${cidade} - ${estado}</p>
    `;

        // Se tudo validado → envia
        alert("Dados confirmados! Seu pedido está sendo processado.");
        form.submit();
    });
});
