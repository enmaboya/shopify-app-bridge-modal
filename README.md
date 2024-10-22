How start

1) install dependencies
```
composer install
```
2) copy .env
```
cp .env.example .env
```
3) create "database.sqlite" file inside "database" folder and run migrations
```
php artisan migrate
```
4) fill env variables SHOPIFY_API_KEY and SHOPIFY_API_SECRET;
5) fill URLs in "shopify partners"
- go to https://partners.shopify.com/***/apps/***/edit
```
App URL
https://***/
```
```
Allowed redirection URL(s)
https://***/
https://***/authenticate
```
6) run application
```
php artisan serve
```
7) install the app in the store
