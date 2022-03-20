<?php include 'header.php'; ?>
<br><br><br>
<div class="container-fluid">
  <form class="well form-horizontal" method="post" id="contact_form">
    <fieldset>

    <!-- Form Name -->
    <legend class="text-center"><h3>CONTACT US BELOW</h3></legend>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">First Name</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label" >Last Name</label> 
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->
           <div class="form-group">
      <label class="col-md-4 control-label">E-Mail</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
        </div>
      </div>
    </div>


    <!-- Text input-->
           
    <div class="form-group">
      <label class="col-md-4 control-label">Phone</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input name="phone" placeholder="Phone Number" class="form-control" type="text">
        </div>
      </div>
    </div>

    <!-- Text area -->
      
    <div class="form-group">
      <label class="col-md-4 control-label">Message</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
              <textarea class="form-control" name="comment" placeholder="Type your message here"></textarea>
      </div>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4">
        <a type="submit" class="btn btn-lg btn-block btn-warning" href="#">Send <span class="glyphicon glyphicon-send"></span></a>
      </div>
    </div>

    </fieldset>
  </form>
</div>
</div>
<?php include 'footer.php'; ?>
