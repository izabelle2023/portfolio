// Função para rolagem suave
function scrollToSection(id) {
  const section = document.getElementById(id);
  if (section) section.scrollIntoView({ behavior: "smooth", block: "start" });
}

// Botões
document.getElementById("btn-projeto")?.addEventListener("click", () => scrollToSection("projetos"));
document.getElementById("btn-github")?.addEventListener("click", () => {
  window.open("https://github.com/izabelle2023", "_blank");
});
