<h1 align="center">How to run</h1>
<p>Step 1. cp .env.example .env</p>
<p>Step 2. change (BROADCAST_DRIVER=pusher and pusher config) in .env</p>
<p>Step 3. run ‘php artisan migrate’</p>
<p>Step 4. run ‘php artisan db:seed’</p>
<p>Step 5. run ‘php artisan key:generate,php artisan jwt:secret’</p>
<p>Step 6. run ‘php artisan serve’, in another terminal run ‘php artisan websockets:serve’</p>
<p>Step 7. Go to http://127.0.0.1:8000/laravel-websockets to see the dashboard</p>
<p>Step 8. You will find the postman collection in the root repository of git.</p>


