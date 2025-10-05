# PHP Data Arrays - Usage Guide

## Overview
All website data is now centralized in PHP arrays for easy management and maintenance. No need to edit HTML directly - just update the arrays!

---

## 📁 File Structure

```
invent/
├── data-arrays.php          # Complete data management file (ALL arrays)
├── config/
│   └── services-data.php    # Services-only configuration
└── index.php                # Uses the arrays
```

---

## 🚀 Quick Start

### Method 1: Using data-arrays.php (Recommended)

At the top of any PHP file:

```php
<?php
// Include all data arrays
include 'data-arrays.php';

// Now you have access to:
// - $services_data
// - $technologies_data
// - $industries_data
// - $team_data
// - $testimonials_data
// - $portfolio_data
// - $blog_data
// - $faq_data
// - $contact_info
// - $locations_data
?>
```

### Method 2: Using config/services-data.php (Services only)

```php
<?php
$services = include 'config/services-data.php';
?>
```

---

## 📊 Available Data Arrays

### 1. Services Data (`$services_data`)

```php
[
    'icon' => 'assets/images/home/s1.png',
    'title' => 'Mobile App Development',
    'description' => 'Transform your ideas into powerful mobile applications...',
    'link' => 'services/mobile-app-development',
    'slug' => 'mobile-app-development',
    'active' => true,
    'featured' => true
]
```

**Usage Example:**
```php
<?php include 'data-arrays.php'; ?>

<div class="row">
    <?php foreach ($services_data as $service): ?>
        <?php if ($service['active']): ?>
        <div class="col-lg-4">
            <div class="service-card">
                <img src="<?php echo $service['icon']; ?>" alt="<?php echo $service['title']; ?>">
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['description']; ?></p>
                <a href="<?php echo $service['link']; ?>">Learn More</a>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
```

---

### 2. Technologies Data (`$technologies_data`)

Organized by category: frontend, backend, mobile, database

```php
$technologies_data['frontend']  // React, Vue, Angular, Next.js
$technologies_data['backend']   // Node.js, PHP, Python, Java
$technologies_data['mobile']    // React Native, Flutter, Swift, Kotlin
$technologies_data['database']  // MongoDB, PostgreSQL, MySQL, Redis
```

**Usage Example:**
```php
<h3>Frontend Technologies</h3>
<?php foreach ($technologies_data['frontend'] as $tech): ?>
    <div class="tech-item">
        <span><?php echo $tech['name']; ?></span>
        <span class="level"><?php echo $tech['level']; ?></span>
    </div>
<?php endforeach; ?>
```

---

### 3. Industries Data (`$industries_data`)

```php
[
    'name' => 'Healthcare',
    'icon' => 'healthcare.svg',
    'description' => 'HIPAA-compliant solutions for modern healthcare',
    'slug' => 'healthcare'
]
```

**Usage Example:**
```php
<?php foreach ($industries_data as $industry): ?>
    <div class="industry-card">
        <img src="assets/images/industries/<?php echo $industry['icon']; ?>">
        <h4><?php echo $industry['name']; ?></h4>
        <p><?php echo $industry['description']; ?></p>
    </div>
<?php endforeach; ?>
```

---

### 4. Team Members Data (`$team_data`)

```php
[
    'name' => 'John Doe',
    'position' => 'CEO & Founder',
    'image' => 'assets/images/team/member1.jpg',
    'bio' => 'Visionary leader...',
    'social' => [
        'linkedin' => 'https://linkedin.com/in/johndoe',
        'twitter' => 'https://twitter.com/johndoe'
    ]
]
```

---

### 5. Testimonials Data (`$testimonials_data`)

```php
[
    'name' => 'Sarah Williams',
    'position' => 'CEO, TechStart Inc',
    'rating' => 5,
    'text' => 'TekInvent transformed our vision...',
    'project' => 'Mobile App Development'
]
```

**Usage Example:**
```php
<?php foreach ($testimonials_data as $testimonial): ?>
    <div class="testimonial">
        <p>"<?php echo $testimonial['text']; ?>"</p>
        <strong><?php echo $testimonial['name']; ?></strong>
        <span><?php echo $testimonial['position']; ?></span>
        <div class="rating">
            <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                ⭐
            <?php endfor; ?>
        </div>
    </div>
<?php endforeach; ?>
```

---

### 6. Portfolio/Projects Data (`$portfolio_data`)

```php
[
    'title' => 'HealthCare App',
    'category' => 'Mobile App',
    'image' => 'assets/images/portfolio/project1.jpg',
    'client' => 'HealthPlus',
    'year' => '2024',
    'technologies' => ['React Native', 'Node.js', 'MongoDB'],
    'featured' => true
]
```

---

### 7. Blog/News Data (`$blog_data`)

```php
[
    'title' => 'The Future of Mobile App Development',
    'slug' => 'future-mobile-app-development-2024',
    'excerpt' => 'Explore the latest trends...',
    'author' => 'John Doe',
    'date' => '2024-10-01',
    'category' => 'Mobile Development',
    'read_time' => '5 min read'
]
```

---

### 8. FAQ Data (`$faq_data`)

```php
[
    'question' => 'How long does it take to develop a mobile app?',
    'answer' => 'The timeline varies based on complexity...',
    'category' => 'Mobile Development'
]
```

**Usage Example:**
```php
<?php foreach ($faq_data as $faq): ?>
    <div class="faq-item">
        <h4><?php echo $faq['question']; ?></h4>
        <p><?php echo $faq['answer']; ?></p>
    </div>
<?php endforeach; ?>
```

---

### 9. Contact Info (`$contact_info`)

```php
$contact_info = [
    'email' => 'info@tekinvent.com',
    'phone' => '+0014809201474',
    'address' => '123 Tech Street, Innovation City',
    'social' => [
        'facebook' => 'https://facebook.com/tekinvent',
        'twitter' => 'https://twitter.com/tekinvent'
    ]
];
```

---

### 10. Locations Data (`$locations_data`)

```php
[
    'city' => 'New York',
    'country' => 'USA',
    'address' => '123 Tech Avenue, NY 10001',
    'phone' => '+1 (555) 123-4567',
    'email' => 'ny@tekinvent.com'
]
```

---

## 🛠️ Helper Functions

### Get Active Services
```php
$active_services = getActiveServices($services_data);
```

### Get Featured Services
```php
$featured_services = getFeaturedServices($services_data);
```

### Get Service by Slug
```php
$service = getServiceBySlug($services_data, 'mobile-app-development');
```

### Limit Text
```php
echo limitText($service['description'], 100); // Limits to 100 characters
```

### Format Date
```php
echo formatDate('2024-10-01'); // Output: October 1, 2024
echo formatDate('2024-10-01', 'Y-m-d'); // Output: 2024-10-01
```

---

## 📝 How to Add New Items

### Adding a New Service

```php
// In data-arrays.php, add to $services_data array:
[
    'icon' => 'assets/images/home/s7.png',
    'title' => 'Your New Service',
    'description' => 'Service description here',
    'link' => 'services/your-new-service',
    'slug' => 'your-new-service',
    'active' => true,
    'featured' => false
]
```

### Adding a New Team Member

```php
// Add to $team_data array:
[
    'name' => 'New Member',
    'position' => 'Position Title',
    'image' => 'assets/images/team/new-member.jpg',
    'bio' => 'Brief bio here',
    'social' => [
        'linkedin' => 'https://linkedin.com/in/newmember'
    ]
]
```

---

## 🎯 Best Practices

1. **Always use `htmlspecialchars()`** when outputting data:
   ```php
   echo htmlspecialchars($service['title']);
   ```

2. **Check if array key exists** before using:
   ```php
   <?php if (isset($service['link']) && !empty($service['link'])): ?>
       <a href="<?php echo $service['link']; ?>">Link</a>
   <?php endif; ?>
   ```

3. **Use active flag** to show/hide items:
   ```php
   <?php if ($service['active']): ?>
       <!-- Display service -->
   <?php endif; ?>
   ```

4. **Keep slugs URL-friendly**:
   - Use lowercase
   - Use hyphens instead of spaces
   - Example: `mobile-app-development`

---

## 🔄 Migration from Hardcoded HTML

### Before (Hardcoded):
```html
<div class="service-card">
    <img src="assets/images/home/s1.png">
    <h3>Mobile App Development</h3>
    <p>Description here...</p>
</div>
```

### After (Using Arrays):
```php
<?php foreach ($services_data as $service): ?>
    <div class="service-card">
        <img src="<?php echo $service['icon']; ?>">
        <h3><?php echo $service['title']; ?></h3>
        <p><?php echo $service['description']; ?></p>
    </div>
<?php endforeach; ?>
```

---

## 🎨 Styling Remains the Same

All CSS classes remain unchanged. The arrays only replace the content, not the structure or styling.

---

## 📦 Benefits

✅ **Centralized Management** - Update content in one place
✅ **Easy Maintenance** - No HTML editing required
✅ **Scalability** - Add unlimited items easily
✅ **Consistency** - Same structure across all items
✅ **Dynamic** - Can be connected to database later
✅ **Flexible** - Easy to filter, sort, and manipulate
✅ **Reusable** - Use same data in multiple places
✅ **Clean Code** - Separation of data and presentation

---

## 🚀 Next Steps

1. Replace hardcoded HTML with array loops
2. Update data arrays as needed
3. Add new items without touching HTML
4. Consider migrating to database for dynamic CMS

---

## 💡 Tips

- Keep image paths relative to root
- Use meaningful slugs for SEO
- Update `active` flag to hide items without deleting
- Use `featured` flag to highlight special items
- Keep descriptions concise for better UX
- Always test after adding new items

---

## 🆘 Need Help?

Check `data-arrays.php` for complete array structures and examples.
All arrays are well-commented for easy understanding.
