document.getElementById('formCadastro').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);
  
    fetch('/php/cadastrarProduto.php', {
      method: 'POST',
      body: formData
    })
      .then(res => res.json())
      .then(data => {
        if (data.sucesso) {
          alert('Produto cadastrado com sucesso!');
          fecharModal();
          this.reset();
        } else {
          alert('Erro: ' + data.erro);
        }
      })
      .catch(err => {
        alert('Erro na requisição.');
        console.error(err);
      });
  });
  