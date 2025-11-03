document.querySelectorAll('.tab21').forEach(tab => {
  tab.addEventListener('click', () => {
    document.querySelectorAll('.tab21').forEach(t => t.classList.remove('active'));
    tab.classList.add('active');

    const isLogin = tab.dataset.tab === 'login';
    document.getElementById('loginForm').classList.toggle('hidden21', !isLogin);
    document.getElementById('registerForm').classList.toggle('hidden21', isLogin);
  });
});
