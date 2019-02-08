# See Working files :
on http://localhost:3000 or http://localhost:8000

as Guest :
- /presentation  => then img "Activités"
- /member/create

as Admin : ( for testing => email : admin@gmail.com || password : secret )
- /login


1 -	git clone git@github.com:echayotte/geromouv-animations.git  
2 -	composer install  
3 -	composer update //to avoid further problems  
4 -	cp .env.example .env  
5 -	change info in .env [DB_DATABASE=changeHere, DB_USERNAME=changeHere, DB_PASSWORD=changeHere]  
6 -	php artisan key:generate  (if there is no key in .env APP_KEY=)
7 -	php artisan migrate  
8 -	php artisan storage:link  
9 -	npm install  
10 -	npm audit fix  
11 -	npm audit  
12 -	npm install --save-dev laravel-mix@4.0.14  
13 -	npm audit //should be good now  
14 -	php artisan serve  
15 - npm run dev  
16 -	npm run watch  

responsive : iphone x/xs