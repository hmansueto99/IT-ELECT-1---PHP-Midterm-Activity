<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>

  <style>
  body {
    font-family: Arial, sans-serif;
    background: url("typer.gif") no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .form-container {
    background: rgba(255, 255, 255, 0.2);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    width: 350px;
    backdrop-filter: blur(5px);
  }

  /* ✅ Centered logo */
  .logo-container {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
  }
  .logo-container img {
    max-width: 100px;
    height: auto;
  }

  .form-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }

  .form-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  .form-container input,
  .form-container select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .form-container select {
    background: white;
  }

  .btn-container {
  display: flex;
  justify-content: center;   /* horizontally center the group */
  align-items: center;       /* vertically align if needed */
  gap: 20px;                 /* space between buttons */
  width: 100%;               /* make the container span the form */
  margin-top: 15px;          /* optional spacing above */
}

.btn {
  width: 120px;              /* same fixed width for both */
  padding: 10px;
  background: #1ad4cb;
  color: white;
  text-align: center;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;     /* ensure they size correctly */
}
.btn:hover {
  background: #ec0909;
}

</style>

</head>
<body>
  <form action="display.php" method="post" class="form-container">

    <div class="logo-container">
      <img src="images.png" alt="Logo">
    </div>

    <h2>Registration Form</h2>

    <label>ID No:</label>
    <input type="text" name="IdNum" >

    <label>First Name:</label>
    <input type="text" name="FirstName" >

    <label>Last Name:</label>
    <input type="text" name="LastName" >

    <label>Age:</label>
    <select name="Age" >
      <option value="" disabled selected>Select your age</option>
      <?php for($i=18;$i<=35;$i++) echo "<option>$i</option>"; ?>
    </select>

    <label>Course:</label>
    <select name="Course" >
      <option value="" disabled selected>Select Course</option>
      <option>BSIT</option>
      <option>BSCS</option>
      <option>BSCRIM</option>
      <option>BSMARE</option>
      <option>BSMT</option>
      <option>BSCA</option>
      <option>BSTM</option>
      <option>BSN</option>
    </select>
    
    <label>Year Level:</label>
    <select name="YearLevel" >
      <option value="" disabled selected>Select Year Level</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>  


<div class="btn-container">
  <button class="btn" type="submit" name="save">Submit</button>
  <button class="btn" type="submit" name="clear">Clear Records</button>
  
</div>

  </form>
</body>
</html>
