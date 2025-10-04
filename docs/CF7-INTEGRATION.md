# Contact Form 7 Integration Guide

## Overview
Your contact form has been fully prepared for Contact Form 7 integration. All styling is future-proofed to work seamlessly when you replace the HTML form with CF7 shortcode.

---

## How to Replace with Contact Form 7

### Step 1: Install Contact Form 7 Plugin
1. Install Contact Form 7 in WordPress
2. Activate the plugin

### Step 2: Create Your Contact Form

Go to **Contact → Add New** and use this CF7 form code:

```html
<p>
    [text* your-name placeholder "Your Name"]
</p>

<div class="form-row-cf7">
    <p>
        [email* your-email placeholder "Email"]
    </p>
    <p>
        [tel* your-phone placeholder "Phone"]
    </p>
</div>

<p>
    [textarea* your-message placeholder "Description"]
</p>

<p>
    [submit "Lets Talk"]
</p>
```

### Step 3: Replace HTML Form in index.php

**Current HTML Form (Lines 37-64):**
```php
<form class="contact-form" id="contactForm">
    <!-- ... your current form ... -->
</form>
```

**Replace with CF7 Shortcode:**
```php
<?php echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Contact Form"]'); ?>
```

Or simply:
```php
[contact-form-7 id="YOUR_FORM_ID" title="Contact Form"]
```

---

## CF7 Form Structure Breakdown

### Single Input Field
```html
<p>
    [text* your-name placeholder "Your Name"]
</p>
```
- `text*` = text field (asterisk = required)
- `your-name` = field name
- `placeholder "Your Name"` = placeholder text

### Two-Column Layout (Email & Phone)
```html
<div class="form-row-cf7">
    <p>
        [email* your-email placeholder "Email"]
    </p>
    <p>
        [tel* your-phone placeholder "Phone"]
    </p>
</div>
```
- Wrapped in `<div class="form-row-cf7">` for side-by-side layout
- Automatically stacks on mobile

### Textarea
```html
<p>
    [textarea* your-message placeholder "Description"]
</p>
```
- Height: 150px (as per design)
- Resizable vertically

### Submit Button
```html
<p>
    [submit "Lets Talk"]
</p>
```
- Automatically styled with purple background
- Hover effects included

---

## Complete CF7 Features Styled

### ✅ All Input Types
- Text fields
- Email fields
- Phone fields
- Number fields
- URL fields
- Date fields
- Textarea
- Select dropdowns
- Checkboxes
- Radio buttons
- File uploads

### ✅ States & Effects
- Normal state
- Hover state (gray border)
- Focus state (purple border + glow)
- Invalid state (red border)
- Valid state (green border)

### ✅ Validation Messages
- Field-level error messages
- Form-level error messages
- Success messages
- All properly styled and positioned

### ✅ Additional Features
- Loading spinner during submission
- Response messages (success/error)
- Two-column layout support
- Fully responsive on all devices

---

## CSS Classes Used

### For Standard Forms
- `.form-control` - All inputs/textareas
- `.form-group` - Field wrapper
- `.form-row` - Two-column layout
- `.btn-submit` - Submit button

### For Contact Form 7
All CF7 classes are automatically styled:
- `.wpcf7-form`
- `.wpcf7-text`, `.wpcf7-email`, `.wpcf7-tel`, etc.
- `.wpcf7-textarea`
- `.wpcf7-submit`
- `.wpcf7-not-valid` (invalid fields)
- `.wpcf7-response-output` (messages)
- `.form-row-cf7` (two-column layout)

---

## Email Template Configuration

In CF7, configure your email template:

### Mail Tab Settings:

**To:** your-email@example.com

**From:** [your-name] <[your-email]>

**Subject:** New Contact Form Submission from [your-name]

**Message Body:**
```
Name: [your-name]
Email: [your-email]
Phone: [your-phone]

Message:
[your-message]

---
This email was sent from the contact form at TekInvent
```

---

## Additional Options

### Add More Fields
You can easily add more fields following the same pattern:

```html
<p>
    [text your-company placeholder "Company Name"]
</p>

<p>
    [select your-service "Service 1" "Service 2" "Service 3"]
</p>
```

### Add reCAPTCHA (Recommended)
1. Install CF7 reCAPTCHA extension
2. Add reCAPTCHA keys in WordPress
3. Add to form: `[recaptcha]`

### Multiple Forms
You can create multiple CF7 forms and use them in different places. All will be styled consistently.

---

## Testing Checklist

After replacing with CF7:

- [ ] Form displays correctly
- [ ] All fields are properly styled
- [ ] Placeholder text shows
- [ ] Focus states work (purple border)
- [ ] Hover states work (gray border)
- [ ] Submit button styled correctly
- [ ] Form submits successfully
- [ ] Success message displays
- [ ] Error messages show when validation fails
- [ ] Mobile layout works (fields stack)
- [ ] Two-column layout works on desktop

---

## Troubleshooting

### Issue: CF7 form looks different
**Solution:** Clear browser cache and WordPress cache

### Issue: Two columns not working
**Solution:** Make sure you're using `<div class="form-row-cf7">` wrapper

### Issue: Styles not applying
**Solution:** Check if CSS files are properly enqueued in WordPress theme

### Issue: Submit button color wrong
**Solution:** The styling uses `!important` flags to override CF7 defaults

---

## Support

If you encounter any issues:
1. Check browser console for errors
2. Verify CF7 shortcode ID is correct
3. Clear all caches
4. Check if CSS files are loading
5. Test with CF7 default styling first, then apply custom styles

---

## Benefits of This Integration

✅ **Zero Design Breaking** - Form will look exactly the same
✅ **WordPress Integration** - Full WordPress admin functionality
✅ **Email Management** - Easy email configuration
✅ **Spam Protection** - Built-in spam filtering + reCAPTCHA support
✅ **Database Storage** - Optional form submissions storage
✅ **Multiple Forms** - Create unlimited forms
✅ **Extensions** - Hundreds of CF7 addons available
✅ **No Code Changes** - Just replace the shortcode
✅ **Responsive** - Works perfectly on all devices

---

## Quick Reference

**Replace this:**
```php
<form class="contact-form" id="contactForm">
    <!-- HTML form fields -->
</form>
```

**With this:**
```php
<?php echo do_shortcode('[contact-form-7 id="123" title="Contact Form"]'); ?>
```

**That's it!** The form will maintain all styling and functionality.
