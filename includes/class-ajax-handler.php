<?php
class Smart_Product_AJAX {
    private $db;
    public function __construct($db) { $this->db = $db; }

    public function handle($term) {
        $data = $this->db->get_products($term);
        // We send a success message and the data back as JSON
        return json_encode([
            'success' => true, 
            'data' => array_values($data)
        ]);
    }
}

