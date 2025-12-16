// Rolagem suave até a seção de projetos
document.getElementById("btn-projeto").addEventListener("click", () => {
  const sec = document.getElementById("projetos");
  if (sec) {
    sec.scrollIntoView({ behavior: "smooth" });
  }
});

// Abrir GitHub em nova aba (troque o link pelo seu)
document.getElementById("btn-github").addEventListener("click", () => {
  window.open("https://github.com/seu-usuario", "_blank");
});
