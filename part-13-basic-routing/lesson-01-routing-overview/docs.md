Checklist:
Step 1. Send the request through the URL
<a href="?page=contact">Contact</a>
<a href="?page=product">Products</a>
Step 2. Get the page from the URL
$page = $_GET['page'];
Step 3. Build the file path
$path = "pages/{$pagge}.php";
Step 4. Load the page
require $path;