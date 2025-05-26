document.getElementById("formCadastro").addEventListener("submit", function (e) {
    e.preventDefault();

    const nome = document.getElementById("nomeProduto").value;
    const quantidade = document.getElementById("quantidade").value;
    const preco = document.getElementById("preco").value;

    console.log("Produto:", nome, "Quantidade:", quantidade, "Preço:", preco);

    // Aqui você pode salvar o produto em localStorage, ou enviar via fetch/AJAX a um backend
    // Exemplo:
    // fetch("/api/produtos", { method: "POST", body: JSON.stringify({ nome, quantidade, preco }) })

    // Fecha o modal
    const modal = document.getElementById("produtoModal");
    modal.classList.add("hidden");
  });