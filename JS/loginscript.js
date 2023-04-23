const loginBtn = document.getElementById('login-btn');

loginBtn.addEventListener('click', (e) => {
  e.preventDefault();
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  
  if (username === 'admin' && password === 'password') {
    alert('Login Successful');
    window.location.href = 'dashboard.html';
  } else {
    alert('Incorrect Username or Password');
  }
});
