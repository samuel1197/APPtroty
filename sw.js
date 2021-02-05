const cacheName = 'troty-v1';
const staticAssets = [
    './index.php',
    './index.js',
    './manifest.webmanifest'
    
]; 
self.addEventListener('install', async e =>{
    const cache = await caches.open(cacheName);
    await cache.addAll(staticAssets);
    return self.skipWaiting();
});

self.addEventListener('activate', e =>{
  self.clients.claim()
});

self.addEventListener('fetch', async e =>{
    const req = e.request;
    const url = new URL (req.url);
    
    if (url.origin === location.origin){
        e.respondWith(cacheFirst(req));    
    }
    else{
        e.respondWith(networkAndCache(req));
    }
});

     async function cacheFirst(req){
         const cache = await caches.open(cacheName);
         const cached = await cache.match(req);
         return cached || fetch(req);
     }

 async function networkAndCache(req){
     const cache = await caches.open(cacheName);
     try{
         const fresh = await fetch(req);
         await cache.put (req,fresh.clone());
         return fresh;
     } catch(e){
         const cached = await cache.match(req);
         return cached;
     }
 }
 self.addEventListener('activate', function(event) {
    event.waitUntil(
      caches.keys().then(function(cacheNames) {
        return Promise.all(
          cacheNames.filter(function(cacheName) {
            // Return true if you want to remove this cache,
            // but remember that caches are shared across
            // the whole origin
          }).map(function(cacheName) {
            return caches.delete(cacheName);
          })
        );
      })
    );
  });
