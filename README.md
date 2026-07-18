# XSS Labs 🔓

A progressive series of XSS (Cross-Site Scripting) vulnerability labs designed for security researchers and developers to learn about XSS exploitation and prevention techniques.

![XSS Labs](index.png)

## Overview

XSS Labs contains 20+ interactive levels that progressively introduce different types of XSS vulnerabilities, from simple reflected XSS to more complex scenarios involving encoding, filtering, and event handler bypasses. Each level presents a unique challenge that requires bypassing different security measures.

## Features

✅ **20+ Progressive Levels** - From beginner to advanced  
✅ **Real-world Scenarios** - Practical XSS attack vectors  
✅ **Visual Feedback** - Screenshot references for each level  
✅ **Multiple Attack Types** - Reflected, Stored, DOM-based XSS  
✅ **Encoding Challenges** - Learn bypassing filters and sanitization  
✅ **Educational** - Great for learning and teaching web security  

## Repository Structure

```
xss-labs/
├── index.php          # Main entry point with welcome page
├── level1.php         # Level 1: Basic reflected XSS
├── level2.php - level20.php  # Progressive difficulty levels
├── angular.min.js     # Angular.js library for certain levels
├── chk.js            # Challenge validation script
├── *.png             # Screenshot references for each level
├── *.swf             # Flash-based XSS challenges
└── README.md         # This file
```

## System Requirements

- **PHP** 5.6 or higher (PHP 7.0+ recommended)
- **Web Server**: Apache, Nginx, or any PHP-capable server
- **Browser**: Modern browser (Chrome, Firefox, Edge, Safari)
- **Port**: Available port (default: 8000, 8080, or 80)

## Installation & Setup

### Option 1: Using PHP Built-in Server (Recommended for Testing)

This is the quickest way to get started.

```bash
# Clone the repository
git clone https://github.com/M0ustafaDev/xss-labs.git
cd xss-labs

# Start PHP built-in server
php -S localhost:8000

# Or run on a different port
php -S 127.0.0.1:8080

# Or allow external connections (be careful!)
php -S 0.0.0.0:8000
```

Then open your browser and navigate to:
```
http://localhost:8000
```

### Option 2: Using Apache

#### On Linux/macOS:

```bash
# 1. Copy the project to Apache web root
sudo cp -r xss-labs /var/www/html/

# Or create a symlink
sudo ln -s /path/to/xss-labs /var/www/html/xss-labs

# 2. Ensure proper permissions
sudo chown -R www-data:www-data /var/www/html/xss-labs
sudo chmod -R 755 /var/www/html/xss-labs

# 3. Enable PHP module (if not already enabled)
sudo a2enmod php7.4
# or for PHP 8.x
sudo a2enmod php8.1

# 4. Restart Apache
sudo systemctl restart apache2
```

#### On Windows:

```bash
# 1. Copy project to Apache's htdocs folder
# Default location: C:\Apache24\htdocs\

copy-item -Path "xss-labs" -Destination "C:\Apache24\htdocs\" -Recurse

# 2. Restart Apache from Services or command line
net stop Apache2.4
net start Apache2.4
```

Then access via:
```
http://localhost/xss-labs
```

### Option 3: Using Nginx

```bash
# 1. Copy project to Nginx web root
sudo cp -r xss-labs /usr/share/nginx/html/

# 2. Configure Nginx site
sudo nano /etc/nginx/sites-available/xss-labs
```

Add this configuration:

```nginx
server {
    listen 80;
    server_name localhost;
    root /usr/share/nginx/html/xss-labs;
    
    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastname;
        include fastcgi_params;
    }
    
    index index.php index.html;
}
```

```bash
# 3. Enable the site
sudo ln -s /etc/nginx/sites-available/xss-labs /etc/nginx/sites-enabled/

# 4. Test and restart Nginx
sudo nginx -t
sudo systemctl restart nginx
```

### Option 4: Using Docker

Create a `Dockerfile`:

```dockerfile
FROM php:7.4-apache
RUN docker-php-ext-install mysqli
COPY . /var/www/html/
EXPOSE 80
CMD ["apache2-foreground"]
```

Then build and run:

```bash
docker build -t xss-labs .
docker run -p 8000:80 xss-labs
```

Access at: `http://localhost:8000`

## Quick Start

```bash
# Clone and navigate to project
git clone https://github.com/M0ustafaDev/xss-labs.git
cd xss-labs

# Start local server (PHP 5.4+)
php -S localhost:8000

# Open browser
# Navigate to http://localhost:8000
```

## How to Use

1. **Start at the Welcome Page**: The `index.php` file serves as the entry point
2. **Click the Image**: Start your XSS journey through the levels
3. **Complete Each Challenge**: Each level has a specific objective
4. **Bypass Filters**: Learn different XSS bypass techniques as difficulty increases
5. **Progress Through Levels**: Move from Level 1 to Level 20+

## Level Guide

### Early Levels (1-7)
- **Basic reflected XSS** in user input
- Simple HTML injection
- Introduction to alert() functions
- Understanding XSS payloads

### Mid Levels (8-13)
- **HTML/attribute escaping** bypasses
- Event handler injection
- Encoding and filtering challenges
- Multiple filter combinations

### Advanced Levels (14-20+)
- **Complex filter bypasses**
- DOM-based XSS
- JavaScript manipulation
- Flash/SWF vulnerabilities

## Example Payloads

### Level 1: Simple Alert
```javascript
<script>alert('XSS')</script>
```

### Level 2: Event Handler
```html
"><img src=x onerror="alert('XSS')">
```

### Level 5: Filter Bypass
```html
<img src=x onerror="alert('XSS')">
```

## Key Concepts Covered

- **Reflected XSS**: User input reflected in response
- **HTML Injection**: Breaking out of HTML context
- **Attribute Escaping**: Breaking out of HTML attributes
- **JavaScript Context**: Escaping JavaScript code
- **Event Handlers**: Triggering XSS through event attributes
- **Filter Evasion**: Bypassing input validation and sanitization
- **Encoding**: HTML, JavaScript, and URL encoding techniques
- **DOM Manipulation**: Client-side XSS attacks

## Learning Resources

- 📚 [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)
- 📖 [MDN: Cross-site Scripting (XSS)](https://developer.mozilla.org/en-US/docs/Glossary/Cross-site_scripting_XSS)
- 🎓 [PortSwigger Web Security Academy](https://portswigger.net/web-security/cross-site-scripting)
- 🔍 [OWASP Top 10](https://owasp.org/www-project-top-ten/)

## Troubleshooting

### PHP Not Found
```bash
# Check if PHP is installed
php -v

# Install PHP (Ubuntu/Debian)
sudo apt-get install php php-cli

# Install PHP (macOS with Homebrew)
brew install php
```

### Port Already in Use
```bash
# Use a different port
php -S localhost:8080

# Or find what's using the port
# Linux/macOS
lsof -i :8000

# Windows
netstat -ano | findstr :8000
```

### Permission Denied
```bash
# Fix file permissions (Linux/macOS)
chmod -R 755 xss-labs
chmod -R 777 xss-labs  # If needed
```

### Blank Page or 403 Error
```bash
# Ensure index.php exists and is readable
ls -la index.php

# Check file ownership
ls -la | head

# Fix permissions if needed
sudo chown -R $USER:$USER .
chmod -R 755 .
```

## Security Notice ⚠️

**This repository is for educational and authorized security testing purposes only.**

- ✅ Use this in controlled environments only
- ✅ Use for learning web security concepts
- ✅ Use for authorized penetration testing
- ❌ Do NOT use against systems you don't own or haven't been authorized to test
- ❌ Do NOT use for malicious purposes

## Browser Compatibility

- ✅ Google Chrome/Chromium
- ✅ Mozilla Firefox
- ✅ Microsoft Edge
- ✅ Safari
- ✅ Opera

## Recommended Browser Developer Tools

- **Chrome DevTools** - F12
- **Firefox Developer Edition** - F12
- **Burp Suite Community** - Request/Response analysis
- **OWASP ZAP** - Security testing

## Contributing

Contributions are welcome! You can:
- Report bugs or issues
- Suggest improvements
- Add new levels or challenges
- Improve documentation
- Provide translations

## License

Please check the repository for license information.

## Original Repository

This is a fork of [do0dl3/xss-labs](https://github.com/do0dl3/xss-labs)

## Author

**M0ustafaDev** - Security Researcher & Developer

## Disclaimer

Use this project responsibly. Unauthorized access to computer systems is illegal. Always obtain proper authorization before conducting security testing.

---

**Last Updated**: 2024  
**Difficulty**: Beginner to Advanced  
**Estimated Time**: 2-4 hours to complete all levels  

Happy Learning! 🚀🔐
