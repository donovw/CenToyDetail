function openLoginMenu() {
  event.stopPropagation();
  document.getElementById('login-menu').style.display = "block";
    document.addEventListener('click', closeLoginMenu);
    document.getElementById('login-menu').removeEventListener('click', closeLoginMenu);
}

function closeLoginMenu() {
  document.getElementById('login-menu').style.display = "none";
}


function openActionMenu() {
  document.getElementById('action-menu').style.display = "block";
  event.stopPropagation();
  document.addEventListener('click', function() {
      document.getElementById('action-menu').style.display = "none";
  })
}
