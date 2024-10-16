<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/firstPageStyle.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        @if($shopRecords->isEmpty())
            <div class="col-md-3 mb-3"> 
                <div class="card">
                    <div class="card-info">
                        <p class="title">No Exchange Available</p>
                    </div>
                </div>
            </div>
            @foreach($shopRecords as $record)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-info">
                            <p class="title">
                            <a href="{{ url('auth/login') }}" style="color:#ffffff">{{ $record->shop_name }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
