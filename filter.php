<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Filterable Table</h2>
<p>Type something in the input field to search the table for first names, last names or emails:</p>  
<input id="myInput" type="text" placeholder="Search..">
<br><br>

<table>
  <thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>john@example.com</td>
  </tr>
  <tr>
    <td>Mary</td>
    <td>Moe</td>
    <td>mary@mail.com</td>
  </tr>
  <tr>
    <td>July</td>
    <td>Dooley</td>
    <td>july@greatstuff.com</td>
  </tr>
  <tr>
    <td>Anja</td>
    <td>Ravendale</td>
    <td>a_r@test.com</td>
  </tr>
    <tr>
    <td>Ajay</td>
    <td>Rane</td>
    <td>r@test.com</td>
  </tr>
    <tr>
    <td>Ziva</td>
    <td>singh</td>
    <td>ziva@test.com</td>
  </tr>
    <tr>
    <td>ram</td>
    <td>singh</td>
    <td>ram@test.com</td>
  </tr>  <tr>
    <td>suchita</td>
    <td>agrawal</td>
    <td>suchita@test.com</td>
  </tr>
  </tbody>
</table>
  
<script>
	//document get ready
	$(document).ready(function(){
//when key released then it shows result
  $("#myInput").on("keyup", function() {
  		//toLowerCase covert text into lower case that matches or search case sensitive.
			var value=$(this).val().toLowerCase();
			//filter function filter data and show result
		$("#myTable tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});

</script>
</body>
</html>