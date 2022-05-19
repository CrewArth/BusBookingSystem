<!DOCTYPE html>
<html>
<body>

<p>Choose an option in the drop-down list and display that option.</p>

<form>
  <select id="mySelect" onchange="myFunction()">
      <option value="1">Vadodara</option>
      <option value="2">Ahmedabad</option>
      <option value="3">Surat</option>
      <option value="4">Rajkot</option>
      <option value="5">Godhra</option>

  </select>
</form>

<p id="demo"></p>

<script>
function myFunction() {
  var x = document.getElementById("mySelect");
  var i = x.selectedIndex;
  document.getElementById("demo").innerHTML = x.options[i].text;
}
</script>
<select id="mySelect" onchange="myFunction()">
<option>Mumbai</option>
<option>Delhi</option>
<option>Udaipur</option>
<option>Kedarnath</option>
<option>Sikkim</option>
</select>


</body>
</html>
