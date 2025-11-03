function showSection(index) {
      const content = document.getElementById('content');
      content.style.transform = `translateX(-${index * 100}%)`;

      const buttons = document.querySelectorAll('.nav-buttons button');
      buttons.forEach(btn => btn.classList.remove('active'));
      buttons[index].classList.add('active');
    }