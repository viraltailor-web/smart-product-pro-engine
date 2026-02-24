<?php
class Smart_Product_DB {
    public function get_products($term) {
        // This is your 'Mock' data since we are offline
        $products = [
            ['id' => 1, 'name' => 'High-Speed WordPress Search', 'price' => '£99'],
            ['id' => 2, 'name' => 'SQL Performance Audit', 'price' => '£150'],
            ['id' => 3, 'name' => 'Custom WooCommerce API', 'price' => '£200']
        ];
        
        // Return only products that match what you type
        return array_filter($products, function($p) use ($term) {
            return stripos($p['name'], $term) !== false;
        });
    }
}

