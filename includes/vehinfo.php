<div id="vehinfo">
  <div class="vehnumbers">
    <div id="vinnum">
    VIN:
    <br>
    <input type="text" id="vinnumfield" value="" maxlength="17"  placeholder="VIN Number">
    </div>
  <div id="stocknum">
    Stock #:
    <br>
    <input type="text" id="stocknumfield" value=""  maxlength="6" placeholder="Stock #">
  </div>

</div>
  <table>
    <thead>
      <th>Year</th>
      <th>Make</th>
      <th>Model</th>
      <th>Color</th>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" id="year" value=""  placeholder="year"> </td>
        <td> <input type="text" id="make" value=""  placeholder="make"> </td>
        <td> <input type="text" id="model" value=""  placeholder="model"> </td>
        <td> <input type="text" id="color" value=""  placeholder="color"> </td>
      </tr>
    </tbody>
  </table>
  <div id="status">
  <select class="statusselect" id="statussel">
    <option value="options">options</option>
  </select>
  </div>
  <div id="comment">
    COMMENTS:
    <textarea id="comarea" rows="8" cols="45"></textarea>
  </div>
  <div id="est">
      RECON ESTIMATE:
      <input type="text" id="recoest" step="0.01"  placeholder="Estimate" value="">
  </div>
  <div id="save-exit-vehinfo">
    <button type="button" id="btn-cancel-vehinfo" onclick="closeInfoPopup()">Cancel</button>
    <button hidden type="button" id="btn-view-checklist">Check Sheet</button>
    <button type="button" id="btn-update-vehinfo">Save and Exit</button>
  </div>
</div>
