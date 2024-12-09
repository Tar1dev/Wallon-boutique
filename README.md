# Boutique e-commerce du lycee Henri WALLON

## Déploiement:
- Cloner le repo
```bash
git clone https://github.com/Tar1dev/Wallon-boutique
```

- Ajouter le .env
- Installer une base de données postgres
```bash
docker-compose up -d
```
- Faire les migrations + seeding
```bash
php artisan migrate:fresh --seed
```
- Lancer l'application
```bash
php artisan serve
```

- Lancer un serveur *vite* (développement frontend)
```bash
npm run dev
```
