<?php
/**
 * Helper Functions
 */

/**
 * Sanitize output
 */
function safe_echo($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * Get asset URL - Updated for local development
 */
function asset($path) {
    return '/assets/' . ltrim($path, '/');
}

/**
 * Active menu item
 */
function is_active($path) {
    return $_SERVER['REQUEST_URI'] === $path ? 'active' : '';
}

/**
 * Format phone number
 */
function format_phone($phone) {
    return preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $phone);
} 