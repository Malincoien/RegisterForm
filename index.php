<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <section id="container">
        <header>Registration Form</header>
        <form action="post" id="form">
          <div class="input-box">
            <label>First Name</label>
            <input type="text" placeholder="Enter first name" name="firstname" required />
          </div>
          <div class="input-box">
            <label>Last Name</label>
            <input type="text" placeholder="Enter Last name" name="lastname" required />
          </div>
            <div class="input-box">
            <label>Email Address</label>
            <input type="email" placeholder="Enter email address" name="email" required />
            <span class="error-message" id="emailError"></span>
          </div>
            <div class="input-box">
              <label>Phone Number</label>
              <input type="tel" placeholder="Enter phone number" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
              <span class="error-message" id="phoneError"></span>
            </div>
            <div class="input-box">
              <div class="select-box">
                <select>
                  <option hidden>Select a Country</option>
                  <option value="USA">United States</option>
                  <option value="CAN">Canada</option>
                  <option value="GBR">United Kingdom</option>
                  <option value="NOR">Norway</option>
                  <option value="SWE">Sweden</option>
                  <option value="CHI">China</option>
                  <option value="KOR">South Korea</option>
                </select>
              </div>
          </div>
          <div class="input-box">
            <label for="password">Password</label>
            <input type="password" id="password" pattern=".{6,}" placeholder="Enter password" required>
            <span class="error-message" id="passwordError"></span>
          </div>
          <div class="input-box">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" pattern=".{6,}" name="Confirm password" placeholder="Confirm password" required 
            oninput="checkPasswordMatch()" />
            <span class="error-message" id="password-match-message"></span>
          </div>

        <button type="submit" name="submit" class="btn">Sign up</button>
        </form>
      </section>

      <script src="script.js"></script>
</body>
</html>