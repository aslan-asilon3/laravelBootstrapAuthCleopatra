<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 Instagram API tutorial with example</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
 
 
<div class="container">
    <h2>Laravel Instagram API tutorial with example</h2><br/>

 
    <form method="GET" role="form">
 
 
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter Instagram Username" value="{{ old('username') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <button class="btn btn-success">Search</button>
                </div>
            </div>
        </div>
    </form>
 
 
    <div class="panel panel-primary">
      <div class="panel-heading">Instagram Feed</div>
      <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th width="200px;">Id</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>Location</th>
                    <th>Total Likes</th>
                    <th>Total Comments</th>
                </thead>
                <tbody>
                    @if(!empty($items))
                     @foreach($items as $key => $item)
                       <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['code'] }}</td>
                        <td><img src="{{ $item['images']['standard_resolution']['url'] }}" style="width:100px;"></td>
                        <td>{{ isset($item['location']['name']) ? $item['location']['name'] : '' }}</td>
                        <td>{{ $item['likes']['count'] }}</td>
                        <td>{{ $item['comments']['count'] }}</td>
                       </tr>
                      @endforeach
                    @else
                       <tr>
                        <td colspan="4">There are no data.</td>
                       </tr>
                    @endif
                </tbody>
            </table>
      </div>
    </div>
 
 
</div>
 
 
</body>
</html>