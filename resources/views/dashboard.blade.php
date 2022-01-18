@extends('base')

@section('css', 'dashboard') 

@section('title', 'Mon Profil')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

<body>
    <div class="bulle">
        
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
                    <h4>Welcome to Dashboard</h4>
                    <hr>
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td><a href="logout">Déconnecter </a></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>

    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


@endsection