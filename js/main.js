const sections = ['home', 'sobre', 'modelos', 'sabores', 'unidades', 'contato'];
const content = document.getElementById('content');
const header = document.getElementById('main-header');

// Mapeamento de cores por seção
const sectionColors = {
  home: 'pink',
  sobre: 'lightblue',
  modelos: 'gold',
  sabores: 'white',
  unidades: 'lightblue',
  contato: 'pink'
};

// ⬇️ Carrega HTML e CSS da seção
function loadSection(section) {
  fetch(`sections/${section}.html`)
    .then(res => res.text())
    .then(html => {
      content.innerHTML = html;
      loadSectionCSS(section);
      setTimeout(() => {
        scrollToSection(section);
        observeScroll();
        updateMenu(section);
      }, 100);
    });
}

// ⬇️ Carrega CSS da seção
function loadSectionCSS(section) {
  const oldLink = document.querySelector('#section-css');
  if (oldLink) oldLink.remove();

  const link = document.createElement('link');
  link.rel = 'stylesheet';
  link.href = `css/${section}.css`;
  link.id = 'section-css';
  document.head.appendChild(link);
}

// ⬇️ Rola até a seção
function scrollToSection(id) {
  const target = document.getElementById(id);
  if (target) {
    target.scrollIntoView({ behavior: 'smooth' });
  }
}

// ⬇️ Observa rolagem e muda cor do cabeçalho + menu ativo
function observeScroll() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        header.style.backgroundColor = sectionColors[id] || 'pink';
        updateMenu(id);
      }
    });
  }, { threshold: 0.6 });

  document.querySelectorAll('section').forEach(sec => observer.observe(sec));
}

// ⬇️ Atualiza item ativo no menu
function updateMenu(activeSection) {
  document.querySelectorAll('.menu a').forEach(link => {
    const section = link.getAttribute('href')?.replace('#', '') || link.dataset.section;
    link.parentElement.classList.toggle('active', section === activeSection);
  });
}

// ⬇️ Muda estilo do header ao rolar
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

// ⬇️ Ativa links com data-section (menu ou botão)
document.querySelectorAll('[data-section]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const section = link.dataset.section;
    loadSection(section);
  });
});

// 🚀 Carrega a seção inicial
loadSection('home');



document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');

  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      menu.classList.toggle('show');
    });
  }
});
