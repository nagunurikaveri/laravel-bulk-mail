<!DOCTYPE html>
<html>
<head>
    <title>Bulk Email Sender</title>
</head>
<body>
    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('bulk.email.send') }}" method="POST">
        @csrf
        <label>Subject:</label><br>
        <input type="text" name="subject" required><br><br>

        <label>Body:</label><br>
        <textarea name="body" rows="5" required></textarea><br><br>

        <label>Email Addresses (comma separated):</label><br>
        <textarea name="emails" rows="3" required></textarea><br><br>

        <button type="submit">Send Bulk Emails</button>
    </form>
</body>
</html>
