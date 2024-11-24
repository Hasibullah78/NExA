<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href=" {{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('DATATABLE/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
</head>
<body>
    <table id="example" class="" style="min-width: 845px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>


            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>

            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    <div class="container">
        <h1 id="hasib">
            Hasib
        </h1>
    </div>
    <p>Move the mouse pointer over this paragraph.</p>
</body>
<script src="{{ asset('DATATABLE/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('DATATABLE/js/custom.min.js') }}"></script>
<script src="{{ asset('DATATABLE/js/quixnav-init.js') }}"> </script>
<script src="{{ asset('DATATABLE/vendor/datatables/js/jquery.dataTables.min.js') }}"> </script>
<script src="{{ asset('DATATABLE/js/plugins-init/datatables.init.js') }}"></script>
<script src="{{ asset('jquery.js') }}"></script>


<script src="{{ asset('jquery.js') }}"></script>
<script>
$(document).ready(function(){
  $("#hasib").mouseover(function(){
    $("#hasib").css("background-color", "yellow");
  });
  $("p").mouseout(function(){
    $("p").css("background-color", "lightgray");
  });
});
</script>
</html>
