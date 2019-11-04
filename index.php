<?php require "header.php" ?>
<main>
  <div id="vehsearch">
    SEARCH FOR VEHICLE
    <input type="text" id="vin-stk-search-box" value="" placeholder="Enter VIN or Stock#">
    <div id="searchbtns">
    <button type="button" id="searchbtn1" onclick="searchby('vin')" name="btn-search-vin">Search by VIN</button>
    <button type="button" id="searchbtn2" onclick="searchby('stk')" name="btn-search-stk">Search by Stock</button>
    </div>
  </div>
</main>

<div id="vehinfo-container"></div>
<?php require "footer.php" ?>
