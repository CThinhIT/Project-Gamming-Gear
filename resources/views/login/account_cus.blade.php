<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
            <table class="table table-striped">
                <thead>
                    <td>ID</td>
                    <td>User name</td>
                    <td>Email</td>
                    <td>Active</td>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>
                                <form action="{{route('register.handleAccount')}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{$customer->id}}">
                                    @if ($customer->active == 1)
                                    <input type="submit" class="btn btn-danger" value="Block">
                                    @else 
                                    <input type="submit" class="btn btn-success" value="Unblock">
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>