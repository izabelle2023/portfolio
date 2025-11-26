// Scroll suave para navegação
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

// Animação de carregamento usando ScrollReveal
window.addEventListener('load', () => {
    // Animação para os projetos
    ScrollReveal().reveal('.card', {
        duration: 1000,
        origin: 'bottom',
        distance: '20px',
        interval: 300
    });

    // Animação para o cabeçalho
    ScrollReveal().reveal('header', {
        duration: 1500,
        origin: 'top',
        distance: '30px',
        delay: 500
    });

    // Animação para habilidades
    ScrollReveal().reveal('.skills', {
        duration: 1200,
        origin: 'left',
        distance: '40px',
        delay: 800
    });
});

// Interatividade do botão de contato
const contactBtn = document.querySelector('.contact-btn');
if (contactBtn) {
    contactBtn.addEventListener('click', function () {
        alert('Obrigado por entrar em contato! Vou responder o mais breve possível.');
    });
}

// Exibição de uma saudação dinâmica com base na hora do dia
const greetingElement = document.querySelector('.greeting');
if (greetingElement) {
    const currentHour = new Date().getHours();
    let greetingMessage = '';

    if (currentHour < 12) {
        greetingMessage = 'Bom dia!';
    } else if (currentHour < 18) {
        greetingMessage = 'Boa tarde!';
    } else {
        greetingMessage = 'Boa noite!';
    }

    greetingElement.innerText = greetingMessage;
}

// Carregamento de temas dinâmicos (Light/Dark mode)
const themeToggleBtn = document.querySelector('.theme-toggle');
const currentTheme = localStorage.getItem('theme') || 'light';

// Aplica o tema carregado ou define o padrão
document.body.classList.add(currentTheme);

// Função para alternar entre os temas
if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', () => {
        const newTheme = document.body.classList.contains('dark') ? 'light' : 'dark';
        document.body.classList.toggle('dark');
        localStorage.setItem('theme', newTheme);
    });
}

// Efeito de digitação no cabeçalho
const typingElement = document.querySelector('.typing');
if (typingElement) {
    const words = ['Desenvolvedora Front-end', 'Criadora de soluções', 'Apaixonada por tecnologia'];
    let wordIndex = 0;
    let letterIndex = 0;
    let typingSpeed = 150; // velocidade da digitação
    let eraseSpeed = 75; // velocidade de apagar

    function type() {
        if (letterIndex < words[wordIndex].length) {
            typingElement.innerHTML += words[wordIndex].charAt(letterIndex);
            letterIndex++;
            setTimeout(type, typingSpeed);
        } else {
            setTimeout(erase, 1000); // aguarda 1 segundo e apaga
        }
    }

    function erase() {
        if (letterIndex > 0) {
            typingElement.innerHTML = words[wordIndex].substring(0, letterIndex - 1);
            letterIndex--;
            setTimeout(erase, eraseSpeed);
        } else {
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(type, 1000); // aguarda 1 segundo e começa a digitar novamente
        }
    }

    // Inicia o efeito de digitação
    type();
}
