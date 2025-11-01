# Copilot Coding Agent Instructions

## How to Work with Copilot

### Task Scoping Guidelines

**Copilot excels at:**
- Bug fixes in theme files (PHP, CSS, JavaScript)
- Adding new page templates following existing patterns
- Updating documentation
- Implementing accessibility improvements
- Adding new features to existing pages
- Security fixes and vulnerability patches
- Code refactoring for better performance
- Adding WordPress hooks and filters

**Not recommended for Copilot:**
- Complex database migrations
- Major architectural changes
- Production deployment configuration changes
- Changes requiring deep business logic understanding
- Tasks requiring manual testing on live WordPress installation

### Writing Good Issues for Copilot

**Good issue example:**
```
Title: Add contact form to Contact page
Description: Add a contact form to page-contact.php using WordPress's 
built-in form functionality. Include fields for name, email, phone, 
and message. Follow existing styling in assets/css/style.css.
Acceptance Criteria:
- Form validates input before submission
- Includes proper WordPress nonces for security
- Follows existing dark theme styling with gold accents
- Mobile responsive
```

**Poor issue example:**
```
Title: Fix the website
Description: Something is broken, please fix it.
```

### Iteration and Feedback

- Review Copilot's pull requests like any team member's work
- Use PR comments to request changes or improvements
- Mention @copilot in comments for clarifications
- Expect to iterate - initial implementation may need refinement
- Validate all changes in a local WordPress environment before merging

## Project Overview

This repository contains the **SAG4WD WordPress Theme** - a custom WordPress theme for SAG 4 Wheel Drive, a premium 4x4 customization and off-road accessories business based in Muscat, Oman.

**Key Technologies:**
- WordPress 5.8+ (PHP 7.4+)
- HTML5, CSS3, JavaScript (ES6)
- OPcache for performance
- Deployed to Contabo server via GitHub Actions

## Repository Structure

```
.
├── .github/
│   └── workflows/
│       └── deploy.yml          # Automated deployment to Contabo server
├── wp-content/
│   ├── themes/
│   │   ├── sag4wd-live/        # Main production theme (active)
│   │   └── sag4wd-child/       # Child theme (legacy)
│   └── mu-plugins/
│       └── sag4wd-tweaks.php   # Must-use plugins for site tweaks
├── theme/                       # Development/backup theme files
├── THEME-SUMMARY.md            # Complete theme documentation
└── README.md                   # Repository overview
```

### Primary Theme: `wp-content/themes/sag4wd-live/`

```
sag4wd-live/
├── assets/
│   ├── css/style.css           # Main stylesheet (~11KB)
│   ├── js/game.js              # Interactive elements (~8KB)
│   └── images/                 # Theme images
├── template-parts/
│   ├── content.php             # Post content template
│   └── content-none.php        # No results template
├── Core Templates:
│   ├── header.php              # Site header with navigation
│   ├── footer.php              # Site footer
│   ├── front-page.php          # Home page
│   ├── index.php               # Main template
│   ├── page.php                # Generic pages
│   ├── page-garage.php         # Vehicle showcase page
│   ├── page-parts.php          # Parts catalog page
│   ├── page-services.php       # Services page
│   ├── page-contact.php        # Contact page
│   ├── page-about.php          # About page
│   ├── sidebar.php             # Widget area
│   └── 404.php                 # Error page
├── functions.php               # Theme setup and functions
├── style.css                   # Theme metadata (required by WordPress)
└── Documentation:
    ├── README.md
    ├── DEPLOYMENT.md
    ├── CHANGELOG.md
    ├── TECHNICAL.md
    └── PRODUCTION-CHECKLIST.md
```

## Build and Deployment

### No Build Step Required
This is a pure PHP/HTML/CSS/JS WordPress theme with **no build process**. Files are deployed directly to the server.

### Deployment Process
- **Trigger:** Push to `main` branch with changes in:
  - `wp-content/themes/sag4wd-live/**`
  - `wp-content/themes/sag4wd-child/**`
  - `wp-content/mu-plugins/sag4wd-tweaks.php`
- **Method:** GitHub Actions workflow (`.github/workflows/deploy.yml`)
- **Target:** Contabo server via SSH/rsync
- **Post-deployment:** Automatically clears OPcache and reloads PHP-FPM

### GitHub Secrets Required
- `SSH_PRIVATE_KEY` - SSH key for server authentication
- `SSH_USER` - SSH username
- `SSH_HOST` - Server hostname/IP
- `REMOTE_PATH` - WordPress installation path on server

## WordPress Coding Standards

### PHP Code Standards

1. **Security First**
   - Always use `ABSPATH` check at the top of PHP files:
     ```php
     if (!defined('ABSPATH')) {
         exit; // Exit if accessed directly
     }
     ```
   - Escape all output using WordPress functions:
     - `esc_html()` - for HTML text
     - `esc_attr()` - for HTML attributes
     - `esc_url()` - for URLs
     - `wp_kses_post()` - for HTML content

2. **Localization**
   - Use translation functions for all user-facing strings:
     - `__('text', 'sag4wd-live')` - returns translated string
     - `_e('text', 'sag4wd-live')` - echoes translated string
   - Text domain: `sag4wd-live`

3. **WordPress Functions**
   - Use WordPress functions instead of raw PHP:
     - `wp_enqueue_script()` / `wp_enqueue_style()` for assets
     - `get_template_directory_uri()` for theme URLs
     - `get_template_part()` for template includes
     - `add_action()` / `add_filter()` for hooks

4. **Naming Conventions**
   - Prefix all functions with `sag4wd_live_`
   - Use lowercase with underscores: `sag4wd_live_enqueue_scripts()`

### HTML/CSS Standards

1. **HTML5 Semantic Markup**
   - Use semantic elements: `<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, `<footer>`
   - Include proper ARIA labels for accessibility

2. **CSS Structure**
   - Mobile-first approach
   - Responsive breakpoints: 768px (tablet), 1024px (desktop)
   - Dark theme design with gold accents (#FFD700)
   - Keep styles in `assets/css/style.css`

3. **JavaScript**
   - Modern ES6+ syntax
   - Event-driven architecture
   - Keep interactive code in `assets/js/game.js`
   - No jQuery dependency

## Coding Guidelines

### When Making Changes

1. **Minimal Changes Only**
   - Make the smallest possible changes to achieve the goal
   - Don't refactor or modify working code unless necessary
   - Preserve existing functionality

2. **File Modifications**
   - **Primary Theme:** Changes go in `wp-content/themes/sag4wd-live/`
   - Don't modify WordPress core files (`wp-admin/`, `wp-includes/`)
   - Don't modify files outside of tracked directories (see `.gitignore`)

3. **Testing**
   - No automated testing infrastructure exists
   - Manual testing required:
     - Verify theme activates without errors in WordPress admin
     - Check responsive design on multiple screen sizes (mobile: <768px, tablet: 768-1024px, desktop: >1024px)
     - Test all interactive features (navigation, forms, buttons)
     - Validate accessibility features (ARIA labels, keyboard navigation)
     - Test in multiple browsers (Chrome, Firefox, Safari)
   - **For Copilot**: After making changes, describe how the feature should be tested manually
   - Always check PHP syntax: `php -l filename.php`
   - Validate HTML at key breakpoints
   - Test on actual WordPress installation when possible

4. **Documentation**
   - Update relevant `.md` files when making significant changes
   - Update `CHANGELOG.md` for version changes
   - Keep comments minimal and match existing style

### Common Tasks

#### Adding a New Page Template
1. Create new file: `page-{slug}.php` in theme root
2. Add template header:
   ```php
   <?php
   /**
    * Template Name: Page Title
    */
   ```
3. Include header and footer:
   ```php
   get_header();
   // Your content
   get_footer();
   ```

#### Adding Styles or Scripts
1. Register in `functions.php` using `sag4wd_live_enqueue_scripts()` function
2. Use `wp_enqueue_style()` or `wp_enqueue_script()`
3. Place files in `assets/css/` or `assets/js/`

#### Adding Custom Functions
1. Add to `functions.php`
2. Prefix with `sag4wd_live_`
3. Use WordPress hooks (`add_action`, `add_filter`)

## Security Guidelines

1. **Input Validation**
   - Sanitize all user input using WordPress sanitization functions
   - Use `sanitize_text_field()`, `sanitize_email()`, etc.

2. **Output Escaping**
   - Always escape output (see PHP Code Standards above)

3. **Nonces**
   - Use WordPress nonces for form submissions
   - `wp_nonce_field()` and `wp_verify_nonce()`

4. **SQL Queries**
   - Use `$wpdb->prepare()` for database queries
   - Never use raw SQL with user input

## Performance Considerations

1. **OPcache**
   - Server uses OPcache for PHP optimization
   - Cache cleared automatically on deployment

2. **Asset Loading**
   - Minimize HTTP requests
   - Load assets conditionally when possible
   - Consider lazy loading for images

3. **Database Queries**
   - Use WordPress transients for caching
   - Minimize queries per page

## Important Notes

1. **No Node/Composer Dependencies**
   - This is a pure WordPress theme
   - No build tools or package managers used
   - Don't add `package.json` or `composer.json` unless absolutely necessary

2. **Git Workflow**
   - Main branch: `main`
   - Feature branches: descriptive names
   - All changes deploy automatically to production when merged to `main`

3. **WordPress Environment**
   - Theme expects standard WordPress functions
   - Must be run within WordPress (not standalone)
   - Production site: https://sag4wd.com

4. **Brand Identity**
   - Company: SAG 4 Wheel Drive
   - Location: Maabilah Industrial Area, Muscat, Oman
   - Contact: +968 9966 9903 / +968 9512 1532
   - Design: Dark theme with gold accents, off-road/automotive focus

## Code Review and Quality Standards

### Copilot's Expected Behavior

When working on issues in this repository, Copilot should:

1. **Understand context first**
   - Review relevant theme files before making changes
   - Understand the existing code structure and patterns
   - Check for similar implementations in other theme files

2. **Make minimal, surgical changes**
   - Only modify the specific files and lines needed
   - Preserve existing working code
   - Match existing code style and formatting

3. **Follow WordPress best practices**
   - Use WordPress functions instead of raw PHP where possible
   - Implement proper security measures (nonces, escaping, sanitization)
   - Use hooks and filters appropriately
   - Follow WordPress template hierarchy

4. **Document changes clearly**
   - Explain what changed and why in PR description
   - Include manual testing instructions
   - Note any potential side effects or areas to watch

5. **Handle errors gracefully**
   - If uncertain about approach, ask for clarification
   - Provide alternatives if initial approach isn't feasible
   - Explain limitations or constraints encountered

### Pull Request Requirements

When Copilot creates a PR, it should:
1. **Follow minimal change principle** - Only modify what's necessary
2. **Include clear description** - Explain what changed and why
3. **List testing steps** - Describe how to manually test changes
4. **Reference the issue** - Link to the original issue being resolved
5. **Preserve existing functionality** - Don't break working features
6. **Follow WordPress coding standards** - Use proper escaping, sanitization, and WordPress functions

### Code Quality Checklist

Before finalizing any changes:
- [ ] All PHP files include `ABSPATH` security check
- [ ] User-facing strings use translation functions (`__()` or `_e()`)
- [ ] All output is properly escaped (`esc_html()`, `esc_attr()`, `esc_url()`)
- [ ] Functions are prefixed with `sag4wd_live_`
- [ ] Code follows existing style and indentation
- [ ] No debug code (var_dump, console.log) left in files
- [ ] Comments are minimal and meaningful
- [ ] Mobile responsiveness maintained
- [ ] No new dependencies added unless absolutely necessary

### Security Validation

- All user input is sanitized
- Database queries use `$wpdb->prepare()`
- Nonces are used for form submissions
- No sensitive data in code (API keys, passwords)
- File permissions and uploads are validated

## Resources

- **Theme Documentation:** See `wp-content/themes/sag4wd-live/README.md`
- **Technical Details:** See `wp-content/themes/sag4wd-live/TECHNICAL.md`
- **Deployment Guide:** See `wp-content/themes/sag4wd-live/DEPLOYMENT.md`
- **Project Summary:** See `THEME-SUMMARY.md`
- **WordPress Codex:** https://codex.wordpress.org/
- **WordPress Coding Standards:** https://developer.wordpress.org/coding-standards/

## Contact

- **Developer:** Shabeer Ibrahim
- **Email:** info@sag4wd.com
- **Repository:** https://github.com/shabeer05in/Sag
