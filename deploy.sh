#!/bin/bash
# sudo docker build . -t bricx_carasco/samplephpapp:1.0.0

# sudo docker run -d -it -p 3001:80 --name "bricxcarascosamplephpapp" -v "$(pwd)"/www/public:/var/www/html bricx_carasco/samplephpapp:1.0.0

sudo docker-compose up --build