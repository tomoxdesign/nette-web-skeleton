 const toggleButton = document.getElementById('theme-toggle');
    const icon = document.getElementById('theme-icon');
    const html = document.documentElement;

    function setTheme(isDark) {
      if (isDark) {
        html.classList.add('dark-mode');
        html.classList.remove('light-mode');
        toggleButton.classList.add('dark-mode');
        toggleButton.classList.remove('light-mode');
        icon.textContent = 'light_mode';   // zobrazuje sluníčko = klikni pro světlý režim
        icon.classList.remove('dark');
        icon.classList.add('light');
      } else {
        html.classList.remove('dark-mode');
        html.classList.add('light-mode');
        toggleButton.classList.remove('dark-mode');
        toggleButton.classList.add('light-mode');
        icon.textContent = 'dark_mode';    // zobrazuje měsíc = klikni pro tmavý režim
        icon.classList.remove('light');
        icon.classList.add('dark');
      }
    }

    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(savedTheme === 'dark' || (!savedTheme && prefersDark));

    toggleButton.addEventListener('click', () => {
      const isDark = html.classList.contains('dark-mode');
      setTheme(!isDark);
      localStorage.setItem('theme', !isDark ? 'dark' : 'light');
    });