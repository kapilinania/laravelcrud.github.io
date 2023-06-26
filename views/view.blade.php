<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>view Data</title>
    <style>
        table tr th{
           
            border:1px solid black;
        }
    </style>
  </head>
  <body>
    <h1>View Data</h1>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
            <a href="{{url('/')}}/login"></a>
            
            <table >
                <thead>
                    <tr>
                        <th>email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($a as $abc)
                    <tr>
                        <th>{{$abc->email}}</th>
                        <th>{{$abc->password}}</th>
                        <th>
                            <a href="{{url('edit/')}}/{{$abc->User_id}}">
                            <button class="btn btn-success">EDIT</button>
                            </a>
                            <a href="{{url('delete/')}}/{{$abc->User_id}}">
                            <button class="btn btn-danger">delete</button>
                            </a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>    
            </table>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>