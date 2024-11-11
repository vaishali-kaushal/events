<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Event Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- Header Section -->

    <header class="set-me">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">

                <div class="logo">
                    <h2>reBoot </h2>
                </div>
                <div class="header-buttons">
                    <button class="btn"> <a href="#" style="color: #fff; text-decoration: none;">Register</a></button>
                    
                </div>
            </div>
        </div>
    </header>
  <section class="buddle-section ">
  <div class="containerds row p-0 no-gutters">
    <!-- Form Column (Left, 8 Columns) -->
    <div class="col-md-8 form-column p-4">
      <div class="form-title">Register Now</div>
      <form method="POST" action="{{ route('save.EventRegistration') }}" id="eventRegistrationform">
        @csrf
        <div class="row">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())  <!-- Check if there are any errors -->
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)  <!-- Loop through all errors -->
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <!-- Row 1 of Fields -->
          <div class="col-md-6 form-group">
            <i class="fas fa-user"></i>
            <input type="text" class="form-control auto-wid"  id="name" name="name" placeholder="Full Name" autocomplete="off">
            
          </div>
          <div class="col-md-6 form-group">
            <i class="fas fa-user-tie"></i>
            <input type="text" class="form-control auto-wid" id="designation" name="designation" placeholder="Designation" autocomplete="off">
    
          </div>
          <div class="col-md-6 form-group">
            <i class="fas fa-envelope"></i>
            <input type="text" class="form-control auto-wid" placeholder="Personal Email" id="personal_email" name="personal_email" autocomplete="off">
     
          </div>
          <div class="col-md-6 form-group">
            <i class="fas fa-phone"></i>
            <input type="text" class="form-control auto-wid" placeholder="Mobile Number" id="mobile_number" name="mobile_number" autocomplete="off" pattern="[0-9]*" oninput="validateNumber(this)" maxlength="10">
          </div>
           <div class="col-md-6 form-group">
            <i class="fas fas fa-building"></i>
            <input type="text" class="form-control auto-wid" placeholder="Name of Organisation" id="organisation_name" name="organisation_name" autocomplete="off">
          </div>
            <div class="col-md-6 form-group">
            <i class="fas fa-industry"></i>
            <select class="form-control auto-wid" autocomplete="off" style=" padding: 10px 12px 10px 45px;" name="organisation_type" id="organisation_type">
              <option value="" disabled selected>Type of Organisation</option>
                <option value="Central Government">Central Government</option>
                <option value="State Government">State Government</option>
                <option value="PSU/Corporation">PSU/Corporation</option>
            </select>
          </div>
        </div>
        
        <div class="row">
          <!-- Row 2 of Fields -->
          <div class="col-md-6 form-group">
            <i class="fas fa-envelope"></i>
            <input type="text" class="form-control auto-wid" placeholder="Official Email" id="office_email" name="office_email"  autocomplete="off">
          </div>
          <div class="col-md-6 form-group">
            <i class="fas fa-venus"></i>
            <select class="form-control auto-wid" autocomplete="off" style=" padding: 10px 12px 10px 45px;" name="gender" id="gender">
              <option value="" disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              <!-- Add more options as needed -->
            </select>
          </div>
           <div class="col-md-6 form-group">
            <i class="fas fa-utensils"></i>
            <select class="form-control auto-wid" autocomplete="off" style=" padding: 10px 12px 10px 45px;" name="food_choice" id="food_choice">
              <option value="" disabled selected>Food Choice</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="non-vegetarian">Non-vegetarian</option>
              <!-- Add more options as needed -->
            </select>
          </div>
          <div class="col-md-6 form-group">
            <i class="fas fa-cocktail"></i>
            <select class="form-control auto-wid" autocomplete="off" style=" padding: 10px 12px 10px 45px;" name="beverages_choice" id="beverages_choice">
            <option value="" disabled selected>Beverages Choice</option>
            <option value="alcoholic">Alcoholic</option>
            <option value="non-alcoholic">Non-alcoholic</option>
              <!-- Add more options as needed -->
            </select>
          </div>
           <div class="col-md-6 form-group">
            <i class="fas fa-tshirt"></i>
            <select class="form-control auto-wid" autocomplete="off" style=" padding: 10px 12px 10px 45px;" name="apparel_size" id="apparel_size">
            <option value="" disabled selected>Apparel Size</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            </select>
          </div>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary" style=" width: auto; padding: 10px 20px;">Register</button>
      </div>
      </form>
    </div>

    <!-- Image Column (Right, 4 Columns) -->
    <div class="col-md-4 image-column">
      <div class="image-overlay"></div>
      <div class="image-text">Welcome to our community!</div>
    </div>
  </div>

</section>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#eventRegistrationform").submit(function(e) {
            e.preventDefault(); // Prevent default form submission
            // alert("here")
            // Perform form validation
            var name = $.trim($("#name").val());
            if(!name){
                Swal.fire('Enter Name', '', 'error');
                return false;
            }
            var designation = $.trim($("#designation").val());
            if(!designation){
                Swal.fire('Enter Designation', '', 'error');
                return false;
            }
            var email = $.trim($("#personal_email").val());
            if(!email){
                Swal.fire('Enter email', '', 'error');
                return false;
            }
            if (!isValidEmail(email)) {
                    Swal.fire('Enter valid email ID', '', 'error');
                    return false;
            }
            var mobile_number = $.trim($("#mobile_number").val());
            if(!mobile_number){
                Swal.fire('Enter Mobile Number', '', 'error');
                return false;
            }
            var food_choice = $.trim($("#food_choice").val());
            if(!food_choice){
                Swal.fire('Enter food choice', '', 'error');
                return false;
            }
            var prefer_alcohol = $.trim($("#beverages_choice").val());
            if(!prefer_alcohol){
                Swal.fire('Do you prefer alcohol beverages', '', 'error');
                return false;
            }
            var apparel_size = $.trim($("#apparel_size").val());
            if(!apparel_size){
                Swal.fire('Select Apparel size', '', 'error');
                return false;
            }
            var organisation_name = $.trim($("#organisation_name").val());
            if(!organisation_name){
                Swal.fire('Enter name of organisation', '', 'error');
                return false;
            }
            var organisation_type = $.trim($("#organisation_type").val());
            if(!organisation_type){
                Swal.fire('Enter type of organisation', '', 'error');
                return false;
            }
           
            this.submit();
        });

             // Function to validate email format
        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

    });
        function validateNumber(input) {
        // Remove non-numeric characters
        input.value = input.value.replace(/[^0-9]/g, '');
    }
</script>