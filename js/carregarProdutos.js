async function carregarProdutos() {
    try {
      const resposta = await fetch('/php/buscar_produtos.php'); // caminho correto do seu backend
      const produtos = await resposta.json();

      const container = document.getElementById('lista-produtos');
      container.innerHTML = '';

      produtos.forEach(produto => {
        const card = document.createElement('div');
        card.className = 'p-4 bg-white rounded-lg shadow dark:bg-gray-800';

        card.innerHTML = `
          <h2 class="text-xl font-bold mb-2 text-gray-800 dark:text-white">${produto.nome}</h2>
          <p class="text-gray-600 dark:text-gray-300">Categoria: ${produto.categoria}</p>
          <p class="text-gray-600 dark:text-gray-300">Preço: R$ ${parseFloat(produto.preco).toFixed(2)}</p>
          <p class="text-gray-600 dark:text-gray-300">Estoque: ${produto.quantidade}</p>
        `;
        container.appendChild(card);
      });
    } catch (erro) {
      console.error('Erro ao carregar os produtos:', erro);
    }
  }

  // Carregar ao abrir a página
  document.addEventListener('DOMContentLoaded', carregarProdutos);