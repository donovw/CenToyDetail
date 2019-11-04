function searchby(param) {
  loadvehpage();
    let sparam = document.getElementById('vin-stk-search-box').value;
  fetch("scripts/getveh.php?by=" + param + "&sparam=" + sparam)
    .then(re => re.json())
    .then(js => {
      if (js === null) {
        alert("vehicle does not exist");
      } else {
        $('#vinnumfield').val(js['vin']).prop("readonly","1");
        $('#stocknumfield').val(js['stk']).prop("readonly","1");
        $('#year').val(js['year']).prop("readonly","1");
        $('#make').val(js['make']).prop("readonly","1");
        $('#model').val(js['model']).prop("readonly","1");
        $('#color').val(js['color']).prop("readonly","1");
        $('#statussel').val(js['status']);
        $('#comarea').val(js['comment']);
        $('#recoest').val(formatMoney(js['estimate'])).prop("readonly","1");
        document.querySelector("main").style.opacity = ".2";
        document.getElementById("vehinfo-container").style.display = "flex";
      }
    })
    .catch(err => {
      alert('error');
    }
  );
}

function closeInfoPopup() {
  $('#vehinfo-container').empty();
  document.querySelector("main").style.opacity = "1";
  document.getElementById("vehinfo-container").style.display = "none";

}
function loadvehpage() {
  fetch("includes/vehinfo.php" )
  .then((response) => response.text())
  .then((html) => {
      document.getElementById("vehinfo-container").innerHTML = html;
  });
}
