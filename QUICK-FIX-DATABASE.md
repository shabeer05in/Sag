# Quick Fix: Database Connection Error

If you're seeing **"Error establishing a database connection"** on your WordPress site, follow these steps:

## 🚨 Immediate Fix (5 minutes)

### Step 1: Access cPanel
- Log in to your hosting cPanel account

### Step 2: Open File Manager
1. In cPanel, click **File Manager**
2. Navigate to `/home/sag4wd/public_html/`
3. Find and right-click `wp-config.php`
4. Click **Edit** (or Code Edit)

### Step 3: Verify Database Settings

Look for these lines and verify they match your cPanel database:

```php
define( 'DB_NAME', 'your_database_name' );
define( 'DB_USER', 'your_database_user' );
define( 'DB_PASSWORD', 'your_database_password' );
define( 'DB_HOST', 'localhost' );
```

### Step 4: Check Database in cPanel

1. Go back to cPanel
2. Click **MySQL Databases**
3. Verify:
   - ✅ Your database exists under "Current Databases"
   - ✅ Your user exists under "Current Users"
   - ✅ User is assigned to database (check under database name)

### Step 5: Fix User Privileges

If user is not assigned or lacks privileges:

1. In MySQL Databases, scroll to "Add User To Database"
2. Select your **user** and **database** from dropdowns
3. Click **Add**
4. Select **ALL PRIVILEGES**
5. Click **Make Changes**

### Step 6: Save and Test

1. Save `wp-config.php` if you made changes
2. Reload your website: https://sag4wd.com
3. ✅ Site should load normally

## 🔐 If You Changed Your Password

If you recently changed your database password:

1. In cPanel → MySQL Databases → Current Users
2. Click **Change Password** next to your user
3. Set your new password
4. **IMMEDIATELY** update wp-config.php:
   ```php
   define( 'DB_PASSWORD', 'your_new_password_here' );
   ```

## ❌ Still Not Working?

### Try These:

1. **Check for typos**:
   - No extra spaces in values
   - Use straight quotes `'` not curly `'`
   - Database names are case-sensitive

2. **Try different DB_HOST values**:
   ```php
   define( 'DB_HOST', 'localhost' );
   // or try:
   define( 'DB_HOST', '127.0.0.1' );
   ```

3. **Use WP Toolkit Restore**:
   - cPanel → WP Toolkit
   - Find your site
   - Click Backup/Restore
   - Restore from a working backup

4. **Enable debugging**:
   Add to wp-config.php (before "That's all"):
   ```php
   define( 'WP_DEBUG', true );
   define( 'WP_DEBUG_LOG', true );
   ```
   Check `/wp-content/debug.log` for errors

## 📚 Need More Help?

See **[DATABASE-SETUP.md](DATABASE-SETUP.md)** for detailed troubleshooting and explanations.

## ⚠️ Important Security Reminder

**NEVER** share your database password in:
- ❌ Public forums
- ❌ GitHub issues
- ❌ Email to strangers
- ❌ Screenshots

All database work should be done **privately** on your server.

---

**Need immediate help?** Contact your hosting provider's support team with the error message.
