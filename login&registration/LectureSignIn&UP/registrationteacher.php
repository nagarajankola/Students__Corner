<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register as Teacher</title>
    <link rel="stylesheet" href="../CSS/styleregistration.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
  </head>
  <body>

    <form class="box" action="index.html" method="post" autocomplete="off">
      <h1 style="color: white; padding-top: 30px;">Sign Up</h1>
      <hr
        style="
          width: 50%;
          height: 1px;
          border: none;
          background: white;
          margin-bottom: 50px;
          margin-top: 0px;
        "
      />
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" style="color: white" type="text" />
              <label for="first_name" style="color: white">First Name</label>
            </div>
            <div class="input-field col s6">
              <input
                id="last_name"
                style="color: white"
                type="text"
                class="validate"
              />
              <label for="last_name" style="color: white">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input
                id="first_name"
                style="color: white"
                type="text"
                class="validate"
              />
              <label for="first_name" style="color: white">Teacher ID</label>
            </div>
            <div class="input-field col s6">
              <div
                style="
                  display: flex;
                  flex-direction: columns;
                  flex-wrap: wrap;
                  padding-top: 5px;
                "
              >
                <div class="custom-select" style="width: 400px">
                  <select>
                    <option value="0">Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                </div>
                <hr
                  class="my-border-style"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input
                id="email"
                style="color: white"
                type="email"
                class="validate"
              />
              <label for="email" style="color: white">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input
                id="password"
                style="color: white"
                type="password"
                class="validate"
              />
              <label for="password" style="color: white">Password</label>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field col s12">
              <input
                id="first_name"
                style="color: white"
                type="text"
                class="validate"
              />
              <label for="first_name" style="color: white">Qualification</label>
            </div>
            
          </div>
          <div class="row">
            <div class="input-field col s12">
              <div
                style="display: flex; flex-direction: columns; flex-wrap: wrap"
              >
                <div class="custom-select" style="width: 400px">
                  <select>
                    <option value="0">Select Department</option>
                    <option value="1">Computer Science Engineering</option>
                    <option value="2">Information Science Engineering</option>
                    <option value="3">Mechanical Engineering</option>
                    <option value="4">Electronics and Communication Engineering</option>
                  </select>
                </div>
                <hr
                 class="my-border-style"
                />
              </div>
            </div>
          </div>
          <div>
            <input type="submit" name="" value="Register" />
          </div>
        </form>
      </div>
    </form>

    <script src="../js/select.js"></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-2.1.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"
    ></script>
  </body>
</html>



<!-- <form class="box" action="index.html" method="post">
  <h1>Sign in</h1>
  <input type="text" name="" id="" placeholder="Name">
  <input type="text" name="" placeholder="Email">

  <input type="text" name="" id="" placeholder="Department">
<input type="text" name="" id="" placeholder="ID">
<input type="text" name="" id="" placeholder="Qualification">
  <input type="text" name="" id="" placeholder="Gender">

  <input type="password" name="" placeholder="Password">
 <input type="submit" name="" value="Register">
 <h5>
   Already have an account?
   <a href="loginteacher.html">Log in here</a>
 </h5>
</form> -->