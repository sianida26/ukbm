var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    // '/offline',
    // '/css/app.css',
    // '/js/app.js',
    // '/images/icons/icon-72x72.png',
    // '/images/icons/icon-96x96.png',
    // '/images/icons/icon-128x128.png',
    // '/images/icons/icon-144x144.png',
    // '/images/icons/icon-152x152.png',
    // '/images/icons/icon-192x192.png',
    // '/images/icons/icon-384x384.png',
    // '/images/icons/icon-512x512.png',
    '/login',
    '/css/tailwind.css',
    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css',
    '/storage/assets/bg-login.jpg',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match(event.request);
            })
    )
});

//network falling back to cache, update cache
// self.addEventListener('fetch', function (event) {
//     event.respondWith(
//         fetch(event.request)
//             .then(function (res) {
//                 // console.log('res', res);
//                 return caches.open(staticCacheName)
//                     .then(function (cache) {
//                         // console.log('cache', cache);
//                         cache.put(event.request.url, res.clone());
//                         return res;
//                     });
//             })
//             .catch(function (err) {
//                 return caches.match(event.request);
//             })
//     );
// });