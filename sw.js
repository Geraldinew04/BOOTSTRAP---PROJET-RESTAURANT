var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/css/bootstrap-theme.css',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/css/bootstrap-theme.css.map',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/css/bootstrap-theme.min.css',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/css/bootstrap-theme.css.map',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/css/bootstrap.css',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/css/bootstrap.css.map',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/css/bootstrap.min.css',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/css/bootstrap.min.css.map',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/js/bootstrap.js',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/js/bootstrap.min.js',
  '/BOOTSTRAP---PROJET-RESTAURANT/bootstrap/js/bootstrap.npm.js',
  '/BOOTSTRAP---PROJET-RESTAURANT/css/index.css',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/azulejos.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/burrito.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/chili_burrito.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/chiliconcarne.jpeg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/chimichanga.jpeg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/cuballibre.jpeg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/ensaladas.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/fajitas.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/frida.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/jarritos.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/logo1.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/logo3.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/margarita.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/nachos.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/onion.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/quesadillas.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/restaurant.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/resto2.jpg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/tacos.jpeg',
  '/BOOTSTRAP---PROJET-RESTAURANT/img/tequila.jpg'
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});