
<?php
include_once __DIR__ . "/../templates/header.php";
include_once __DIR__ . "/../templates/alerts.php";

?>
<div class="register-form-div">
<form action="/register" method="POST">

<div class="field">
    <label for="firstName">First Name </label>
    <input type="text" name="firstName" id="firstName" placeholder="Enter you r name">
</div>

<div class="field">
    <label for="lastName">Last Name </label>

        <input type="text" name="lastName" id="lastName" placeholder="Enter you r last name">
</div>

<div class="field">
    <label for="password">Pasword </label>
    <input type="password" name="password" id="password" placeholder="Enter a pasword">
</div>

<input type="submit" class="boton" value="Create">
</form>
</div>