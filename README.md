# docker-larvuevite
Docker-compose สำหรับ build Laravel10 Vuejs3 Vite แบบ Multiple Site

# Laravel-Docker
Laravel in Docker Compose

# Setup

Copy File Env  
`
cp .env-example .env
`  
`
cp src/.env-example .env
`

Setup env  
`
vim .env
`  
`
vim src/.env
`  

# Run Docker  
`
docker-compose up -d
`

# Dependencies Install
`
docker-compose run composer install
`  
`
docker-compose run npm install
`  
docker-compose run npm run build
` 

# Setup Laravel
Generate Key  
`
docker-compose run artisan key:generate
`

# Phpmyadmin 
http://localhost:81
