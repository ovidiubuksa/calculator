<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\AdvancedOperations;

$calculator = new AdvancedOperations();

if ($argc < 2) {
    echo "Usage: calculator.php [expression]\n";
    echo "Usage of advanced operations:\n";
    echo "Power: calculator.php 2 ^ 3\n";
    echo "Order sqrt: calculator.php 8 sqrt 3\n";
    exit(1);
}

try {
    $input = array_slice($argv, 1);  // Take input arguments, skip script name
    if (count($input) == 2 && strtolower($input[1]) === 'sqrt') {
        // Handling simple square root
        $result = $calculator->sqrt((float)$input[0]);
    } elseif (count($input) == 3) {
        // Handling mathemathical operations
        $a = (float)$input[0];
        $operator = $input[1];
        $b = (float)$input[2];

        switch ($operator) {
            case '+':
                $result = $calculator->add($a, $b);
                break;
            case '-':
                $result = $calculator->subtract($a, $b);
                break;
            case '*':
                $result = $calculator->multiply($a, $b);
                break;
            case '/':
                $result = $calculator->divide($a, $b);
                break;
            case '^':
                $result = $calculator->power($a, $b);
                break;
            case 'sqrt':
                $result = $calculator->sqrtorder($a, $b);
                break;
            default:
                throw new \InvalidArgumentException("Unsupported operator: $operator");
        }
    } else {
        throw new \InvalidArgumentException("Invalid input format.");
    }

    echo $result . "\n";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}