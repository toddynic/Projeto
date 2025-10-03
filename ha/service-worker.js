const CACHE_NAME = 'forca-quiz-cache-v1';
const urlsToCache = [
  './',
  './index.html',
  './manifest.json',
  './service-worker.js',
  // Inclua aqui os arquivos CSS e JS
];

// Você pode ajustar os nomes dos arquivos CSS e JS caso estejam separados
// Como no seu código acima está tudo inline, você só precisa do index.html e manifest, service-worker.

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('activate', (event) => {
  // Limpar caches antigos
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.filter(name => name !== CACHE_NAME)
          .map(name => caches.delete(name))
      );
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request)
      .then((resp) => {
        if (resp) {
          return resp;
        }
        return fetch(event.request);
      })
  );
});