<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel Bulk Email Sender</title>
</head>
<body>
  <h1>📧 Laravel Bulk Email Sender</h1>

  <p>This application allows you to send bulk emails using a web interface, powered by Laravel's queue system and SparkPost SMTP.</p>

  <h2>📦 Features</h2>
  <ul>
    <li>Send emails to multiple addresses at once</li>
    <li>Queue-based job processing for performance</li>
    <li>Customizable subject and message</li>
    <li>Configured for SparkPost SMTP</li>
  </ul>

  <h2>🚀 Installation Instructions</h2>
  <ol>
    <li>Clone the repository:
      <pre><code>git clone https://github.com/nagunurikaveri/laravel-bulk-mail.git</code></pre>
    </li>
    <li>Navigate into the project:
      <pre><code>cd laravel-bulk-mail</code></pre>
    </li>
    <li>Install dependencies:
      <pre><code>composer install</code></pre>
    </li>
    <li>Copy the environment file and generate the application key:
      <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
    </li>
    <li>Set up your SMTP credentials in the <code>.env</code> file:
      <pre><code>
MAIL_MAILER=smtp
MAIL_HOST=smtp.sparkpostmail.com
MAIL_PORT=587
MAIL_USERNAME=SMTP_Injection
MAIL_PASSWORD=37ac73f58526a9ba850f43f83b9dbc108bd30091
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=info@email.adventureguidanceagency.info
MAIL_FROM_NAME="Adventure Guidance Agency"
      </code></pre>
    </li>
    <li>Serve the app:
      <pre><code>php artisan serve</code></pre>
      Visit <code>http://localhost:8000/bulk-email</code> in your browser.
    </li>
  </ol>

  <h2>📝 Usage</h2>
  <p>Fill in the Subject, Body, and comma-separated email addresses, then click <strong>Send Bulk Emails</strong>. The messages will be dispatched via queued jobs and processed by SparkPost SMTP.</p>

  <h2>🛠️ Notes</h2>
  <ul>
    <li>Ensure you are running <code>php artisan queue:work</code> in a separate terminal.</li>
    <li>Test with a few emails before scaling.</li>
    <li>You can change the sender email by editing <code>MAIL_FROM_ADDRESS</code> in <code>.env</code>.</li>
  </ul>

  <p><em>Built with Laravel 10 and configured for SparkPost SMTP.</em></p>
</body>
</html>
