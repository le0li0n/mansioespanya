# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . .

# Expose port 80 to the outside world
EXPOSE 80

# Configure Apache
RUN a2enmod rewrite

# Start Apache in the foreground
CMD ["apache2-foreground"]
