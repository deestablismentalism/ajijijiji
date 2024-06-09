<?php

declare(strict_types=1);

function insertSuccess(bool|array $result) {
    if ($result) { 
        return true;
    }
    else {
        return false;
    }
}
function isFieldEmpty(string $category, string $brand, $quantity):bool {
    
    if (empty($category) || empty($brand) || empty($quantity)) {
        return true;
    }
    else {
        return false;
    }
}
function isQuantityNumber($quantity):bool {
        return !is_numeric($quantity);
} 