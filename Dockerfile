# Use the official PHP image
FROM php:8.2-cli

# Set the working directory
WORKDIR /app

# Copy all your site files into the container
COPY . /app

# Expose Render's port
EXPOSE 10000

# Start PHP built-in server on Render's assigned $PORT
CMD php -S 0.0.0.0:${PORT}
