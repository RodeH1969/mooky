self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open('coffee-shot-v1').then((cache) => {
      return cache.addAll([
        '/index.html',
        '/static/sponsor_1.png',
        '/static/winner.png',
        '/static/winner_2.png'
      ]);
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request);
    })
  );
});