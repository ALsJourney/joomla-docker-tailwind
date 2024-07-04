# Use the official Joomla image as the base
FROM joomla:latest

# Update and install necessary packages
RUN apt-get update && apt-get install -y vim

# Copy custom PHP configuration file
COPY php.ini /usr/local/etc/php/conf.d/

# Expose the port (optional, already exposed by base image)
EXPOSE 80
