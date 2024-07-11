<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            font-size: 1.5rem;
        }

        .card-header {
            background-color: #343a40;
            color: white;
        }

        .table thead {
            background-color: #f8f9fa;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .pagination {
            justify-content: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="{{ route('logout.perform') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Dashboard</h1>
        <div class="card">
            <div class="card-header">
                <h4>All Quotes</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Service</th>
                                <th scope="col">Message</th>
                                <th scope="col">Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($allQuotes as $quote)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $quote->name }}</td>
                                    <td>{{ $quote->email }}</td>
                                    <td>{{ $quote->phone }}</td>
                                    <td>{{ $quote->service }}</td>
                                    <td>{{ $quote->message }}</td>
                                    <td>{{ $quote->created_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No record found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($allQuotes->count())
                    <nav class="mt-4">
                        {{ $allQuotes->links() }}
                    </nav>
                @endif
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
