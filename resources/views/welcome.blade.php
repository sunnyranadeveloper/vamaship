<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link href="{!! asset('css/admin4b.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/admin4b-highlight.min.css') !!}" rel="stylesheet">
    <title>Admin 4B</title>
</head>
<body>

<div class="container-fluid pt-2">
  <div class="page-sign">
    <form class="form-sign" method="post" action="/check_login">
      <h1 class="display-4 text-center mb-5">
        Sign in
      </h1>
      <div class="form-group">
        <div class="label-floating">
          <input id="username" name="username" type="text" class="form-control" placeholder="E-mail" maxlength="50" autofocus>
          {{ csrf_field() }}
          <label for="username">Username</label>
        </div>
      </div>
      <div class="form-group">
        <div class="label-floating">
          <input id="password" name="password" type="password" class="form-control" placeholder="Password" maxlength="20">
          <label for="password">Password</label>
        </div>
      </div>
      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
    </form>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script src="<?php echo URL::asset('js/admin4b.min.js'); ?>"></script>
  <script src="<?php echo URL::asset('js/admin4b.docs.js'); ?>"></script>
</body>
</html>
