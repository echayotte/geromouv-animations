# See Working files :
on http://localhost:3000 or http://localhost:8000

as Guest :
- /presentation  => then img "Activités"
- /member/create

as Admin : ( for testing => email : admin@gmail.com || password : secret )
- /login


-	git clone git@github.com:echayotte/geromouv-animations.git  
-	composer install 
-	composer require barryvdh/laravel-debugbar --dev // if not in composer.json
-	composer update //to avoid further problems  
-	cp .env.example .env  
-	change info in .env [DB_DATABASE=changeHere, DB_USERNAME=changeHere, DB_PASSWORD=changeHere]  
-	php artisan key:generate  (if there is no key in .env APP_KEY=)
-	php artisan migrate  
-	php artisan storage:link  
-	npm install  
 -	npm audit fix  
 -	npm audit  
 -	npm install --save-dev laravel-mix@4.0.14  
 -	npm audit //should be good now  
-	php artisan serve  
- npm run dev  
- npm run watch  

responsive : iphone x/xs