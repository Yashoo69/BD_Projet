@extends('base')

@section('css', 'dashboard') 

@section('title', 'Mon Profil')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
    <div class="bulle">
        <img src="../img/kill_bill.jpg" style="height: 100%" width="50%"  alt="" srcset="">

        <div class="container">
            <div class="row">
                <div class="col-md-offset-4" style="margin-top: 20px;">
                    <h4>Welcome to Dashboard</h4>
                    <hr>
                    <table class="table">
                        <thead>

                            <th>Name</th>
                            <th>Email</th>
            
                        </thead>
                        <tbody>
                            <tr>

                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="button">
                    <button class="logOut_button"><a href="logout" class="a_log">Déconnecter </a></button>
                </div>
            </div>
        </div>

    </div>
    
</body>

@endsection