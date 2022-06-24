<?php
session_start();

echo "Before logout: ";

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

session_unset();

echo "After logout: ";
echo '<pre>';
print_r($_SESSION);
echo '</pre>';