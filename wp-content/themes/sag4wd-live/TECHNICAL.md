# SAG4WD Live Theme - Technical Documentation

## Architecture Overview

The SAG4WD Live Theme is a custom WordPress theme built specifically for the SAG 4 Wheel Drive business. It follows WordPress template hierarchy and coding standards while providing specialized functionality for automotive customization showcases.

## Directory Structure

```
wp-content/themes/sag4wd-live/
├── assets/                      # Static assets
│   ├── css/
│   │   └── style.css           # Main stylesheet (enqueued)
│   ├── js/
│   │   └── game.js             # Interactive JavaScript
│   └── images/                 # Theme images
│       └── README.md
├── template-parts/              # Reusable template parts
│   ├── content.php             # Default post content
│   └── content-none.php        # No results found
├── 404.php                      # 404 error page
├── footer.php                   # Site footer template
├── front-page.php              # Home page template
├── functions.php                # Theme functions and setup
├── header.php                   # Site header template
├── index.php                    # Default template (fallback)
├── page.php                     # Generic page template
├── page-garage.php             # Garage/builds showcase (Template Name)
├── page-parts.php              # Parts catalog (Template Name)
├── sidebar.php                  # Sidebar template
├── style.css                    # Theme metadata (required)
├── README.md                    # Theme documentation
├── DEPLOYMENT.md               # Deployment guide
├── CHANGELOG.md                # Version history
└── TECHNICAL.md                # This file
```

## Template Hierarchy

### Page Templates

1. **front-page.php**: Home page with hero section and services overview
2. **page-garage.php**: Custom template for vehicle showcase
3. **page-parts.php**: Custom template for parts catalog
4. **page.php**: Default page template
5. **index.php**: Fallback template

### Core Templates

- **header.php**: Contains `<head>`, navigation, branding
- **footer.php**: Contains footer content and closing tags
- **sidebar.php**: Widget-ready sidebar
- **404.php**: Error page for not found content

## Functions and Hooks

### Theme Setup (`functions.php`)

#### `sag4wd_live_setup()`
Runs on `after_setup_theme` hook.

**Features Added:**
- Automatic feed links
- Title tag support
- Post thumbnails
- Navigation menus (primary)
- HTML5 support
- Custom logo

#### `sag4wd_live_scripts()`
Runs on `wp_enqueue_scripts` hook.

**Enqueued Assets:**
- `assets/css/style.css` - Main stylesheet
- `assets/js/game.js` - Interactive JavaScript

#### `sag4wd_live_widgets_init()`
Runs on `widgets_init` hook.

**Registered Sidebars:**
- `sidebar-1` - Main sidebar widget area

## Styling Architecture

### CSS Organization (`assets/css/style.css`)

The stylesheet is organized into logical sections:

1. **CSS Reset and Base Styles**: Normalize elements
2. **Typography**: Font sizes, weights, line heights
3. **Layout & Containers**: Grid systems, wrapping elements
4. **Header**: Site header, branding, navigation
5. **Navigation**: Menu styles
6. **Buttons**: Button variants and states
7. **Header Actions**: User info, login/logout
8. **Main Content Areas**: Content sections
9. **Front Page**: Hero and service sections
10. **Services Section**: Service cards and grid
11. **Parts Page**: Parts catalog styling
12. **Garage Page**: Vehicle showcase styling
13. **Posts & Articles**: Blog content
14. **Sidebar**: Widget areas
15. **Footer**: Site footer
16. **Responsive Design**: Media queries
17. **Utility Classes**: Helper classes

### Color Scheme

```css
Primary Background: #0f1113 (dark)
Secondary Background: #121417 (slightly lighter)
Border Color: #1e2126
Text Color: #e6e6e6 (light gray)
Accent Color: #c7923e (gold)
Hover States: opacity: 0.85
```

### Typography

```css
Font Family: system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif
Base Font Size: 16px (browser default)
Line Height: 1.6

Heading Sizes:
- h1: 2.5rem (40px)
- h2: 2rem (32px)
- h3: 1.5rem (24px)
```

### Responsive Breakpoints

```css
Mobile: < 768px
Tablet: 768px - 1024px
Desktop: > 1024px
```

## JavaScript Architecture

### Module Structure (`assets/js/game.js`)

The JavaScript is organized as an IIFE (Immediately Invoked Function Expression):

```javascript
(function($) {
    'use strict';
    // Module code
})(window.jQuery || fallback);
```

### Key Functions

#### `initGarageGame()`
Initializes the interactive garage showcase on garage pages.

**Features:**
- Creates vehicle showcase grid
- Adds click handlers for vehicle details
- Displays modification lists

#### `showVehicleDetails(vehicle, container)`
Displays detailed information when a vehicle is clicked.

**Parameters:**
- `vehicle`: Vehicle identifier
- `container`: DOM container element

**Data Structure:**
```javascript
{
    name: 'Vehicle Name',
    mods: ['Modification 1', 'Modification 2', ...]
}
```

#### `initPartsCatalog()`
Enhances parts catalog with hover effects.

#### `initVehicleCards()`
Adds hover animations to vehicle cards.

### Event Handling

- `DOMContentLoaded`: Initializes all modules
- `click`: Vehicle selection
- `mouseenter/mouseleave`: Hover effects

### Global Namespace

```javascript
window.SAG4WD = {
    initGarageGame,
    initPartsCatalog,
    initVehicleCards
}
```

## WordPress Integration

### Template Tags Used

**Header:**
- `language_attributes()`
- `bloginfo()`
- `wp_head()`
- `body_class()`
- `wp_body_open()`
- `home_url()`
- `wp_nav_menu()`
- `is_user_logged_in()`
- `wp_get_current_user()`
- `admin_url()`
- `wp_logout_url()`
- `wp_login_url()`

**Content:**
- `have_posts()`
- `the_post()`
- `the_title()`
- `the_content()`
- `the_excerpt()`
- `the_permalink()`
- `get_permalink()`
- `has_post_thumbnail()`
- `the_post_thumbnail()`
- `get_template_part()`
- `wp_link_pages()`

**Footer:**
- `wp_footer()`

### Conditional Tags

- `is_singular()`
- `is_home()`
- `is_front_page()`
- `is_search()`
- `comments_open()`
- `get_comments_number()`
- `current_user_can()`
- `has_custom_logo()`
- `is_customize_preview()`
- `get_edit_post_link()`

### Navigation Menus

**Location:** `primary`
**Configuration:**
```php
wp_nav_menu([
    'theme_location' => 'primary',
    'menu_class'     => 'primary-menu',
    'container'      => false,
    'fallback_cb'    => false,
]);
```

### Widget Areas

**Sidebar ID:** `sidebar-1`
**Usage:** `<?php dynamic_sidebar('sidebar-1'); ?>`

## Security Considerations

### Output Escaping

All dynamic content is properly escaped:
- `esc_url()`: URLs
- `esc_html()`: HTML content
- `esc_attr()`: HTML attributes
- `wp_kses()`: Allowed HTML tags

### Input Validation

- ABSPATH check in all files
- No direct user input processing
- WordPress core functions used for all data operations

### Best Practices

- No inline JavaScript with user data
- CSS files loaded via `wp_enqueue_style()`
- JS files loaded via `wp_enqueue_script()`
- No eval() or similar dangerous functions
- Proper nonce verification (if forms added later)

## Performance Optimization

### Asset Loading

- CSS loaded in `<head>`
- JavaScript loaded in footer (`true` parameter)
- Version numbers for cache busting
- No inline styles in templates (use classes)

### Image Optimization

- Lazy loading support prepared
- IntersectionObserver API for lazy images
- Proper image sizing with `add_image_size()`

### Caching

- Compatible with WordPress caching plugins
- OPcache support (cleared on deployment)
- Static assets can be CDN-served

## Accessibility

### ARIA Labels

- Semantic HTML5 elements (`<header>`, `<nav>`, `<main>`, `<footer>`)
- Proper heading hierarchy
- Screen reader text class available

### Keyboard Navigation

- All interactive elements keyboard accessible
- Focus states preserved
- Tab order logical

### Color Contrast

- Text meets WCAG AA standards
- Accent color provides sufficient contrast

## Browser Support

### Tested Browsers

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- iOS Safari 14+
- Chrome Mobile 90+

### Fallbacks

- jQuery fallback if not loaded
- IntersectionObserver feature detection
- Flexbox and Grid with fallbacks

## Internationalization (i18n)

### Text Domain

All strings use: `'sag4wd-live'`

### Translation Functions

- `__()`: Translate and return
- `_e()`: Translate and echo
- `_x()`: Translate with context
- `esc_html__()`: Translate and escape

### POT File Generation

```bash
wp i18n make-pot . languages/sag4wd-live.pot
```

## Customization Guide

### Creating Child Theme

```css
/*
 Theme Name: SAG4WD Live Child
 Template: sag4wd-live
 Version: 1.0.0
*/

@import url('../sag4wd-live/style.css');

/* Child theme styles */
```

### Hooks for Extension

Custom actions can be added via child theme:
- `after_setup_theme`
- `wp_enqueue_scripts`
- `widgets_init`

### Filter Examples

```php
// Modify excerpt length
add_filter('excerpt_length', function() {
    return 30;
});

// Modify excerpt more link
add_filter('excerpt_more', function() {
    return '... <a href="' . get_permalink() . '">Read More</a>';
});
```

## Testing Checklist

### Functional Testing

- [ ] Theme activates without errors
- [ ] All template files render correctly
- [ ] Navigation menus work
- [ ] Widgets display in sidebar
- [ ] Search functionality works
- [ ] 404 page displays correctly
- [ ] Custom templates apply to pages

### Visual Testing

- [ ] Responsive design on mobile
- [ ] Responsive design on tablet
- [ ] Layout correct on desktop
- [ ] Images display properly
- [ ] Fonts load correctly
- [ ] Colors match brand guide

### JavaScript Testing

- [ ] Garage game initializes
- [ ] Vehicle details display on click
- [ ] Hover effects work on cards
- [ ] No console errors
- [ ] Works without jQuery if needed

### Performance Testing

- [ ] Page load time < 3 seconds
- [ ] Images optimized
- [ ] CSS/JS minified (for production)
- [ ] No render-blocking resources
- [ ] Passes Google PageSpeed Insights

## Common Issues and Solutions

### Issue: Theme doesn't appear in admin

**Solution:** Check `style.css` has proper theme header

### Issue: CSS not loading

**Solution:** Clear cache, check `functions.php` enqueue

### Issue: JavaScript errors

**Solution:** Check browser console, verify jQuery loaded

### Issue: Templates not working

**Solution:** Verify template name comment, check file names

## Development Workflow

1. Local development environment
2. Test changes locally
3. Commit to repository
4. Push to GitHub
5. Automatic deployment via GitHub Actions
6. Test on staging/production
7. Monitor for issues

## Maintenance

### Regular Updates

- Update WordPress core compatibility
- Test with latest WordPress version
- Update dependencies
- Review and update documentation
- Monitor performance metrics

### Version Control

- Use semantic versioning
- Tag releases in Git
- Update CHANGELOG.md
- Document breaking changes

## Support and Resources

- WordPress Codex: https://codex.wordpress.org/
- Theme Handbook: https://developer.wordpress.org/themes/
- Template Hierarchy: https://developer.wordpress.org/themes/basics/template-hierarchy/

## Credits

**Theme Developer:** Shabeer Ibrahim  
**Company:** SAG 4 Wheel Drive  
**Website:** https://sag4wd.com  
**Contact:** info@sag4wd.com

---

*Last Updated: 2025-10-31*
*Version: 1.0.0*
