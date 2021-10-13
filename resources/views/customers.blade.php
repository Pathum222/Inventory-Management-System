

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    
        <h2 class="panel-title">Customers</h2>
 
    
    
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                    <tr>
                        <th>Customer Id</th>
                        <th>CustomerName</th>
                        <th>telephone</th>                       
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>
                            <a href="{{route('viewaddCustomer')}}"><button type="button" class="btn btn-primary">Add Customer</button></a>
                        </td>
                    </tr>
                    @if(count($customers)>0)
                    @foreach($customers->all() as $customer)
                    <tr>

                        <td>{{$customer->customer_id}}</td>
                        <td> {{$customer->customer_name}}</td>
                        <td>{{$customer->telephone}}</td>
                        <td>
                            <a href="{{route('vieweditCustomer',$customer->customer_id)}}"><button type="button"
                                    class="btn btn-primary">Update</button></a>
                        </td>
                        <td>
                            <a href="{{route('delete_item',$customer->customer_id)}}"><button type="button"
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
</body> 
</html>  

