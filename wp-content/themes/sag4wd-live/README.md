# SAG4WD Live Theme

Official WordPress theme for SAG4WD.com - Premium 4x4 Customization & Off-Road Accessories in Oman.

## Description

SAG4WD Live Theme is a custom-built WordPress theme designed specifically for the SAG 4 Wheel Drive business. It features a modern dark design, responsive layout, and specialized templates for showcasing garage projects and parts catalog.

## Features

- **Responsive Design**: Fully responsive and mobile-friendly
- **Custom Templates**: 
  - Garage Page (page-garage.php) - Showcase vehicle builds with interactive elements
  - Parts Page (page-parts.php) - Display parts catalog
- **Interactive Elements**: JavaScript-powered interactive garage explorer
- **Dark Theme**: Professional dark color scheme optimized for automotive content
- **SEO Ready**: Clean, semantic HTML5 markup
- **Translation Ready**: All strings are translatable

## Installation

1. Upload the `sag4wd-live` folder to `/wp-content/themes/`
2. Activate the theme through the 'Appearance' > 'Themes' menu in WordPress
3. Configure the theme settings and create a menu assigned to 'Primary Menu'

## Theme Structure

```
sag4wd-live/
├── assets/
│   ├── css/
│   │   └── style.css          # Main theme styles
│   ├── js/
│   │   └── game.js            # Interactive elements
│   └── images/
│       └── README.md
├── template-parts/
│   ├── content.php            # Post content template
│   └── content-none.php       # No results template
├── style.css                  # Theme header (required)
├── functions.php              # Theme functions
├── header.php                 # Header template
├── footer.php                 # Footer template
├── index.php                  # Main template
├── front-page.php             # Home page template
├── page-garage.php            # Garage page template
├── page-parts.php             # Parts page template
├── sidebar.php                # Sidebar template
└── screenshot.txt             # Theme screenshot placeholder
```

## Usage

### Creating a Garage Page

1. Create a new Page in WordPress
2. Assign the "Garage Page" template
3. The page will automatically display vehicle showcase and interactive elements

### Creating a Parts Page

1. Create a new Page in WordPress
2. Assign the "Parts Page" template
3. The page will display the parts catalog grid

### Customization

The theme can be customized through:
- WordPress Customizer (Appearance > Customize)
- Editing `assets/css/style.css` for styling changes
- Editing `assets/js/game.js` for interactive behavior
- Creating a child theme for advanced modifications

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Credits

- Theme Author: Shabeer Ibrahim
- Company: SAG 4 Wheel Drive
- Website: https://sag4wd.com

## Version History

### 1.0.0
- Initial release
- Core theme structure
- Garage and Parts templates
- Interactive game module
- Responsive design

## Support

For support and customization requests, contact:
- Email: info@sag4wd.com
- Phone: +968 9966 9903 / +968 9512 1532

## License

This theme is proprietary software developed for SAG4WD.com
