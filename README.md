TP Combat POO

Résumé des compétences visées
1. Vous allez utiliser les connaissances acquises sur PDO pour gérer une base de données
de héros de jeu.
2. Vous allez créer des classes PHP qui ont des rôles bien déterminés et séparés.
3. Vous allez en apprendre un peu plus sur l’intérêt des classes.
4. Vous allez découvrir le principe de l’auto loading.
5. Vous allez découvrir le principe de l’hydratation et l’imbrication de la PDO avec les
classes.
6. Vous allez utiliser les principes fondamentaux de la POO : l’encapsulation, l’héritage, le
polymorphisme.

2

Instructions générales
Nous allons découper ce TP en 2 sprints, Une correction sera faite entre les 2.
Pour réaliser ce TP, vous travaillerez par équipe de deux ou trois.
Vous devrez soigner l&#39;apparence de l&#39;application ainsi que l&#39;arborescence du projet.
Vous devrez élaborer une base de données en lien avec les différentes fonctionnalités.
Au fur et à mesure de la progression, de nouvelles itérations du projet s&#39;ajouteront, vous
devez préparer votre code à la maintenabilité et la scalabilité (mise à l&#39;échelle) en découpant
vos fonctionnalités le plus possible dans vos objets.

3

Objectifs sprint 1 :
Nous allons créer un jeu de combat en tour par tour entre des héros que l&#39;on créé et des
monstres automatiquement générés.
● Chaque visiteur peut créer un héros en saisissant seulement un nom. Pas de mot
de passe requis pour faire simple sur ce TP.

● L&#39;utilisateur peut également choisir un des héros déjà créés avec lequel se battre
si le héros est toujours en vie ( HP &gt; 0 )

4
● L’utilisateur peut lancer un nouveau combat, ce qui a pour effet de créer un héros
en base de données.

5
● Après qu&#39;un combat ait été lancé, un monstre est automatiquement créé. Le
déroulé du combat s&#39;enregistre dans une variable tableau PHP que l&#39;on peut
afficher plus tard.

● L’utilisateur voit son héros survivre ou mourir au combat.
● Lorsqu’un joueur ou le monstre n&#39;a plus de points de vie, le combat est terminé.
● Donner la possibilité de rejouer. Si le héros survit, il devient sélectionnable à
nouveau dans l&#39;accueil.

6

Structure du projet
Le projet devra comporter 8 fichiers PHP :
● config/autoload.php : permettant le chargement automatique des classes
● config/db.php : permettant la connexion à la bdd (Une instance de PDO devra
être créée)
● classes/Hero.php : définit la classe Heroe possédant :
○ 2 propriétés :
■ son nom (unique).
■ ses points de vie.
○ 2 méthodes :
■ frapper un monstre

● classes/HeroesManager.php : définit la classe HeroesManager qui stocke les
données et comporte ces fonctionnalités :
○ enregistrer un nouveau héros
○ modifier un héros
○ sélectionner un héros
○ récupérer une liste de plusieurs héros vivants
○ savoir si un héros existe.
● classes/FightsManager.php : définit la classe FightsManager qui stocke les
données et comporte ces fonctionnalités :
○ déclencher un combat et obtenir les résultats du combat
○ créer automatiquement un monstre
● index.php : affichant l&#39;interface du mini-jeu de combat
○ Le joueur peut créer un héro
○ Le joueur peut sélectionner un héro existant
● fight.php : utilise les classes instanciées et les méthodes souhaitées sur les
objets. (Une instance de HeroesManager devra être créée)

7

Ressources
● class : https://tutowebdesign.com/declaration-class-php.php​
● visibilité : https://tutowebdesign.com/visibilite-classe-php.php​
● héritage : https://tutowebdesign.com/heritage-objet-php.php
Plus largement tout ce cours : https://tutowebdesign.com/poo-php.php​

Objectifs sprint 2 :
● Nous allons améliorer la qualité de notre code :
○ Le code rendu devra respecter les normes PHP PSR-1 et PSR-2 :
■ ​https://www.php-fig.org/psr/psr-1/​
■ https://www.php-fig.org/psr/psr-2/​
○ Le code doit être découpé et refactorisé pour le rendre scalable et
maintenable.

● Nous allons ajouter de nouvelles fonctionnalités :
○ L’utilisateur pourra choisir entre différentes classes à la création de son
héros : guerrier, mage ou archer
○ Les monstres auront également un type automatique parmi : ogre, sorcier,
fantassin
○ Les intéractions entre classes sont définies de la sorte :
■ Un guerrier reçoit 2x plus de dégâts lorsque attaqué par un sorcier

8
■ Un archer reçoit 2x plus de dégâts lorsque attaqué par un ogre
■ Un mage reçoit 2x plus de dégâts lorsque attaqué par un fantassin
○ Chaque classe implémente une attaque spéciale propre en plus de
l’attaque classique commune à toutes les classes.
○ Les héros ont désormais un niveau d’énergie, et chaque action en
consomme. L’énergie est en partie récupérée à chaque tour
automatiquement.

● BONUS
○ Les attaques spéciales de chaque classe peuvent avoir différents effets en
plus d’infliger des dégâts : gel, poison, affaiblissement…
○ Plus d’attaques, avec différents effets et coûts en énergie !
