document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Impede o envio do formulário

  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  // Requisição AJAX para o backend em PHP
  var xhr = new XMLHttpRequest();
  xhr.open('POST', '../../api/v2/login.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Processar a resposta do backend
      var response = JSON.parse(xhr.responseText);
      if (response.success) {
        window.location.href = '../dashboard/dashboard.html'; // Redireciona para a página de dashboard
      } else {
        console.error('Login falhou. Verifique as credenciais.');
      }
    } else {
      console.error('Erro na requisição. Status: ' + xhr.status);
    }
  };
  xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
});
