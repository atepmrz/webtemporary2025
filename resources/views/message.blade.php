<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .message-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .message-header {
            color: #0d6efd;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #0d6efd;
            font-weight: 600;
            text-transform: uppercase;
        }
        .table-messages {
            margin-bottom: 0;
        }
        .table-messages thead {
            background-color: #0d6efd;
            color: white;
            font-weight: 500;
        }
        .table-messages tbody {
            font-weight: 400;
        }
        .alert {
            font-weight: 400;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message-container">
            <h2 class="message-header" style="text-align: center">
                <i class="bi bi-envelope-fill"></i> Incoming Message List
            </h2>
            
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="table-responsive">
                <table class="table table-messages table-hover">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Name</th>
                            <th width="20%">Email</th>
                            <th width="20%">Subject</th>
                            <th width="25%">Message</th>
                            <th width="15%">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $i => $msg)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $msg->name }}</td>
                                <td>{{ $msg->email }}</td>
                                <td>{{ $msg->subject }}</td>
                                <td>{{ Str::limit($msg->message, 50) }}</td>
                                <td>{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>