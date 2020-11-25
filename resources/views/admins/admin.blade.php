<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>

    <ul class="nav justify-content-center bg-dark">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('welcome') }}">Home</a>
        </li>
    </ul>

    <section class="container my-5">

        <div class="text-center">
            <h1 class="my-1 text-center">Users</h1>
            <a href="{{ route('users.create') }}" class="btn btn-primary my-3">create</a>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col">Age</th>
                    <th scope="col">Degre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Freelance</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $e)

                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>{{ $e->birthday }}</td>
                        <td>{{ $e->phone }}</td>
                        <td>{{ $e->city }}</td>
                        <td>{{ $e->age }}</td>
                        <td>{{ $e->degree }}</td>
                        <td>{{ $e->email }}</td>
                        <td>{{ $e->freelance }}</td>
                        <td>
                            <button>edit</button>

                            <form action="/usersup/{{ $e->id }}" method="POST">
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </section>

    <hr>

    <section class="container">

        <div class="text-center">
            <h1 class="my-1 text-center">Facts</h1>
            <a href="" class="btn btn-primary my-3">create</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Client</th>
                    <th scope="col">Projet</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Bosseur</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($facts as $e)

                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>{{ $e->number1 }}</td>
                        <td>{{ $e->number2 }}</td>
                        <td>{{ $e->number3 }}</td>
                        <td>{{ $e->number4 }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </section>

    <hr>

    <section class="container">

        <div class="text-center">
            <h1 class="my-1 text-center">Skils</h1>
            <a href="" class="btn btn-primary my-3">create</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Client</th>
                    <th scope="col">Projet</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Bosseur</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                {{-- @foreach ($skils as $e)

                    <tr>
                        <th scope="row">{{ $e->id }}</th>
                        <td>{{ $e->lang1 }}</td>
                        <td>{{ $e->number2 }}</td>
                        <td>{{ $e->number3 }}</td>
                        <td>{{ $e->number4 }}</td>
                    </tr>
                @endforeach --}}

            </tbody>
        </table>

    </section>
</body>

</html>
