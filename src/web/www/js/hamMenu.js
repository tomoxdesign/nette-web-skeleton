// hamMenu.js – ovládání hamburger menu
document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');
  const menuIcon = document.getElementById('menu-icon');

  console.log('🍔 Hamburger menu inicializováno');

  const closeMenu = () => {
    menu.classList.remove('open');
    menu.classList.add('hidden');
    menuToggle.setAttribute('aria-expanded', 'false');
    menuIcon.textContent = 'menu';
    console.log('📁 Menu zavřeno (klik na odkaz nebo mimo menu)');
  };

  const openMenu = () => {
    menu.classList.add('open');
    menu.classList.remove('hidden');
    menuToggle.setAttribute('aria-expanded', 'true');
    menuIcon.textContent = 'close';
    console.log('📂 Menu otevřeno');
  };

  menuToggle.addEventListener('click', () => {
    if (menu.classList.contains('open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // Zavřít menu při kliknutí na odkaz
  menu.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth < 768) {
        closeMenu();
      }
    });
  });

  // Zavřít menu při kliknutí mimo menu a tlačítko menu (na mobilu)
  document.addEventListener('click', (event) => {
    const target = event.target;
    if (
      window.innerWidth < 768 && // jen na mobilu
      menu.classList.contains('open') && // pokud je menu otevřené
      !menu.contains(target) && // klik není uvnitř menu
      !menuToggle.contains(target) // ani na tlačítku menu
    ) {
      closeMenu();
    }
  });
});
