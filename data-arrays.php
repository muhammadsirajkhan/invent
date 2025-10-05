<?php
/**
 * Complete Data Arrays for TekInvent Website
 * 
 * This file contains all reusable data arrays for the website.
 * Centralized data management for easy updates and maintenance.
 */

// ==============================================
// SERVICES DATA
// ==============================================
$services_data = [
    [
        'icon' => 'assets/images/home/s1.png',
        'title' => 'Mobile App Development',
        'description' => 'Transform your ideas into powerful mobile applications. We create native and cross-platform apps for iOS and Android.',
        'link' => 'services/mobile-app-development',
        'slug' => 'mobile-app-development',
        'active' => true,
        'featured' => true
    ],
    [
        'icon' => 'assets/images/home/s2.png',
        'title' => 'Web Development',
        'description' => 'Build responsive, scalable web applications that deliver exceptional user experiences across all devices.',
        'link' => 'services/web-development',
        'slug' => 'web-development',
        'active' => true,
        'featured' => true
    ],
    [
        'icon' => 'assets/images/home/s3.png',
        'title' => 'UI/UX Design',
        'description' => 'Create stunning, user-friendly interfaces that enhance engagement and drive conversions for your brand.',
        'link' => 'services/ui-ux-design',
        'slug' => 'ui-ux-design',
        'active' => true,
        'featured' => true
    ],
    [
        'icon' => 'assets/images/home/s4.png',
        'title' => 'Cloud Solutions',
        'description' => 'Leverage cloud technology to scale your business with secure, reliable, and cost-effective infrastructure.',
        'link' => 'services/cloud-solutions',
        'slug' => 'cloud-solutions',
        'active' => true,
        'featured' => false
    ],
    [
        'icon' => 'assets/images/home/s5.png',
        'title' => 'Digital Marketing',
        'description' => 'Boost your online presence with data-driven digital marketing strategies that deliver measurable results.',
        'link' => 'services/digital-marketing',
        'slug' => 'digital-marketing',
        'active' => true,
        'featured' => false
    ],
    [
        'icon' => 'assets/images/home/s6.png',
        'title' => 'E-commerce Solutions',
        'description' => 'Launch and grow your online store with our comprehensive e-commerce development and optimization services.',
        'link' => 'services/ecommerce-solutions',
        'slug' => 'ecommerce-solutions',
        'active' => true,
        'featured' => false
    ]
];

// ==============================================
// TECHNOLOGIES DATA
// ==============================================
$technologies_data = [
    'frontend' => [
        ['name' => 'React', 'icon' => 'react.svg', 'level' => 'expert'],
        ['name' => 'Vue.js', 'icon' => 'vue.svg', 'level' => 'expert'],
        ['name' => 'Angular', 'icon' => 'angular.svg', 'level' => 'advanced'],
        ['name' => 'Next.js', 'icon' => 'nextjs.svg', 'level' => 'expert'],
    ],
    'backend' => [
        ['name' => 'Node.js', 'icon' => 'nodejs.svg', 'level' => 'expert'],
        ['name' => 'PHP', 'icon' => 'php.svg', 'level' => 'expert'],
        ['name' => 'Python', 'icon' => 'python.svg', 'level' => 'advanced'],
        ['name' => 'Java', 'icon' => 'java.svg', 'level' => 'advanced'],
    ],
    'mobile' => [
        ['name' => 'React Native', 'icon' => 'react-native.svg', 'level' => 'expert'],
        ['name' => 'Flutter', 'icon' => 'flutter.svg', 'level' => 'expert'],
        ['name' => 'Swift', 'icon' => 'swift.svg', 'level' => 'advanced'],
        ['name' => 'Kotlin', 'icon' => 'kotlin.svg', 'level' => 'advanced'],
    ],
    'database' => [
        ['name' => 'MongoDB', 'icon' => 'mongodb.svg', 'level' => 'expert'],
        ['name' => 'PostgreSQL', 'icon' => 'postgresql.svg', 'level' => 'expert'],
        ['name' => 'MySQL', 'icon' => 'mysql.svg', 'level' => 'expert'],
        ['name' => 'Redis', 'icon' => 'redis.svg', 'level' => 'advanced'],
    ]
];

// ==============================================
// INDUSTRIES DATA
// ==============================================
$industries_data = [
    [
        'name' => 'Healthcare',
        'icon' => 'healthcare.svg',
        'description' => 'HIPAA-compliant solutions for modern healthcare',
        'slug' => 'healthcare'
    ],
    [
        'name' => 'Finance & Fintech',
        'icon' => 'fintech.svg',
        'description' => 'Secure and scalable financial technology solutions',
        'slug' => 'fintech'
    ],
    [
        'name' => 'E-commerce & Retail',
        'icon' => 'ecommerce.svg',
        'description' => 'Drive sales with powerful e-commerce platforms',
        'slug' => 'ecommerce'
    ],
    [
        'name' => 'Education',
        'icon' => 'education.svg',
        'description' => 'Innovative EdTech solutions for modern learning',
        'slug' => 'education'
    ],
    [
        'name' => 'Real Estate',
        'icon' => 'realestate.svg',
        'description' => 'Digital transformation for property management',
        'slug' => 'real-estate'
    ],
    [
        'name' => 'Transportation & Logistics',
        'icon' => 'logistics.svg',
        'description' => 'Streamline operations with smart logistics solutions',
        'slug' => 'logistics'
    ]
];

// ==============================================
// TEAM MEMBERS DATA
// ==============================================
$team_data = [
    [
        'name' => 'John Doe',
        'position' => 'CEO & Founder',
        'image' => 'assets/images/team/member1.jpg',
        'bio' => 'Visionary leader with 15+ years in tech innovation',
        'social' => [
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'twitter' => 'https://twitter.com/johndoe',
            'email' => 'john@tekinvent.com'
        ]
    ],
    [
        'name' => 'Jane Smith',
        'position' => 'CTO',
        'image' => 'assets/images/team/member2.jpg',
        'bio' => 'Tech expert specializing in scalable architectures',
        'social' => [
            'linkedin' => 'https://linkedin.com/in/janesmith',
            'twitter' => 'https://twitter.com/janesmith',
            'email' => 'jane@tekinvent.com'
        ]
    ],
    [
        'name' => 'Mike Johnson',
        'position' => 'Lead Designer',
        'image' => 'assets/images/team/member3.jpg',
        'bio' => 'Award-winning designer passionate about user experience',
        'social' => [
            'linkedin' => 'https://linkedin.com/in/mikejohnson',
            'dribbble' => 'https://dribbble.com/mikejohnson',
            'email' => 'mike@tekinvent.com'
        ]
    ]
];

// ==============================================
// TESTIMONIALS DATA
// ==============================================
$testimonials_data = [
    [
        'name' => 'Sarah Williams',
        'position' => 'CEO, TechStart Inc',
        'company' => 'TechStart Inc',
        'image' => 'assets/images/testimonials/client1.jpg',
        'rating' => 5,
        'text' => 'TekInvent transformed our vision into reality. Their team delivered a world-class mobile app that exceeded our expectations.',
        'project' => 'Mobile App Development'
    ],
    [
        'name' => 'David Brown',
        'position' => 'Founder, HealthPlus',
        'company' => 'HealthPlus',
        'image' => 'assets/images/testimonials/client2.jpg',
        'rating' => 5,
        'text' => 'Outstanding work! The team was professional, responsive, and delivered on time. Highly recommend their services.',
        'project' => 'Healthcare Platform'
    ],
    [
        'name' => 'Emily Chen',
        'position' => 'Marketing Director, ShopEasy',
        'company' => 'ShopEasy',
        'image' => 'assets/images/testimonials/client3.jpg',
        'rating' => 5,
        'text' => 'The e-commerce solution they built increased our sales by 300%. Exceptional quality and support throughout.',
        'project' => 'E-commerce Platform'
    ]
];

// ==============================================
// PORTFOLIO/PROJECTS DATA
// ==============================================
$portfolio_data = [
    [
        'title' => 'HealthCare App',
        'category' => 'Mobile App',
        'image' => 'assets/images/portfolio/project1.jpg',
        'thumbnail' => 'assets/images/portfolio/project1-thumb.jpg',
        'client' => 'HealthPlus',
        'year' => '2024',
        'description' => 'A comprehensive healthcare management app for patients and providers',
        'technologies' => ['React Native', 'Node.js', 'MongoDB'],
        'link' => 'portfolio/healthcare-app',
        'featured' => true
    ],
    [
        'title' => 'E-commerce Platform',
        'category' => 'Web Development',
        'image' => 'assets/images/portfolio/project2.jpg',
        'thumbnail' => 'assets/images/portfolio/project2-thumb.jpg',
        'client' => 'ShopEasy',
        'year' => '2024',
        'description' => 'Modern e-commerce platform with advanced features and seamless UX',
        'technologies' => ['Next.js', 'Stripe', 'PostgreSQL'],
        'link' => 'portfolio/ecommerce-platform',
        'featured' => true
    ],
    [
        'title' => 'Banking Dashboard',
        'category' => 'Web App',
        'image' => 'assets/images/portfolio/project3.jpg',
        'thumbnail' => 'assets/images/portfolio/project3-thumb.jpg',
        'client' => 'SecureBank',
        'year' => '2023',
        'description' => 'Secure banking dashboard with real-time analytics and reporting',
        'technologies' => ['React', 'Python', 'AWS'],
        'link' => 'portfolio/banking-dashboard',
        'featured' => true
    ]
];

// ==============================================
// BLOG/NEWS DATA
// ==============================================
$blog_data = [
    [
        'title' => 'The Future of Mobile App Development in 2024',
        'slug' => 'future-mobile-app-development-2024',
        'excerpt' => 'Explore the latest trends and technologies shaping mobile app development',
        'image' => 'assets/images/blog/post1.jpg',
        'author' => 'John Doe',
        'date' => '2024-10-01',
        'category' => 'Mobile Development',
        'read_time' => '5 min read'
    ],
    [
        'title' => 'Why Your Business Needs a Custom Web Application',
        'slug' => 'why-business-needs-custom-web-app',
        'excerpt' => 'Discover how custom web applications can transform your business operations',
        'image' => 'assets/images/blog/post2.jpg',
        'author' => 'Jane Smith',
        'date' => '2024-09-28',
        'category' => 'Web Development',
        'read_time' => '7 min read'
    ],
    [
        'title' => 'UI/UX Design Best Practices for 2024',
        'slug' => 'ui-ux-design-best-practices-2024',
        'excerpt' => 'Learn the essential design principles for creating exceptional user experiences',
        'image' => 'assets/images/blog/post3.jpg',
        'author' => 'Mike Johnson',
        'date' => '2024-09-25',
        'category' => 'Design',
        'read_time' => '6 min read'
    ]
];

// ==============================================
// FAQ DATA
// ==============================================
$faq_data = [
    [
        'question' => 'How long does it take to develop a mobile app?',
        'answer' => 'The timeline varies based on complexity. A simple app takes 2-3 months, while complex apps with advanced features may take 4-6 months or more.',
        'category' => 'Mobile Development'
    ],
    [
        'question' => 'What is the cost of developing a custom web application?',
        'answer' => 'Costs vary depending on features, complexity, and technology stack. We provide custom quotes after understanding your specific requirements.',
        'category' => 'Web Development'
    ],
    [
        'question' => 'Do you provide post-launch support and maintenance?',
        'answer' => 'Yes, we offer comprehensive post-launch support, including bug fixes, updates, and ongoing maintenance to ensure your app runs smoothly.',
        'category' => 'Support'
    ],
    [
        'question' => 'Can you help with UI/UX design?',
        'answer' => 'Absolutely! Our design team specializes in creating intuitive, user-friendly interfaces that enhance user engagement and satisfaction.',
        'category' => 'Design'
    ]
];

// ==============================================
// CONTACT INFO
// ==============================================
$contact_info = [
    'email' => 'info@tekinvent.com',
    'phone' => '+0014809201474',
    'address' => '123 Tech Street, Innovation City, 12345',
    'hours' => 'Mon-Fri: 9:00 AM - 6:00 PM',
    'social' => [
        'facebook' => 'https://facebook.com/tekinvent',
        'twitter' => 'https://twitter.com/tekinvent',
        'linkedin' => 'https://linkedin.com/company/tekinvent',
        'instagram' => 'https://instagram.com/tekinvent'
    ]
];

// ==============================================
// LOCATIONS DATA
// ==============================================
$locations_data = [
    [
        'city' => 'New York',
        'country' => 'USA',
        'address' => '123 Tech Avenue, NY 10001',
        'phone' => '+1 (555) 123-4567',
        'email' => 'ny@tekinvent.com'
    ],
    [
        'city' => 'California',
        'country' => 'USA',
        'address' => '456 Innovation Blvd, CA 94016',
        'phone' => '+1 (555) 234-5678',
        'email' => 'ca@tekinvent.com'
    ],
    [
        'city' => 'Dubai',
        'country' => 'UAE',
        'address' => 'Dubai Silicon Oasis, Building 12',
        'phone' => '+971 4 123 4567',
        'email' => 'dubai@tekinvent.com'
    ],
    [
        'city' => 'Pakistan',
        'country' => 'Pakistan',
        'address' => 'Lahore Technology Park, Building A',
        'phone' => '+92 42 123 4567',
        'email' => 'pk@tekinvent.com'
    ]
];

// ==============================================
// HELPER FUNCTIONS
// ==============================================

/**
 * Get active services only
 */
function getActiveServices($services) {
    return array_filter($services, function($service) {
        return isset($service['active']) && $service['active'] === true;
    });
}

/**
 * Get featured services only
 */
function getFeaturedServices($services) {
    return array_filter($services, function($service) {
        return isset($service['featured']) && $service['featured'] === true;
    });
}

/**
 * Get service by slug
 */
function getServiceBySlug($services, $slug) {
    foreach ($services as $service) {
        if (isset($service['slug']) && $service['slug'] === $slug) {
            return $service;
        }
    }
    return null;
}

/**
 * Limit text to specific length
 */
function limitText($text, $limit = 100) {
    if (strlen($text) > $limit) {
        return substr($text, 0, $limit) . '...';
    }
    return $text;
}

/**
 * Format date
 */
function formatDate($date, $format = 'F j, Y') {
    return date($format, strtotime($date));
}
