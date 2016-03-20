<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Example Form with bootstrap</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div id="wrapper" class="container">

    <figure class="page-head-image">
      <img src="http://loremflickr.com/300/300/person" />
    </figure>

    <h1>Work with us</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro et necessitatibus exercitationem enim temporibus nobis facere? Quaerat aliquam.</p>
    <p><strong>Send your personal info to:</strong> <a href="mailto:workwithus@gmail.com">workwithus@gmail.com</a></p>

    <form id="form-work" class="" name="form-work" action="form.php" method="post">

      <fieldset>

        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="nome" >Name</label>
            <input name="nome" class="form-control" placeholder="Kelly" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="surname">Nachname</label>
            <input name="surname" class="form-control" placeholder="Slater" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="tel">Tel</label>
            <div class="input-group">
              <span class="input-group-addon">21</span>
              <input name="tel" class="form-control" placeholder="9211-4957" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="mobile">Mobile</label>
            <div class="input-group">
              <span class="input-group-addon">21</span>
              <input name="mobile" class="form-control" placeholder="9211-4957" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="email">Email</label>
            <input name="email" class="form-control" placeholder="kelly.slater.surf@gmail.com" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="district">District</label>
            <input name="district" class="form-control" placeholder="Botafogo" type="text">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-lg btn-block info">Send</button>
          </div>
        </div>     
      </fieldset> 
    </form>
  </div>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

</body>
</html>
