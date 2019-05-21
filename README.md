# adminPanel
Запуск
=====================
```js
npm install - установа зависимостей

npm run dev - в режиме разработки

npm run build - в продакшен
```
***
Настройка в weback.config.js
-----------------------------------
```js
target: {
    host: "admin-panel.lc", // название должно соответствовать названию домена в OpenServer
    protocol: "http:",
    port: 80
},
```