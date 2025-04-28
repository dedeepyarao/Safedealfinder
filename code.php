<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.10.0' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.10.0' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com' );

/**
 * ToDo: Deprecate constants in future versions as they are no longer used in the codebase.
 */
define( 'ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( '/pricing/', 'free-theme', 'dashboard', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( '/pricing/', 'free-theme', 'customizer', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/dark-mode.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

// all code
/*
function check_virustotal($url) {
    $api_key = "7041d6413e8db8438d90a90532c39de695d3a8aa60ab7bcb54370d3bce7dc00a";
    $scan_endpoint = "https://www.virustotal.com/api/v3/urls";
    $report_endpoint = "https://www.virustotal.com/api/v3/analyses/";

    $data = ["url" => $url];
    $headers = [
        "x-apikey: $api_key",
        "Content-Type: application/x-www-form-urlencoded"
    ];

    // Scan the URL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $scan_endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $scan_response = curl_exec($ch);
    curl_close($ch);
    $scan_result = json_decode($scan_response, true);

    // Check if we got the analysis ID
    if (!isset($scan_result['data']['id'])) {
        return "❌ Error: Could not retrieve analysis ID.";
    }

    $analysis_id = $scan_result['data']['id'];
    sleep(2); // Wait for the analysis to be processed

    // Retrieve the report
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $report_endpoint . $analysis_id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $report_response = curl_exec($ch);
    curl_close($ch);

    // Decode the report response
    $report = json_decode($report_response, true);
    $malicious = $report['data']['attributes']['stats']['malicious'] ?? 0;
    $suspicious = $report['data']['attributes']['stats']['suspicious'] ?? 0;

    // Return the appropriate message
    if ($malicious > 0 || $suspicious > 0) {
        return "⚠️ Warning! The URL is flagged as phishing.";
    } else {
        return "✅ Safe URL.";
        $_SESSION['user_url'] = $url;
    }
}
*/
##Step1:
function check_virustotal($url) {
    $api_key = "7041d6413e8db8438d90a90532c39de695d3a8aa60ab7bcb54370d3bce7dc00a";
    $scan_endpoint = "https://www.virustotal.com/api/v3/urls";
    $report_endpoint = "https://www.virustotal.com/api/v3/analyses/";

    $data = ["url" => $url];
    $headers = [
        "x-apikey: $api_key",
        "Content-Type: application/x-www-form-urlencoded"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $scan_endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $scan_response = curl_exec($ch);
    curl_close($ch);

    $scan_result = json_decode($scan_response, true);
    if (!isset($scan_result['data']['id'])) {
        return "❌ Error: Could not retrieve analysis ID.";
    }

    $analysis_id = $scan_result['data']['id'];

    $status = "queued";
    $attempts = 0;
    $max_attempts = 4;
    while ($status === "queued" && $attempts < $max_attempts) {
        sleep(2);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $report_endpoint . $analysis_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $report_response = curl_exec($ch);
        curl_close($ch);

        $report = json_decode($report_response, true);
        $status = $report['data']['attributes']['status'] ?? 'queued';
        $attempts++;
    }

    $malicious = $report['data']['attributes']['stats']['malicious'] ?? 0;
    $suspicious = $report['data']['attributes']['stats']['suspicious'] ?? 0;

    if ($malicious > 0 || $suspicious > 0) {
        return "⚠️ Warning! The URL is flagged as phishing.";
    } else {
        return "✅ Safe URL.";
    }
}

## step2:
function phishing_check_and_compare_shortcode() {
    $output = '<form method="post">
        <label for="product_url">Enter Product URL:</label>
        <input type="url" name="product_url" placeholder="https://example.com/product" required style="width: 100%; margin-bottom: 10px;">
        <button type="submit" name="check_product">Submit</button>
    </form>';

    if (isset($_POST['check_product']) && isset($_POST['product_url'])) {
        $url = trim(esc_url_raw($_POST['product_url']));

        // ✅ Validate URL
        if (empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
            $output .= "<p style='color:red;'>❌ Please enter a valid product URL.</p>";
            return $output;
        }

        // ✅ Run VirusTotal Check
        $scan_result = check_virustotal($url);
        if (strpos($scan_result, 'Safe') !== false) {
            $output .= "<div style='color: green; font-weight: bold;'>$scan_result</div>";
        } else {
            $output .= "<div style='color: red; font-weight: bold;'>$scan_result</div>";
        }

        // ✅ Extract product title
        $full_title = extract_title_and_price_generic($url)['title'];
        $clean_title = trim(preg_replace('/^Amazon\.com:\s*/i', '', $full_title));
        $output .= "<p><strong>Extracted Title:</strong> $full_title</p>";

        // ✅ Process title words
        $title_words = preg_split("/\s+/", strtolower($clean_title));
        $filtered_words = array_filter($title_words, function($w) {
            return strlen($w) > 2;
        });
        $primary_words = array_slice($filtered_words, 0, 3);
        $output .= "<p><strong>Searching using title:</strong> '" . implode(" ", $primary_words) . "'</p>";

        // ✅ WooCommerce product matching
        $products = wc_get_products(['limit' => -1, 'status' => 'publish']);
        $best_match = null;
        $highest_score = 0;

        foreach ($products as $product) {
            $product_name = strtolower($product->get_name());
            #$output .= "<p>🔍 Checking site product: <em>" . esc_html($product->get_name()) . "</em></p>";

            $score = 0;
            foreach ($filtered_words as $word) {
                if (strpos($product_name, $word) !== false) {
                    $score++;
                }
            }

            foreach ($primary_words as $pword) {
                if (strpos($product_name, $pword) === 0) {
                    $score += 2;
                }
            }

            if ($score > $highest_score) {
                $highest_score = $score;
                $best_match = $product;
            }
        }

       if ($best_match && $highest_score >= 2) {
    $product_link = get_permalink($best_match->get_id());

    $output .= "<hr><h3>✅ Product Match Found</h3>";
    $output .= "<p><strong>Name:</strong> <a href='$product_link' target='_blank'>" . esc_html($best_match->get_name()) . "</a></p>";
    $output .= "<p><strong>Description:</strong> " . get_the_excerpt($best_match->get_id()) . "</p>";
    $output .= "<p><strong>Price:</strong> " . $best_match->get_price_html() . "</p>";
    $output .= "<a href='$product_link' target='_blank'>" . get_the_post_thumbnail($best_match->get_id(), 'medium') . "</a>";
} else {
    $output .= "<p style='color:red;'>❌ No matching product found in your site.</p>";
}

    }

    return $output;
}
add_shortcode('phishing_compare', 'phishing_check_and_compare_shortcode');


##step3:
function extract_title_and_price_generic($url) {
    $api_key = "a60070603e4029a9c9d7e9243eaf97f0";
    $scraper_url = "http://api.scraperapi.com?api_key=$api_key&render=true&url=" . urlencode($url);

    $html = file_get_contents($scraper_url);
    if (!$html) return ['title' => '', 'price' => ''];

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    $title = trim($xpath->evaluate("string(//title)"));
    return ['title' => $title, 'price' => ''];
}
add_shortcode('phishing_compare', 'phishing_check_and_compare_shortcode');


// --- Function to Create a PriceAPI Job for Multiple Sources ---
function create_priceapi_job($product_name) {
    // PriceAPI Configuration
    $api_key = "NSYRRCWTLXAYAJLXAGVUKTSODDFJHXSNHMKSYVHILWDXPNJUEJFZCLCEZVTMSPIF";
    $api_base_url = "https://api.priceapi.com/v2";
    $job_endpoint = "/jobs";

    // Prepare API URL
    $job_submission_url = $api_base_url . $job_endpoint . '?token=' . $api_key;

    // Create an array to store job IDs
    $job_ids = [];
    $sources = ['amazon', 'ebay'];

    foreach ($sources as $source) {
        // Prepare Request Parameters for each source
        $job_params = [
            'source' => $source,
            'country' => 'us',
            'topic' => 'product_and_offers',
            'key' => 'term',
            'values' => [$product_name] // Product name as an array
        ];

        // Convert parameters to JSON
        $json_params = json_encode($job_params);

        // Set up the request arguments
        $args = array(
            'body'        => $json_params,
            'timeout'     => '30',
            'redirection' => '5',
            'httpversion' => '1.1',
            'blocking'    => true,
            'headers'     => array(
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ),
            'data_format' => 'body',
        );

        // Send POST request using WordPress HTTP API
        $response = wp_remote_post($job_submission_url, $args);

        // Check for errors
        if (is_wp_error($response)) {
            $error_message = $response->get_error_message();
            error_log("❌ WordPress HTTP API Error for $source: " . $error_message);
            continue;
        }

        // Get response code
        $status_code = wp_remote_retrieve_response_code($response);
        $response_body = wp_remote_retrieve_body($response);
        $data = json_decode($response_body, true);

        // Log response for debugging
        error_log("Response from PriceAPI job creation ($source): " . print_r($data, true));

        // Store job ID if successful
        if ($status_code === 200 && isset($data['job_id'])) {
            $job_ids[$source] = $data['job_id'];
        } else {
            error_log("Job creation failed for $source: " . $response_body);
        }
    }

    if (!empty($job_ids)) {
        return array('job_ids' => $job_ids, 'message' => 'Jobs created successfully');
    } else {
        return array('error' => 'Job creation failed for all sources');
    }
}

// --- Function to Check Multiple Job Statuses ---
function check_priceapi_job_status($job_ids) {
    if (!is_array($job_ids)) {
        return array('error' => 'Invalid job IDs provided');
    }

    // PriceAPI Configuration
    $api_key = "NSYRRCWTLXAYAJLXAGVUKTSODDFJHXSNHMKSYVHILWDXPNJUEJFZCLCEZVTMSPIF";
    $api_base_url = "https://api.priceapi.com/v2";
    
    $statuses = [];
    
    foreach ($job_ids as $source => $job_id) {
        $status_endpoint = "/jobs/" . $job_id;
        
        // Prepare API URL
        $job_status_url = $api_base_url . $status_endpoint . '?token=' . $api_key;

        // Set up the request arguments
        $args = array(
            'timeout'     => '30',
            'redirection' => '5',
            'httpversion' => '1.1',
            'blocking'    => true,
            'headers'     => array(
                'Accept' => 'application/json'
            ),
        );

        // Send GET request using WordPress HTTP API
        $response = wp_remote_get($job_status_url, $args);

        // Check for errors
        if (is_wp_error($response)) {
            $error_message = $response->get_error_message();
            error_log("❌ WordPress HTTP API Error for $source status: " . $error_message);
            $statuses[$source] = array('error' => $error_message);
            continue;
        }

        // Get response code
        $status_code = wp_remote_retrieve_response_code($response);
        $response_body = wp_remote_retrieve_body($response);
        $data = json_decode($response_body, true);

        error_log("Job status response for $source: " . print_r($data, true));
        
        $statuses[$source] = $data;
    }
    
    // Check if all jobs are completed
    $all_completed = true;
    foreach ($statuses as $source => $status_data) {
        $job_status = '';
        if (isset($status_data['status'])) {
            $job_status = $status_data['status'];
        } elseif (isset($status_data['job_status'])) {
            $job_status = $status_data['job_status'];
        }
        
        if ($job_status !== 'completed' && $job_status !== 'finished') {
            $all_completed = false;
            break;
        }
    }
    
    return array(
        'statuses' => $statuses,
        'all_completed' => $all_completed
    );
}

// --- Function to Get Multiple Job Results ---
function get_priceapi_job_results($job_ids) {
    if (!is_array($job_ids)) {
        return array('error' => 'Invalid job IDs provided');
    }

    // PriceAPI Configuration
    $api_key = "NSYRRCWTLXAYAJLXAGVUKTSODDFJHXSNHMKSYVHILWDXPNJUEJFZCLCEZVTMSPIF";
    $api_base_url = "https://api.priceapi.com/v2";
    
    $all_results = [];
    
    foreach ($job_ids as $source => $job_id) {
        $results_endpoint = "/jobs/" . $job_id . "/download";
        
        // Prepare API URL
        $job_results_url = $api_base_url . $results_endpoint . '?token=' . $api_key;

        // Set up the request arguments
        $args = array(
            'timeout'     => '60',  // Extended timeout for potentially large responses
            'redirection' => '5',
            'httpversion' => '1.1',
            'blocking'    => true,
            'headers'     => array(
                'Accept' => 'application/json'
            ),
        );

        // Send GET request using WordPress HTTP API
        $response = wp_remote_get($job_results_url, $args);

        // Check for errors
        if (is_wp_error($response)) {
            $error_message = $response->get_error_message();
            error_log("❌ WordPress HTTP API Error for $source results: " . $error_message);
            $all_results[$source] = array('error' => 'WordPress HTTP Error: ' . $error_message);
            continue;
        }

        // Get response code
        $status_code = wp_remote_retrieve_response_code($response);
        $response_body = wp_remote_retrieve_body($response);
        
        // Log the raw response for debugging
        error_log("Raw job results response for $source: " . substr($response_body, 0, 1000) . "...");
        
        // Try to decode JSON response
        $data = json_decode($response_body, true);
        
        // Check if JSON decode failed
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log("JSON decode error for $source: " . json_last_error_msg());
            $all_results[$source] = array('error' => 'Failed to parse API response: ' . json_last_error_msg());
            continue;
        }
        
        // Add source information to the results
        if (is_array($data) && !isset($data['error'])) {
            $data['source'] = $source;
        }
        
        // Store results
        $all_results[$source] = $data;
    }
    
    return $all_results;
}

// --- Display Price Results Function ---
function display_price_results($all_results) {
    // Start output buffer to capture HTML
    ob_start();
    
    // Check for errors first
    if (isset($all_results['error'])) {
        echo "<div class='price-api-message error'>";
        echo "<p>Error retrieving results: " . esc_html($all_results['error']) . "</p>";
        echo "</div>";
        return ob_get_clean();
    }
    
    if (empty($all_results) || !is_array($all_results)) {
        echo "<div class='price-api-message warning'>";
        echo "<p>No results found or invalid response format.</p>";
        echo "</div>";
        error_log("Empty or invalid results: " . print_r($all_results, true));
        return ob_get_clean();
    }
    
    echo "<div class='price-results'>";
    echo "<h3>Price Comparison Results</h3>";
    
    // Only show debug information in admin or when a query parameter is present
    if (is_admin() || isset($_GET['debug'])) {
        echo "<details>";
        echo "<summary>Debug Information (click to expand)</summary>";
        echo "<pre>" . esc_html(print_r($all_results, true)) . "</pre>";
        echo "</details>";
    }
    
    // Tabs for Amazon and eBay results
    echo "<div class='price-tabs'>";
    echo "<div class='tab-buttons'>";
    echo "<button class='tab-button active' data-target='amazon-results'>Amazon Results</button>";
    echo "<button class='tab-button' data-target='ebay-results'>eBay Results</button>";
    echo "</div>";
    
    // Tab contents
    echo "<div class='tab-contents'>";
    
    // Process each source's results
    foreach ($all_results as $source => $results) {
        $display_class = ($source === 'amazon') ? 'active' : '';
        echo "<div id='{$source}-results' class='tab-content {$display_class}'>";
        
        // Check for errors in this source's results
        if (isset($results['error'])) {
            echo "<div class='price-api-message error'>";
            echo "<p>Error retrieving {$source} results: " . esc_html($results['error']) . "</p>";
            echo "</div>";
            continue;
        }
        
        // Begin table
        echo "<table class='price-table'>";
        echo "<thead><tr>";
        echo "<th>Product</th><th>Brand</th><th>Price</th><th>Original Price</th><th>Link</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        
        // Check if no products were found
        $has_products = false;
        
        // Process PriceAPI response format
        if (isset($results['results']) && is_array($results['results'])) {
            foreach ($results['results'] as $result) {
                if (isset($result['content'])) {
                    process_product_content($result['content'], $source);
                    $has_products = true;
                }
            }
        } elseif (isset($results['content'])) {
            // Direct content structure
            process_product_content($results['content'], $source);
            $has_products = true;
        }
        
        // If no products were processed, display a message
        if (!$has_products) {
            echo "<tr><td colspan='5'>No products found from {$source}. This may indicate an issue with the search term or API response format.</td></tr>";
        }
        
        echo "</tbody></table>";
        echo "</div>"; // End tab content
    }
    
    echo "</div>"; // End tab contents
    echo "</div>"; // End tabs
    echo "</div>"; // End price-results
    
    // Add JavaScript for tab switching
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove 'active' class from all buttons and contents
                document.querySelectorAll('.tab-button').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add 'active' class to clicked button and corresponding content
                this.classList.add('active');
                const targetId = this.getAttribute('data-target');
                document.getElementById(targetId).classList.add('active');
            });
        });
    });
    </script>";
    
    // Add CSS for tabs
    echo "<style>
    .price-tabs {
        margin-top: 20px;
    }
    .tab-buttons {
        display: flex;
        margin-bottom: 15px;
    }
    .tab-button {
        padding: 10px 20px;
        background-color: #f2f2f2;
        border: 1px solid #ddd;
        border-bottom: none;
        cursor: pointer;
        margin-right: 5px;
        border-radius: 5px 5px 0 0;
    }
    .tab-button.active {
        background-color: #0073aa;
        color: white;
    }
    .tab-content {
        display: none;
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 0 5px 5px 5px;
    }
    .tab-content.active {
        display: block;
    }
    </style>";
    
    // Return the captured HTML
    return ob_get_clean();
}

// Enhanced helper function to process product content
function process_product_content($product, $source) {
    // Get product name
    $product_name = isset($product['name']) ? esc_html($product['name']) : 'Unknown Product';
    
    // Get brand name
    $brand_name = isset($product['brand_name']) ? esc_html($product['brand_name']) : 'Unknown';
    
    // Get current price from offers or buybox
    $current_price = 'N/A';
    $currency = 'USD';
    
    if (isset($product['buybox']) && isset($product['buybox']['min_price'])) {
        $current_price = $product['buybox']['min_price'];
        if (isset($product['buybox']['currency'])) {
            $currency = $product['buybox']['currency'];
        }
    } elseif (isset($product['offers']) && is_array($product['offers']) && !empty($product['offers'])) {
        $current_price = $product['offers'][0]['price'];
        if (isset($product['offers'][0]['currency'])) {
            $currency = $product['offers'][0]['currency'];
        }
    }
    
    // Get original price (RRP)
    $original_price = isset($product['rrp']) ? esc_html($product['rrp']) . ' ' . $currency : 'N/A';
    
    // Get product URL
    $url = isset($product['url']) ? esc_url($product['url']) : '';
    
    // Source-specific badge
    $source_badge = ucfirst($source);
    
    // Output product information
    echo "<tr>";
    echo "<td>" . $product_name . " <span class='source-badge " . $source . "'>" . $source_badge . "</span></td>";
    echo "<td>" . $brand_name . "</td>";
    echo "<td>" . esc_html($current_price) . ' ' . esc_html($currency) . "</td>";
    echo "<td>" . $original_price . "</td>";
    
    if (!empty($url)) {
        echo "<td><a href='" . $url . "' target='_blank' rel='noopener noreferrer'>View Product</a></td>";
    } else {
        echo "<td>No link available</td>";
    }
    
    echo "</tr>";
    
    // Process individual offers if available - enhanced for eBay results
    if (isset($product['offers']) && is_array($product['offers']) && count($product['offers']) > 0) {
        // For eBay, we want to display all offers prominently
        if ($source === 'ebay') {
            // If we already displayed the first offer as the main product, start from the second offer
            $start_index = (isset($product['offers'][0]['price']) && $product['offers'][0]['price'] == $current_price) ? 1 : 0;
            
            // If we have more than one offer, or if we haven't shown the first offer yet
            if (count($product['offers']) > 1 || $start_index === 0) {
                // Add a separator if we're showing additional offers
                if ($start_index === 1) {
                    echo "<tr><td colspan='5' class='offers-separator'><strong>Additional eBay Listings:</strong></td></tr>";
                }
                
                // Loop through all offers
                for ($i = $start_index; $i < count($product['offers']); $i++) {
                    $offer = $product['offers'][$i];
                    
                    $offer_name = isset($offer['name']) ? esc_html($offer['name']) : $product_name;
                    $offer_price = isset($offer['price']) ? esc_html($offer['price']) : 'N/A';
                    $offer_currency = isset($offer['currency']) ? esc_html($offer['currency']) : $currency;
                    $offer_url = isset($offer['url']) ? esc_url($offer['url']) : '';
                    $offer_condition = isset($offer['condition_text']) ? esc_html($offer['condition_text']) : 'Unknown';
                    $shop_name = isset($offer['shop_name']) ? esc_html($offer['shop_name']) : 'Unknown Seller';
                    
                    echo "<tr class='ebay-listing'>";
                    echo "<td>" . $offer_name . " <span class='source-badge " . $source . "'>" . $source_badge . "</span>";
                    echo "<br><span class='condition-badge'>" . $offer_condition . "</span></td>";
                    echo "<td>" . $brand_name . "</td>";
                    echo "<td>" . $offer_price . ' ' . $offer_currency . "</td>";
                    echo "<td>" . $original_price . "</td>";
                    
                    if (!empty($offer_url)) {
                        echo "<td><a href='" . $offer_url . "' target='_blank' rel='noopener noreferrer'>Buy from " . $shop_name . "</a></td>";
                    } else {
                        echo "<td>No link available</td>";
                    }
                    
                    echo "</tr>";
                }
            }
        } else {
            // For Amazon and other sources, keep the original behavior
            if (count($product['offers']) > 1) {
                echo "<tr><td colspan='5'><strong>Additional Offers:</strong></td></tr>";
                
                foreach ($product['offers'] as $index => $offer) {
                    // Skip the first offer since we've already displayed it
                    if ($index === 0) continue;
                    
                    $shop_name = isset($offer['shop_name']) ? esc_html($offer['shop_name']) : 'Unknown Seller';
                    $offer_price = isset($offer['price']) ? esc_html($offer['price']) : 'N/A';
                    $offer_currency = isset($offer['currency']) ? esc_html($offer['currency']) : $currency;
                    $offer_url = isset($offer['url']) ? esc_url($offer['url']) : '';
                    
                    echo "<tr>";
                    echo "<td> - " . $product_name . " (Alternative) <span class='source-badge " . $source . "'>" . $source_badge . "</span></td>";
                    echo "<td>" . $brand_name . "</td>";
                    echo "<td>" . $offer_price . ' ' . $offer_currency . "</td>";
                    echo "<td>" . $original_price . "</td>";
                    
                    if (!empty($offer_url)) {
                        echo "<td><a href='" . $offer_url . "' target='_blank' rel='noopener noreferrer'>View at " . $shop_name . "</a></td>";
                    } else {
                        echo "<td>No link available</td>";
                    }
                    
                    echo "</tr>";
                }
            }
        }
    }
}

// --- AJAX handler for job status checking ---
function price_compare_ajax_handler() {
    // Verify nonce for security
    check_ajax_referer('price_compare_nonce', 'nonce');
    
    $job_ids = isset($_POST['job_ids']) ? $_POST['job_ids'] : array();
    $product_name = isset($_POST['product_name']) ? sanitize_text_field($_POST['product_name']) : '';
    
    if (empty($job_ids) || !is_array($job_ids)) {
        wp_send_json(array('error' => 'Invalid job IDs'));
        return;
    }
    
    // Sanitize job IDs
    $sanitized_job_ids = array();
    foreach ($job_ids as $source => $job_id) {
        $sanitized_job_ids[sanitize_text_field($source)] = sanitize_text_field($job_id);
    }
    
    $status_data = check_priceapi_job_status($sanitized_job_ids);
    
    $response = array(
        'statuses' => $status_data['statuses'],
        'job_ids' => $sanitized_job_ids,
        'product_name' => $product_name,
        'html' => '',
        'complete' => $status_data['all_completed']
    );
    
    // If all jobs are completed, get results
    if ($status_data['all_completed']) {
        $all_results = get_priceapi_job_results($sanitized_job_ids);
        $response['html'] = display_price_results($all_results);
    }
    
    wp_send_json($response);
}
add_action('wp_ajax_price_compare_check_status', 'price_compare_ajax_handler');
add_action('wp_ajax_nopriv_price_compare_check_status', 'price_compare_ajax_handler');

// --- Enqueue Scripts ---
function price_compare_enqueue_scripts() {
    wp_enqueue_script('jquery');
    
    // Register and enqueue our custom script
    wp_register_script('price-compare-script', '', array('jquery'), '1.0.0', true);
    wp_enqueue_script('price-compare-script');
    
    // Add inline script with AJAX functionality
    $script = '
    jQuery(document).ready(function($) {
        // Function to check job status
        function checkJobStatus(jobIds, productName) {
            var statusContainer = $("#status-container");
            
            $.ajax({
                url: "' . admin_url('admin-ajax.php') . '",
                type: "POST",
                data: {
                    action: "price_compare_check_status",
                    nonce: "' . wp_create_nonce('price_compare_nonce') . '",
                    job_ids: jobIds,
                    product_name: productName
                },
                success: function(response) {
                    // Update status message
                    var statusText = "";
                    $.each(response.statuses, function(source, status) {
                        var sourceStatus = status.status || status.job_status || "Unknown";
                        statusText += source.toUpperCase() + ": " + sourceStatus + "<br>";
                    });
                    statusContainer.find(".job-status").html(statusText);
                    
                    // If job is complete, show results
                    if (response.complete) {
                        statusContainer.find(".job-progress").text("Jobs completed! Showing results...");
                        $("#results-container").html(response.html);
                        $("#job-status-checking").hide();
                    } else {
                        // Schedule another check in 3 seconds
                        statusContainer.find(".job-progress").text("Checking again in 3 seconds...");
                        setTimeout(function() {
                            checkJobStatus(jobIds, productName);
                        }, 3000);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", error);
                    statusContainer.find(".job-progress").text("Error checking status. Retrying in 5 seconds...");
                    
                    // Retry after 5 seconds
                    setTimeout(function() {
                        checkJobStatus(jobIds, productName);
                    }, 5000);
                }
            });
        }
        
        // Start checking when form is submitted
        $("#price-compare-form").on("submit", function(e) {
            e.preventDefault();
            
            var productName = $("#product_name").val();
            if (!productName) return;
            
            var form = $(this);
            var submitBtn = form.find("button[type=submit]");
            
            // Disable button and show loading state
            submitBtn.prop("disabled", true).text("Searching...");
            
            $.ajax({
                url: "' . admin_url('admin-ajax.php') . '",
                type: "POST",
                data: {
                    action: "price_compare_create_job",
                    nonce: "' . wp_create_nonce('price_compare_nonce') . '",
                    product_name: productName
                },
                success: function(response) {
                    if (response.job_ids && Object.keys(response.job_ids).length > 0) {
                        // Show status container
                        $("#status-container").html(
                            "<div class=\'price-api-message info\'>" +
                            "<p>Search initiated for: <strong>" + response.product_name + "</strong></p>" +
                            "<p>Job IDs: " + JSON.stringify(response.job_ids) + "</p>" +
                            "<p class=\'job-status\'>Status: Checking...</p>" +
                            "<p class=\'job-progress\'>Please wait while we gather results...</p>" +
                            "<div id=\'job-status-checking\' class=\'loading-indicator\'>Checking<span class=\'dot-1\'>.</span><span class=\'dot-2\'>.</span><span class=\'dot-3\'>.</span></div>" +
                            "</div>"
                        ).show();
                        
                        // Clear previous results
                        $("#results-container").empty();
                        
                        // Start checking job status
                        checkJobStatus(response.job_ids, response.product_name);
                    } else {
                        // Show error
                        $("#status-container").html(
                            "<div class=\'price-api-message error\'>" +
                            "<p>Error: " + (response.error || "Failed to create jobs") + "</p>" +
                            "</div>"
                        ).show();
                    }
                    
                    // Re-enable button
                    submitBtn.prop("disabled", false).text("Check Prices");
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", error);
                    
                    // Show error
                    $("#status-container").html(
                        "<div class=\'price-api-message error\'>" +
                        "<p>Error: Failed to create job. Please try again.</p>" +
                        "</div>"
                    ).show();
                    
                    // Re-enable button
                    submitBtn.prop("disabled", false).text("Check Prices");
                }
            });
        });
    });
    ';
    
    wp_add_inline_script('price-compare-script', $script);
}
add_action('wp_enqueue_scripts', 'price_compare_enqueue_scripts');

// --- AJAX handler for job creation ---
function price_compare_create_job() {
    // Verify nonce for security
    check_ajax_referer('price_compare_nonce', 'nonce');
    
    $product_name = sanitize_text_field($_POST['product_name']);
    $result = create_priceapi_job($product_name);
    
    if (isset($result['job_ids'])) {
        // Add product name to response
        $result['product_name'] = $product_name;
        wp_send_json($result);
    } else {
        wp_send_json($result);
    }
}
add_action('wp_ajax_price_compare_create_job', 'price_compare_create_job');
add_action('wp_ajax_nopriv_price_compare_create_job', 'price_compare_create_job');

// --- Shortcode to Display the Form and Results ---
add_shortcode('secure_price_compare', 'secure_price_compare_shortcode');
function secure_price_compare_shortcode() {
    ob_start();
    ?>
    <div class="price-compare-container">
        <h2>Secure Price Finder (Amazon & eBay)</h2>
        
        <!-- Search Form -->
        <form id="price-compare-form" class="price-compare-form">
            <label for="product_name">Enter Product Name:</label><br>
            <input type="text" id="product_name" name="product_name" required placeholder="e.g., Apple Airpods" class="regular-text">
            <button type="submit" name="check_price" class="button button-primary">Check Prices</button>
        </form>
        
        <!-- Status Display Container -->
        <div id="status-container" style="display: none;"></div>
        
        <!-- Results Container -->
        <div id="results-container"></div>
        
        <style>
            .price-compare-container {
                max-width: 800px;
                margin: 0 auto;
                font-family: Arial, sans-serif;
            }
            .price-api-message {
                padding: 15px;
                margin: 15px 0;
                border-radius: 5px;
            }
            .price-api-message.success {
                background-color: #d4edda;
                border: 1px solid #c3e6cb;
                color: #155724;
            }
            .price-api-message.error {
                background-color: #f8d7da;
                border: 1px solid #f5c6cb;
                color: #721c24;
            }
            .price-api-message.info {
                background-color: #cce5ff;
                border: 1px solid #b8daff;
                color: #004085;
            }
            .price-api-message.warning {
                background-color: #fff3cd;
                border: 1px solid #ffeeba;
                color: #856404;
            }
            .price-compare-form {
                margin: 20px 0;
            }
            .price-compare-form input.regular-text {
                width: 60%;
                padding: 8px;
                margin-right: 10px;
                margin-bottom: 10px;
            }
            .price-compare-form button,
            form button {
                padding: 8px 15px;
                background-color: #0073aa;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            .price-compare-form button:hover,
            form button:hover {
                background-color: #005177;
            }
            .price-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            .price-table th, .price-table td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            .price-table th {
                background-color: #f2f2f2;
            }
            .price-table tr:hover {
                background-color: #f5f5f5;
            }
            details {
                margin: 20px 0;
                padding: 10px;
                background-color: #f8f9fa;
                border: 1px solid #e9ecef;
            }
            details summary {
                cursor: pointer;
                padding: 5px;
                font-weight: bold;
            }
            details pre {
                white-space: pre-wrap;
                font-size: 12px;
                overflow-x: auto;
            }
            .loading-indicator {
                font-weight: bold;
                margin-top: 10px;
            }
            @keyframes blink {
                0% { opacity: 0; }
                50% { opacity: 1; }
                100% { opacity: 0; }
            }
            .dot-1 {
                animation: blink 1s infinite;
                animation-delay: 0s;
            }
            .dot-2 {
                animation: blink 1s infinite;
                animation-delay: 0.33s;
            }
            .dot-3 {
                animation: blink 1s infinite;
                animation-delay: 0.66s;
            }
            .source-badge {
                display: inline-block;
                padding: 2px 6px;
                border-radius: 3px;
                font-size: 12px;
                font-weight: bold;
                margin-left: 5px;
            }
            .source-badge.amazon {
                background-color: #FF9900;
                color: #232F3E;
            }
            .source-badge.ebay {
                background-color: #E53238;
                color: white;
            }
        </style>
    </div>
    <?php
    return ob_get_clean();
}
