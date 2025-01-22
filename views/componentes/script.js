const arquivos = [
    { name: "nav", file: "componentes/navbar.html" },
    { name: "footer", file: "componentes/footer.html" },
    { name: "banner", file: "componentes/banner.html" },

  ];

arquivos.forEach((arquivo) => {
    
    fetch (arquivo.file)
    .then(response => response.text())
    .then(html => {
        const head = document.getElementById(arquivo.name)
        head.innerHTML = html;
    })
    .catch(error => console.error('Nav deu' + arquivo.file +  ' | ' + arquivo.name , error))
  });

