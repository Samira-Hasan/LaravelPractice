<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 101 Template</title>


    <link href="css/bootstrap.css" rel="stylesheet">



    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ URL::to('/') }}" class="navbar-brand" href="#">CRUD SYSTEM</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/') }}">Home</a></li>
                <li><a href="{{ URL::to('/view') }}">View</a></li>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
   <table class="table table-bordered">
       <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
               Email
            </th>
            <th>
                Action
            </th>
        </tr>
       </thead>
       <tbody>
       @foreach($students as $student)
          <tr>
              <th scope="row">
                  {{ $student->id }}
              </th>
              <td>{{ $student->first_name }} </td>
              <td>{{ $student->last_name }}</td>
              <td>{{ $student->email }}</td>
              <td><a href="{{ URL::to('/edit/'.$student->id) }}">Edit</a> ! <a onclick="return check()" href="{{ URL::to('/delete/'.$student->id) }}">Delete</a> </td>
          </tr>

           @endforeach
       </tbody>
   </table>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

 <script>
     function check(){
         return confirm('Are you sure you want to delete this entry!');
     }
 </script>
</body>
</html>