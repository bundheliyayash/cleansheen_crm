<?php
// Centralized SEO Metadata and Structured Data
$current_page = $_SERVER['PHP_SELF'];
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/cleaning_crm/";
$full_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Default Metadata
$seo_title = "Cleansheen - Professional Cleaning Services in Gujarat";
$seo_description = "Cleansheen offers expert commercial and domestic cleaning services across Surat and Gujarat. Reliable, insured, and professional cleaning for every space.";
$seo_h1 = "Cleansheen Cleaning Services";
$seo_canonical = $full_url;

// Metadata Mapping
$pages_meta = [
    '/index.php' => [
        'title' => 'Cleansheen | Professional Commercial & Domestic Cleaning in Gujarat',
        'desc' => 'Leading cleaning company in Surat, Gujarat. We provide top-notch office, industrial, and home cleaning services with a focus on quality and reliability.',
        'h1' => 'Expert Cleaning Services for Your Business and Home'
    ],
    '/resource/about/about-us.php' => [
        'title' => 'About Cleansheen | Leading Cleaning Service Provider in Gujarat',
        'desc' => 'Learn about Cleansheen’s history, values, and commitment to providing the best cleaning services in Surat and across Gujarat.',
        'h1' => 'About Cleansheen'
    ],
    '/resource/about/contact-us.php' => [
        'title' => 'Contact Cleansheen | Get a Free Cleaning Quote Today',
        'desc' => 'Get in touch with Clean Sheen for professional cleaning services. We’re here to answer your questions and provide the best cleaning solutions.',
        'h1' => 'Contact Us'
    ],
    '/resource/about/faq.php' => [
        'title' => 'Cleaning Services FAQ | Cleansheen Frequently Asked Questions',
        'desc' => 'Find answers to common questions about our domestic, commercial, and one-off cleaning services in Gujarat.',
        'h1' => 'Frequently Asked Questions'
    ],
    '/resource/commercial/office-clean.php' => [
        'title' => 'Office Cleaning Services in Surat | Professional Commercial Cleaning',
        'desc' => 'Spotless office cleaning services tailored to your working hours. Trusted and insured cleaners for a professional workplace environment.',
        'h1' => 'Office Cleaning Services'
    ],
    '/resource/commercial/gym-clean.php' => [
        'title' => 'Gym & Fitness Centre Cleaning Services | Cleansheen',
        'desc' => 'Maintain a hygienic environment for your members with our professional gym cleaning services. Specialist cleaning for fitness equipment and facilities.',
        'h1' => 'Gym Cleaning Services'
    ],
    '/resource/commercial/restaurant-clean.php' => [
        'title' => 'Restaurant & Kitchen Cleaning Services | Cleansheen Gujarat',
        'desc' => 'Post-service restaurant cleaning to highest hygiene standards. Professional deep cleaning for kitchens and dining areas.',
        'h1' => 'Restaurant Cleaning Services'
    ],
    '/resource/commercial/retail-clean.php' => [
        'title' => 'Retail & Showroom Cleaning Services | Cleansheen',
        'desc' => 'Make your retail space shine with our professional showroom cleaning services. Flexible scheduling for shopping centres and stores.',
        'h1' => 'Retail Cleaning Services'
    ],
    '/resource/commercial/school-clean.php' => [
        'title' => 'School & Education Facility Cleaning | Cleansheen',
        'desc' => 'Safe and hygienic cleaning services for schools, colleges, and educational institutes. Vetted staff and eco-friendly practices.',
        'h1' => 'School Cleaning Services'
    ],
    '/resource/commercial/warehouse-clean.php' => [
        'title' => 'Warehouse & Industrial Cleaning Services | Cleansheen',
        'desc' => 'Expert industrial cleaning for warehouses, factories, and distribution centres in Gujarat. Specialised equipment and safety first approach.',
        'h1' => 'Warehouse Cleaning'
    ],
    '/resource/domestic/domestic-clean.php' => [
        'title' => 'Home Cleaning Services | Reliable Domestic Cleaners in Surat',
        'desc' => 'Professional home cleaning services you can trust. Regular or one-off domestic cleaning to make your home sparkle.',
        'h1' => 'Domestic Cleaning Services'
    ],
    '/resource/domestic/deep-clean.php' => [
        'title' => 'Professional Deep Cleaning Services | Cleansheen',
        'desc' => 'Thorough deep cleaning for homes and offices. Our expert team leaves no corner untouched for a completely revitalised space.',
        'h1' => 'Deep Cleaning Services'
    ],
    '/resource/customers/education.php' => [
        'title' => 'Education & School Cleaning Services in Gujarat | Cleansheen',
        'desc' => 'Specialized cleaning services for schools, colleges, and educational institutes. Ensuring a safe and healthy learning environment.',
        'h1' => 'School & Education Cleaning'
    ],
    '/resource/customers/hospital.php' => [
        'title' => 'Hospital & Healthcare Facility Cleaning | Cleansheen Gujarat',
        'desc' => 'High-standard sanitization and cleaning for hospitals, clinics, and medical centers. Compliance with healthcare hygiene protocols.',
        'h1' => 'Hospital & Healthcare Cleaning'
    ],
    '/resource/customers/hotels.php' => [
        'title' => 'Hotel & Guest House Cleaning Services | Cleansheen',
        'desc' => 'Professional housekeeping and cleaning services for the hospitality sector. Ensuring guest satisfaction with spotless rooms and facilities.',
        'h1' => 'Hotel & Guest House Cleaning'
    ],
    '/resource/customers/industrial-com.php' => [
        'title' => 'Industrial & Factory Cleaning Services in Gujarat | Cleansheen',
        'desc' => 'Heavy-duty industrial cleaning for factories, plants, and manufacturing sites. Specialized cleaning for industrial environments.',
        'h1' => 'Industrial & Factory Cleaning'
    ],
    '/resource/about/sustainability.php' => [
        'title' => 'Sustainability & Environmental Policy | Cleansheen Cleaning',
        'desc' => 'Our commitment to eco-friendly cleaning practices and sustainable operations. Learn about our green cleaning initiatives.',
        'h1' => 'Sustainability Policy'
    ]
];

// Determine absolute path for key lookup
$web_root_path = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$relative_path = str_replace($web_root_path, '', $current_page);

if (isset($pages_meta[$relative_path])) {
    $seo_title = $pages_meta[$relative_path]['title'];
    $seo_description = $pages_meta[$relative_path]['desc'];
    $seo_h1 = $pages_meta[$relative_path]['h1'];
} else {
    // Generate dynamic values if not matched
    $page_name = basename($current_page, '.php');
    $page_name = ucwords(str_replace(['-', '_'], ' ', $page_name));
    $seo_title = "$page_name | Cleansheen Cleaning Services";
    $seo_h1 = $page_name;
}

?>

<!-- SEO Metadata -->
<meta name="description" content="<?php echo htmlspecialchars($seo_description); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($seo_canonical); ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo htmlspecialchars($seo_canonical); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($seo_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($seo_description); ?>">
<meta property="og:image" content="<?php echo $base_url; ?>includes/image/og-image.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo htmlspecialchars($seo_canonical); ?>">
<meta property="twitter:title" content="<?php echo htmlspecialchars($seo_title); ?>">
<meta property="twitter:description" content="<?php echo htmlspecialchars($seo_description); ?>">
<meta property="twitter:image" content="<?php echo $base_url; ?>includes/image/og-image.jpg">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Cleansheen",
  "image": "<?php echo $base_url; ?>includes/image/logo.png",
  "@id": "<?php echo $base_url; ?>",
  "url": "<?php echo $base_url; ?>",
  "telephone": "+91 1800-890-3513",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Building No 301, Oberon Business Hub, Behind Monarch, Pal, Gaurav Path Road, Adajan Dn",
    "addressLocality": "Surat",
    "postalCode": "395009",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 21.1926,
    "longitude": 72.7844
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "09:00",
    "closes": "19:00"
  },
  "sameAs": [
    "https://facebook.com/cleansheen",
    "https://twitter.com/cleansheen",
    "https://instagram.com/cleansheen"
  ]
}
</script>

<?php if (strpos($current_page, 'contact-us.php') !== false): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Cleansheen",
    "telephone": "+91 1800-890-3513",
    "email": "cleansheencleaning@gmail.com"
  }
}
</script>
<?php endif; ?>
