# D42 - Travaux pratiques
## Créer une application web qui permet de consulter la liste des utilisateurs et la liste des cours DFS

### Docker
```bash
git clone git@github.com:Neirotciv/D42-Travaux-pratiques.git
cd D42-Travaux-pratiques
docker-compose up
```

adresse: http://localhost:9000/

### Installation manuelle
Le fichier d'import sql se trouve dans dossier data.

```php
// Identifiant utilisé pour la connection à mysql
$dsn = 'mysql:host=mysql;dbname=dfs;charset=utf8';
$username = 'user';
$password = 'password';
$options = [];
```

### Cahier des charges
- Une page web qui affiche la liste des utilisateurs (professeurs).  
  - Nom
  - Prénom
  - Rôle
  - Image / avatar
- Une page avec toutes les informations détaillées d’un utilisateur.  
  - Nom
  - Prénom
  - Image / avatar
  - Adresse
  - Téléphone
- Une page web qui affiche la liste des cours DFS27A.
  - Code (D42)
  - Nom du cours (20 premiers caractères)
  - Trigramme du professeur
  - Image représentant le cours
- Une page avec toutes les informations d’un cours
  - Code 
  - Nom du cours
  - Image
  - Description
  - Trigramme
  - Nom du professeur
  - Prénom

Les cours et les utilisateurs seront affichés sous forme de carte, avec pour contrainte d'avoir des lignes de 3 cartes maximum.
4 cours et 4 utilisateurs devront êtres créés.
