<!doctype html>
<html lang="en">
  <head>
    <title>Traffic List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
        label{
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form method="get">
            <div class="form-group">
              <label for="search">Tìm kiếm</label>
              <input type="text" value="{{$search}}" class="form-control" name="search" id="search" placeholder="Searching...">
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Min penalty</th>
                    <th>Max penalty</th>
                    <th>Effective date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trafficList as $item)
                    <tr>
                       <td>{{$index++}}</td>
                       <td>{{ $item -> title}}</td> 
                       <td>{{ $item -> content}}</td> 
                       <td>{{ $item -> min_penalty}}</td> 
                       <td>{{ $item -> max_penalty}}</td> 
                       <td>{{ $item -> effective_date}}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $trafficList -> links() }}
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>