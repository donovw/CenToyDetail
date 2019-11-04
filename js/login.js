function logMeIn() {
  event.preventDefault();
  let form = document.getElementById('loginform');
  let data = new FormData(form);
  fetch("scripts/login.php", {
      method: 'POST',
      body: data
    }).then(re => re.text())
    .then(text => alert(text));
}
