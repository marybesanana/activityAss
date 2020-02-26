<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.php">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    div{
        border: 2px ;
    }
    .col-md-4 {
        border:3px solid black
    }

    body {
        background-image: url(1.jpg);
        background-size: cover;
        opacity: .70;
        
    }

    body:hover {
        opacity:100;
    }

    .background {
        background-color: blue;
    }
    
    
    </style>
</head>
<body>
<div>


</div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4"><div class="card mt-2">
            <div class="card-header bg-primary text-white bg-sample text-center">
                <h4 class="bg-primary">Student Registration Form</h4>
                    
            </div>
            <p>Fill up the form</p>
                    <hr class="mb-4">
            <form method = "post" action="output.php">
                <label for="firstname"><b>FirstName</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                    </div>
                 <label for="middlename"><b>MiddleName</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="middlename" class="form-control" placeholder="Middlename">
                    </div>
            
                <label for="lastname"><b>LastName</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                    </div>
                 <label for="address"><b>Address</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="address" class="form-control" placeholder="Brgy,City,Country">
                    </div>
                <label for="Email"><b>Email</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="email" class="form-control" placeholder="@gmail.com">
                    </div>
                 <label for="dateofbirth"><b>Date of Birth</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="date" name="dateofbirth" class="form-control" placeholder="mm/dd/yyyy">
                    </div>
                 <label for="gender"><b>Gender</b></label>
                 <div class=form-inline>
                    <div class="col-md-12 mb-2">
                        <input type="radio" name="gender" class="form-control"  value="male" checked>Male
                        <input type="radio" name="gender" class="form-control"  value="female">Female
                    </div>
                </div>
                <label for="Guardian"><b>Guardian</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="guardian" class="form-control" placeholder="Guardian">
                    </div>
                <label for="ContactNumber"><b>Contact Number</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="contactnumber" class="form-control" placeholder="e.g +639362333750">
                    </div>
                <label for="POB"><b>PlaceofBirth</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="PlaceofBirth" class="form-control" placeholder="PlaceofBirth">
                    </div>
                 <label for="CivilStatus"><b>Civil Status</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="civilstatus" class="form-control" placeholder="CivilStatus">
                    </div>
                <div class="row">
                <div class="col-md-3 mb-2">
                    <label for="text-success"><b>Year Level</b></label>
                    <select name="Year">
                        <option value="1st">1st Year</option>
                        <option value="2nd">2sd Year</option>
                        <option value="3rd">3rd Year</option>
                        <option value="4th">4th Year</option>
                        <option value="5th">5th Year</option>
                        </select>
                </div>     
                <div class="col-md-3 mb-2">
                    <label for= text-success><b>Course</b></label>
                    <select name=Course>
                        <option value="BSIT">BSIT</option>
                        <option value="DATASCIENCE">BS DATA SCIENCE</option>
                        <option value="BSTCM">BSTCM</option>
                        <option value="BS COMPUTER ENGINEERING">BS COMPUTER ENGINEERING</option>
                        
                    </select>
                </div>
                </div>
                <label for="SchoolYear"><b>SchoolYear</b></label>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="schoolyear" class="form-control" placeholder="2019-2020">
                    </div>
                <hr class="mb-5">
                <a href="output.php" class = "form-control">
                <input type = "submit"> </a>
            

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>