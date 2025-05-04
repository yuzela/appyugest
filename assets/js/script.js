document.addEventListener("DOMContentLoaded", function () {
    AOS.init();
  });
  // assets/js/script.js
function changeLang(lang) {
    document.querySelectorAll("[data-pt]").forEach(el => {
      el.textContent = lang === "pt" ? el.getAttribute("data-pt") : el.getAttribute("data-en");
    });
  
    // Atualiza atributos title, placeholder etc.
    document.querySelectorAll("[data-pt-title]").forEach(el => {
      el.setAttribute("title", el.getAttribute(lang === "pt" ? "data-pt-title" : "data-en-title"));
    });
  }
  // assets/js/script.js

function changeLang(lang = 'pt') {
    document.querySelectorAll('[data-pt], [data-en]').forEach(el => {
      const pt = el.getAttribute('data-pt');
      const en = el.getAttribute('data-en');
  
      if (lang === 'pt' && pt) el.textContent = pt;
      if (lang === 'en' && en) el.textContent = en;
  
      // Se for input ou textarea, atualizar placeholder
      if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
        el.placeholder = lang === 'pt' ? pt : en;
      }
    });
  
    // Atualiza meta title
    document.querySelector('title').textContent = lang === 'pt'
      ? 'Yuzela Mídia | Transformando Ideias em Soluções'
      : 'Yuzela Midia | Turning Ideas into Solutions';
  
    // Atualiza botão
    document.getElementById('toggleLang').innerText = lang === 'pt' ? 'EN' : 'PT';
  }
  // assets/js/script.js

function changeLang(lang = 'pt') {
    document.querySelectorAll('[data-pt], [data-en]').forEach(el => {
      // Atualiza texto do elemento
      const ptText = el.getAttribute('data-pt');
      const enText = el.getAttribute('data-en');
  
      if (lang === 'pt' && ptText) {
        el.textContent = ptText;
      } else if (lang === 'en' && enText) {
        el.textContent = enText;
      }
  
      // Se for input ou textarea, atualiza o placeholder
      if ((el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') && el.placeholder) {
        el.placeholder = lang === 'pt' ? el.getAttribute('data-pt') : el.getAttribute('data-en');
      }
    });
  
    // Atualiza o título da página
    document.querySelector("title").textContent = lang === 'pt'
      ? 'Yuzela Mídia | Transformando Ideias em Soluções'
      : 'Yuzela Midia | Turning Ideas into Digital Solutions';
  }
  
  // Detecta idioma do navegador ao carregar a página
  document.addEventListener("DOMContentLoaded", function () {
    const userLang = navigator.language.slice(0, 2);
    if (userLang === 'en') {
      changeLang('en');
    } else {
      changeLang('pt');
    }
  });
  // assets/js/script.js

function changeLang(lang = 'pt') {
    // Troca todos os textos com data-pt e data-en
    document.querySelectorAll('[data-pt], [data-en]').forEach(el => {
      if (lang === 'pt' && el.getAttribute('data-pt')) {
        el.textContent = el.getAttribute('data-pt');
      } else if (lang === 'en' && el.getAttribute('data-en')) {
        el.textContent = el.getAttribute('data-en');
      }
  
      // Atualiza placeholders nos inputs
      if ((el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') && el.placeholder) {
        el.placeholder = lang === 'pt' ? el.getAttribute('data-pt') : el.getAttribute('data-en');
      }
    });
  
    // Atualiza título da página
    document.querySelector("title").textContent = lang === 'pt'
      ? 'Yuzela Mídia | Transformando Ideias em Soluções'
      : 'Yuzela Midia | Turning Ideas into Digital Solutions';
  }
  
  // Detecta idioma do navegador ao carregar
  document.addEventListener("DOMContentLoaded", function () {
    const userLang = navigator.language.slice(0, 2);
    if (userLang === 'en') {
      changeLang('en');
    } else {
      changeLang('pt');
    }
  
    AOS.init();
  });