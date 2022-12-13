// Merubah input data hex color ke rgb 
function printforeColor(ev) {
  const color = ev.target.value
  const r = parseInt(color.substr(1,2), 16)
  const g = parseInt(color.substr(3,2), 16)
  const b = parseInt(color.substr(5,2), 16)
  var theColor = (`${r},${g},${b}`);
  $("#fore_color").val(theColor);
}
function printbackColor(ev) {
  const color = ev.target.value
  const r = parseInt(color.substr(1,2), 16)
  const g = parseInt(color.substr(3,2), 16)
  const b = parseInt(color.substr(5,2), 16)
  var theColor = (`${r},${g},${b}`);
  $("#back_color").val(theColor);
}

