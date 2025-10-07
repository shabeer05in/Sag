# SAG 4WD WordPress Setup & Troubleshooting Guide

## Database Configuration Setup

### Initial Setup Steps

1. **Create Database in cPanel**
   - Log in to your cPanel account
   - Navigate to **MySQL Databases**
   - Create a new database (e.g., `sag4wd_db`)
   - Create a new database user with a strong password
   - Add the user to the database with **ALL PRIVILEGES**

2. **Configure wp-config.php**
   - Copy `wp-config-sample.php` to `wp-config.php`
   - Update the following constants with your database details:
     ```php
     define( 'DB_NAME', 'your_database_name' );
     define( 'DB_USER', 'your_database_user' );
     define( 'DB_PASSWORD', 'your_secure_password' );
     define( 'DB_HOST', 'localhost' );
     ```

3. **Generate Security Keys**
   - Visit https://api.wordpress.org/secret-key/1.1/salt/
   - Copy the generated keys
   - Replace the placeholder keys in wp-config.php

4. **Set Proper File Permissions**
   ```bash
   chmod 600 wp-config.php
   ```

## Troubleshooting "Error Establishing Database Connection"

### Quick Fix Checklist

- [ ] Verify database name is correct in wp-config.php
- [ ] Verify database username is correct in wp-config.php
- [ ] Verify database password is correct in wp-config.php
- [ ] Verify database host (usually 'localhost')
- [ ] Confirm database exists in cPanel → MySQL Databases
- [ ] Confirm user is assigned to database with ALL privileges
- [ ] Check if database server is running
- [ ] Verify no typos or extra spaces in wp-config.php values

### Detailed Troubleshooting Steps

#### Step 1: Verify Database Credentials in cPanel

1. Log in to cPanel
2. Go to **MySQL Databases**
3. Check:
   - Database name exists under "Current Databases"
   - User exists under "Current Users"
   - User is added to database under "Current Databases" → click database name

#### Step 2: Edit wp-config.php

1. In cPanel, open **File Manager**
2. Navigate to `/home/sag4wd/public_html/`
3. Right-click `wp-config.php` → Edit
4. Verify these lines match your cPanel database settings:
   ```php
   define( 'DB_NAME', 'sag4wd_db' );      // Must match database name in cPanel
   define( 'DB_USER', 'sag4wd_user' );    // Must match username in cPanel
   define( 'DB_PASSWORD', 'your_pass' );  // Must match user password
   define( 'DB_HOST', 'localhost' );      // Usually 'localhost' on cPanel
   ```

#### Step 3: Test Database Connection

Create a test file `test-db.php` in public_html:

```php
<?php
$host = 'localhost';
$user = 'your_database_user';
$pass = 'your_database_password';
$db = 'your_database_name';

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    echo "Database connection successful!";
    mysqli_close($conn);
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
```

Visit `https://sag4wd.com/test-db.php` to test. **Delete this file after testing!**

#### Step 4: Reset Database Password

If you changed your database password:

1. In cPanel → MySQL Databases
2. Find the user under "Current Users"
3. Click "Change Password"
4. Set a new secure password
5. Update the password in wp-config.php immediately:
   ```php
   define( 'DB_PASSWORD', 'your_new_password' );
   ```

#### Step 5: Check Database User Privileges

1. In cPanel → MySQL Databases
2. Scroll to "Add User To Database"
3. Select your user and database
4. Click "Add"
5. On privileges screen, select **ALL PRIVILEGES**
6. Click "Make Changes"

#### Step 6: Verify Database Host

Most cPanel installations use `localhost`, but some may use:
- `localhost`
- `127.0.0.1`
- `localhost:/tmp/mysql.sock`
- A specific IP address or hostname

Check with your hosting provider if `localhost` doesn't work.

### Common Mistakes to Avoid

1. **Extra spaces**: No spaces in `define( 'DB_NAME', 'database' );`
2. **Wrong quotes**: Use straight quotes `'` not curly quotes `'`
3. **Case sensitivity**: Database names are case-sensitive on Linux
4. **Wrong file**: Make sure you're editing `wp-config.php`, not `wp-config-sample.php`
5. **User not assigned**: User must be explicitly added to database in cPanel

### Using WP Toolkit Restore

If issues persist:

1. In cPanel, open **WP Toolkit**
2. Find your WordPress installation
3. Click **Backup/Restore**
4. Select a working backup from before the issue started
5. Click **Restore**

## Security Best Practices

### Protecting wp-config.php

1. **Set restrictive permissions**:
   ```bash
   chmod 600 wp-config.php
   ```

2. **Move outside web root** (advanced):
   WordPress will look for wp-config.php in the parent directory
   ```bash
   mv wp-config.php ../
   ```

3. **Add .htaccess protection**:
   ```apache
   <files wp-config.php>
   order allow,deny
   deny from all
   </files>
   ```

4. **Never commit to version control**:
   Add to `.gitignore`:
   ```
   wp-config.php
   ```

### Password Security

- Use passwords with 20+ characters
- Include uppercase, lowercase, numbers, and symbols
- Never reuse passwords
- Use a password manager
- Change passwords periodically
- Never share passwords in public forums or GitHub issues

## Database Optimization Tips

### Regular Maintenance

1. **Optimize database tables**:
   - cPanel → phpMyAdmin
   - Select your database
   - Check all tables
   - "With selected" → Optimize table

2. **Regular backups**:
   - Use cPanel backup tools
   - Or WP Toolkit automatic backups
   - Keep at least 3 backup versions

3. **Monitor database size**:
   - Check in cPanel → MySQL Databases
   - Large databases may need optimization

## Emergency Recovery

If site is completely down:

1. **Enable WordPress debug mode**:
   Edit wp-config.php:
   ```php
   define( 'WP_DEBUG', true );
   define( 'WP_DEBUG_LOG', true );
   define( 'WP_DEBUG_DISPLAY', false );
   ```
   Check `/wp-content/debug.log` for errors

2. **Use phpMyAdmin**:
   - Access via cPanel → phpMyAdmin
   - Check if database tables exist
   - Look for corrupted tables (marked with "in use")

3. **Contact hosting support**:
   - Provide them with the exact error message
   - Ask them to verify MySQL service is running
   - Request database connection logs

## Need More Help?

- WordPress Support Forums: https://wordpress.org/support/
- cPanel Documentation: https://docs.cpanel.net/
- Hosting Provider Support: Contact your hosting company

---

**⚠️ IMPORTANT SECURITY NOTE**: Never share your database password in public forums, GitHub issues, or any public location. All database configuration should be done privately on your server.
