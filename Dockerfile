# Set ServerName globally to avoid the warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Use the official PHP image with Apache as the base image
FROM php:7.4-apache

# Enable Apache mod_rewrite for clean URLs (if needed)
RUN a2enmod rewrite

# Copy the PHP and HTML files into the Apache server's public directory
COPY . /var/www/html/

# Expose the port Apache is running on (80)
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
