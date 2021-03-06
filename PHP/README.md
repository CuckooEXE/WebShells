# PHP

# How to Use

```bash
# Ensure that Apache2 is running
sudo systemctl enable --now apache2
# Upload the vulnerable web server
sudo cp index.php /var/www/html/
sudo chown www-data:www-data /var/www/html
```

Then navigate to `http://localhost:80/index.php`, upload the `webshell.php`. Go to `http://localhost:80/webshell.php` and start executing commands.

