<html>
<head>
<title>Client side validation</title>
<link rel="stylesheet" type="text/css" href="validatecss.css">
</head>
<body>

<div class="pageContainer centerText">
<h2>Form Validation</h2>
<p>HTML5 and server-side validation</p>

<form method="post" action="validateconfirm.php" class="formLayout">

<div class="formGroup">
    <label>Email:</label>
    <input type="email" name="email" class="textbox" required placeholder="Email" maxlength="50" autofocus />
</div>

<div class="formGroup">
     <label>First name:</label>
     <input type="text" name="fname" class="textbox" autofocus required  
                      placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" />
</div>

<div class="formGroup">
      <label>Birthday:</label>
      <input type="date" name="birthday" class="textbox"  required 
                      placeholder="yyyy/mm/dd" title="birthday yyyy/mm/dd" />
</div>

<div class="formGroup">
       <label>Age:</label>
       <!-- using pattern since type="number" poorly supported -->
       <input type="number" name="age"class="textbox"  style="width:100px" required 
                      placeholder="age" title="age (1-99)" pattern="[1-9][0-9]?" />
</div>

<div class="formGroup">
        <label>State:</label>
        <input type="text" name="state" class="textbox" style="width:100px" required 
                      placeholder="ST" title="2-character state abbreviation" maxlength="2" pattern="[A-Za-z]{2}" />
</div>

<div class="formGroup">
         <label>Zip: </label>
         <input type="number" name="zip" class="textbox" style="width:100px" required 
                      placeholder="Zip" title="5-digit zip" maxlength="5" pattern="\d{5}" required />
</div>

<div class="formGroup">
        <label></label>
        <button type="submit" name="client">Submit form</button><br><br>
</div>

<div class="formGroup vertGap55">
        <label></label>
 <button type="submit" formnovalidate>Submit without HTML5 Validation</button>
</div>

</form>
<div><a href="?">Reload page</a></div>
</div>

</body>
</html>