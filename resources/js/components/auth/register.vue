<!-- Script for range input label -->
<script >
    var rangeLabel = document.getElementById("range-label");
    var experience = document.getElementById("experience");
    function change() {
    rangeLabel.innerText = experience.value + "K";
    }
</script>

<template>
     <form class="signup-form" action="/register" method="post">

        <!-- form header -->
            <div class="form-header">
                <h1>Create Account</h1>
            </div>
        <!-- form body -->
        <div class="form-body">
        <!-- Firstname and Lastname -->
            <div class="horizontal-group">
                <div class="form-group left">
                    <label for="firstname" class="label-title">Prénom *</label>
                     <input type="text" id="firstname" class="form-input" placeholder="enter your first name"/>
                </div>
                <div class="form-group right">
                    <label for="lastname" class="label-title">Nom de famille</label>
                    <input type="text" id="lastname" class="form-input" placeholder="enter your last name" />
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="email" class="label-title">Email*</label>
                <input type="email" id="email" class="form-input" placeholder="enter your email" >
            </div>

            <!-- Password and confirm password -->
            <div class="horizontal-group">
                <div class="form-group left">
                    <label for="password" class="label-title">Password *</label>
                    <input type="password" id="password" class="form-input" placeholder="enter your password" >
                </div>
                <div class="form-group right">
                    <label for="confirm-password" class="label-title">Confirm Password *</label>
                    <input type="password" class="form-input" id="confirm-password" placeholder="enter your password again" >
                </div>
            </div>


        </div>
        <!-- form footer -->
        <div class="form-footer">
        <button type="submit" class="btn">Create</button>
        </div>
    </form>
</template>


<style>

.signup-form {
  font-family: "Roboto", sans-serif;
  width:650px;
  margin:30px auto;
  background:linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
  border-radius: 10px;
}

.form-header  {
  background-color: #EFF0F1;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.form-header h1 {
  font-size: 30px;
  text-align:center;
  color:#666;
  padding:20px 0;
  border-bottom:1px solid #cccccc;
}

/*---------------------------------------*/
/* Form Body */
/*---------------------------------------*/
.form-body {
  padding:10px 40px;
  color:#666;
}

.form-group{
  margin-bottom:20px;
}

.form-body .label-title {
  color:#1BBA93;
  font-size: 17px;
  font-weight: bold;
}

.form-body .form-input {
    font-size: 17px;
    box-sizing: border-box;
    width: 100%;
    height: 34px;
    padding-left: 10px;
    padding-right: 10px;
    color: #333333;
    text-align: left;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    background: white;
    outline: none;
}



.horizontal-group .left{
  float:left;
  width:49%;
}

.horizontal-group .right{
  float:right;
  width:49%;
}

input[type="file"] {
 outline: none;
 cursor:pointer;
 font-size: 17px;
}

#range-label {
 width:15%;
 padding:5px;
 background-color: #1BBA93;
 color:white;
 border-radius: 5px;
 font-size: 17px;
 position: relative;
 top:-8px;
}


::-webkit-input-placeholder {
 color:#d9d9d9;
}

/*---------------------------------------*/
/* Form Footer */
/*---------------------------------------*/
.form-footer {
 clear:both;
}

/*---------------------------------------*/
/* Form Footer */
/*---------------------------------------*/
.signup-form .form-footer  {
  background-color: #EFF0F1;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  padding:10px 40px;
  text-align: right;
  border-top: 1px solid #cccccc;
}

.form-footer span {
  float:left;
  margin-top: 10px;
  color:#999;
  font-style: italic;
  font-weight: thin;
}

.btn {
   display:inline-block;
   padding:10px 20px;
   background-color: #1BBA93;
   font-size:17px;
   border:none;
   border-radius:5px;
   color:#bcf5e7;
   cursor:pointer;
}

.btn:hover {
  background-color: #169c7b;
  color:white;
}
</style>
