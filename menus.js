function openLoginMenu() {
  document.querySelector("main").style.opacity = ".2";
  document.getElementById('login-menu').style.display = "block";
}

function closeLoginMenu() {
  document.querySelector("main").style.opacity = "1";
  document.getElementById('login-menu').style.display = "none";
}


function openActionMenu() {
  document.getElementById('action-menu').style.display = "block";
  event.stopPropagation();
  document.addEventListener('click', function() {
      document.getElementById('action-menu').style.display = "none";
  })
}
