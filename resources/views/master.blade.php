<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel CRUD</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.9/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.9/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
    <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>
  </body>
</html>
