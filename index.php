<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Bootstrap Date Range Picker Demo</title>

    <!--Important link source from https://bbbootstrap.com/snippets/green-themed-datepicker-date-range-54853616-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="./calendar.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>

    

  </head>
  <body>

    <div class="container px-1 px-sm-5 mx-auto">
      <form autocomplete="off">
        <div class="flex-row d-flex justify-content-center">
          <div class="col-lg-6 col-11">
            <div class="input-group input-daterange"> <input type="text" class="form-control input1" placeholder="Start Date" readonly> <input type="text" class="form-control input2" placeholder="End Date" readonly> </div>
          </div>
        </div>
      </form>
    </div>


    <script>
      $(document).ready(function(){

        $('.input-daterange').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
        });

      });
    </script>

  </body>
</html>