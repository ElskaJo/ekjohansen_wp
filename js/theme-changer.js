

   // DOM Elements

    const darkButton = document.getElementById('dark');
    const lightButton = document.getElementById('light');
    const defaultButton = document.getElementById('default');
    const body = document.body;


    // Apply the cached theme on reload

    const theme = localStorage.getItem('theme');
    const isDefault = localStorage.getItem('default');

    if (theme) {
      body.classList.add(theme);
      isDefault && body.classList.add('default');
    }

    // Button Event Handlers

    darkButton.onclick = () => {
      if (body.classList.contains('light')) {
        body.classList.replace('light', 'dark');
      } else {
        body.classList.add('dark');
      }
      
      localStorage.setItem('theme', 'dark');
    };

    lightButton.onclick = () => {
      if (body.classList.contains('dark')) {
        body.classList.replace('dark', 'light');
      } else {
        body.classList.add('light');
      }
      
      localStorage.setItem('theme', 'light');
    };

    defaultButton.onclick = () => { 
        body.classList.remove('light', 'dark');
        localStorage.setItem('theme', 'default');
    };
