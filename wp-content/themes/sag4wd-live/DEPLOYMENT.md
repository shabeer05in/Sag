# SAG4WD Live Theme Deployment Guide

This document provides instructions for deploying the SAG4WD Live Theme to the Contabo server.

## Prerequisites

- Access to the SAG4WD GitHub repository
- SSH access to the Contabo server
- WordPress installation at the target location

## Deployment Methods

### 1. Automatic Deployment via GitHub Actions

The theme is automatically deployed when changes are pushed to the `main` branch.

**Workflow Details:**
- **Trigger**: Push to `main` branch with changes in:
  - `wp-content/themes/sag4wd-live/**`
  - `wp-content/themes/sag4wd-child/**`
  - `wp-content/mu-plugins/sag4wd-tweaks.php`

**Steps Performed:**
1. Checkout repository
2. Add SSH key for authentication
3. Sync sag4wd-child theme to server
4. Sync sag4wd-live theme to server
5. Sync mu-plugins to server
6. Clear OPcache
7. Run custom deploy script (if exists)

**Required GitHub Secrets:**
- `SSH_PRIVATE_KEY` - SSH private key for server access
- `SSH_USER` - SSH username (usually `sag4wd`)
- `SSH_HOST` - Server hostname or IP
- `REMOTE_PATH` - Path to WordPress installation (e.g., `/home/sag4wd/public_html`)

### 2. Manual Deployment via rsync

If you need to deploy manually:

```bash
# Deploy sag4wd-live theme
rsync -avz --delete \
  wp-content/themes/sag4wd-live/ \
  user@server:/path/to/wordpress/wp-content/themes/sag4wd-live/

# Deploy sag4wd-child theme
rsync -avz --delete \
  wp-content/themes/sag4wd-child/ \
  user@server:/path/to/wordpress/wp-content/themes/sag4wd-child/

# Deploy mu-plugins
rsync -avz \
  wp-content/mu-plugins/sag4wd-tweaks.php \
  user@server:/path/to/wordpress/wp-content/mu-plugins/
```

### 3. Manual Deployment via FTP/SFTP

1. Connect to the server via FTP/SFTP client
2. Navigate to the WordPress installation directory
3. Upload the `wp-content/themes/sag4wd-live` folder
4. Ensure all files and folders maintain their structure

## Post-Deployment Steps

### 1. Activate the Theme

1. Log in to WordPress admin panel
2. Navigate to **Appearance > Themes**
3. Find "SAG4WD Live Theme"
4. Click **Activate**

### 2. Configure Theme Settings

1. Go to **Appearance > Customize**
2. Set up:
   - Site Identity (logo, site title)
   - Colors (if needed)
   - Menus
   - Widgets

### 3. Create Required Pages

Create the following pages and assign templates:

#### Garage Page
1. Create new page: **Pages > Add New**
2. Title: "Garage" or "Our Builds"
3. Template: Select "Garage Page" from Template dropdown
4. Publish

#### Parts Page
1. Create new page: **Pages > Add New**
2. Title: "Parts" or "Parts Catalog"
3. Template: Select "Parts Page" from Template dropdown
4. Publish

### 4. Configure Primary Menu

1. Go to **Appearance > Menus**
2. Create a new menu or edit existing
3. Add pages: Home, Garage, Parts, Services, Contact
4. Assign to "Primary Menu" location
5. Save menu

### 5. Upload Images

Upload images to the theme's assets directory:
- Vehicle images for garage showcase
- Part images for parts catalog
- Logo (if using custom logo)

Recommended paths:
- `wp-content/themes/sag4wd-live/assets/images/placeholder-vehicle.jpg`
- `wp-content/themes/sag4wd-live/assets/images/placeholder-part.jpg`

### 6. Test Theme Features

Verify the following:
- [ ] Homepage displays correctly
- [ ] Garage page shows vehicle showcase
- [ ] Parts page displays parts catalog
- [ ] Navigation menu works
- [ ] Interactive garage game loads
- [ ] Responsive design on mobile
- [ ] All links work correctly
- [ ] Contact forms function (if applicable)

## Troubleshooting

### Theme Not Appearing in WordPress

**Solution:**
- Verify the theme directory is at: `wp-content/themes/sag4wd-live/`
- Check that `style.css` exists and has proper header
- Ensure file permissions are correct (755 for directories, 644 for files)

### CSS/JS Not Loading

**Solution:**
- Clear WordPress cache
- Clear browser cache
- Check file paths in `functions.php`
- Verify assets directory structure

### OPcache Issues

**Solution:**
```bash
# SSH into server and run:
php -r "opcache_reset();"
# Or restart PHP-FPM
sudo systemctl restart php-fpm
```

### Deployment Fails

**Solution:**
- Check GitHub Actions logs
- Verify SSH credentials in GitHub Secrets
- Ensure server has enough disk space
- Check file permissions on server

## Server Requirements

- PHP 7.4 or higher
- WordPress 5.8 or higher
- MySQL 5.6 or higher
- Apache/Nginx web server
- SSH access for deployment

## File Permissions

Recommended permissions:
- Directories: `755` (drwxr-xr-x)
- PHP/CSS/JS files: `644` (-rw-r--r--)

Set permissions:
```bash
find wp-content/themes/sag4wd-live -type d -exec chmod 755 {} \;
find wp-content/themes/sag4wd-live -type f -exec chmod 644 {} \;
```

## Backup

Before deploying, always backup:
1. Current theme files
2. WordPress database
3. Theme settings/customizations

```bash
# Backup theme
tar -czf sag4wd-live-backup-$(date +%Y%m%d).tar.gz \
  /path/to/wordpress/wp-content/themes/sag4wd-live/

# Backup database
mysqldump -u username -p database_name > backup-$(date +%Y%m%d).sql
```

## Rollback Procedure

If issues occur after deployment:

1. **Via GitHub:**
   - Revert the commit that caused issues
   - Push to main branch
   - Automatic deployment will restore previous version

2. **Manual Rollback:**
   ```bash
   # Restore from backup
   cd /path/to/wordpress/wp-content/themes/
   rm -rf sag4wd-live/
   tar -xzf sag4wd-live-backup-YYYYMMDD.tar.gz
   ```

## Support

For deployment issues or questions:
- Email: info@sag4wd.com
- Phone: +968 9966 9903 / +968 9512 1532

## Deployment Checklist

- [ ] Backup current theme and database
- [ ] Test changes in development environment
- [ ] Commit and push changes to repository
- [ ] Monitor GitHub Actions deployment
- [ ] Verify deployment on production server
- [ ] Test all theme features
- [ ] Clear all caches
- [ ] Check mobile responsiveness
- [ ] Test on different browsers
- [ ] Verify SEO elements
- [ ] Check page load speed
