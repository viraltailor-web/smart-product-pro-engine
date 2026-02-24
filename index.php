<!DOCTYPE html>
<html>
<head>
    <title>Smart Product Pro | Mobile Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: sans-serif; padding: 20px; background: #f4f4f4; }
        .search-box { width: 100%; padding: 12px; border-radius: 8px; border: 1px solid #ddd; }
        .result-card { background: white; padding: 15px; margin-top: 10px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <h2>Smart Product Pro Search</h2>
    <input type="text" id="search" class="search-box" placeholder="Type 'WordPress'...">
    <div id="results"></div>

    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            // In a real app, this would be an AJAX call to your Termux server
            console.log("Searching for: " + this.value);
        });
    </script>
</body>
</html>
<?php
require_once 'includes/class-db-engine.php';
require_once 'includes/class-ajax-handler.php';

// We 'Inject' the DB into the AJAX handler—Senior Level Architecture!
$db = new Smart_Product_DB();
$ajax = new Smart_Product_AJAX($db);

header('Content-Type: application/json');
echo $ajax->handle('WordPress'); // Testing the search for "WordPress"

