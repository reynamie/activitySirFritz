<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>BYTE cLuB</title>
    <!-- LOGO -->
     <link rel="shortcut icon" href="../../../assets/img/logo/Logo-ICT.png" />

    <!-- Style Links -->
     <link rel="stylesheet" href="../../../assets/styles/bootstrap/bootstrap.css">
     <link rel="stylesheet" href="../../../assets/styles/css/mainstyle.css">


</head>
<body>

    <div class="container-fluid body-background">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-md-3 login-bg-frm p-4 mx-3  shadow border  border-secondary bg-light">
               <form onsubmit="frmSignup(event)">
                 <h1 class="text-center">BYTE cLuB</h1>
                <h5 class="text-center">Join us Now!</h5>
                <div class="mb-2 mt-2">
                        <label for="txtFullname" class="form-label fw-normal small">Fullname</label>
                        <input type="text" class="form-control" id="txtFullname" required placeholder="">
                </div>
                <div class="mb-2">
                    <label for="txtContact" class="form-label fw-normal small">Contact #</label>
                    <input type="text" class="form-control text-muted" id="txtContact" required placeholder="">
                </div>
                <div class="mb-2">
                    <label for="txtEmail" class="form-label fw-normal small">Email Address</label>
                    <input type="email" class="form-control" id="txtEmail" required placeholder="">
                </div>
                <div class="mb-2">
                    <label for="cmdSection"  class="form-label fw-normal small">Section</label>
                       <select class="form-select form-select-sm" aria-label="Default select example"  id="cmdSection">
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="cmdYear" class="form-label fw-normal small">Year</label>
                    <select class="form-select form-select-sm"  aria-label="Default select example" id="cmdYear">
                        <option value="1st Year">First Year</option>
                        <option value="2nd Year">Second Year</option>
                        <option value="3rd Year">Third Year</option>
                        <option value="4th Year">Fourth Year</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="txtPassword" class="form-label fw-normal small">Password</label>
                    <input type="text" class="form-control" id="txtPassword" required placeholder="">
                </div>
                <input type="submit" class="btn btn-login  btn-primary mb-2" value="Sign up">
               </form>
               <p class="text-center">Already have an Account? <a href="../../index.html" class="text-decoration-none">Sign in here!</a></p>
                
            </div>
        </div>
    </div>
    
</body>
    <script src="../../../assets/js/function/jquery.js"></script>
    <script src="../../js/signup.js"></script>
    <script src="../../../assets/styles/bootstrap/js/popper.js"></script>
    <script src="../../../assets/styles/bootstrap/js/bootstrap.js"></script>
    
</html>