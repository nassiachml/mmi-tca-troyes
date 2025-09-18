# Introduction

### Un parcours moderne à travers l'hébergement, la cybersécurité et l'intelligence artificielle

Durant ce cursus, nous allons explorer ensemble trois piliers essentiels du monde technique : l'**hébergement**, la **cybersécurité** et l'**intelligence artificielle**.

Chacun de ces domaines sera abordé à travers le prisme du développement web, en s'appuyant sur les pratiques les plus récentes du monde professionnel.

* L'**hébergement** : Nous allons découvrir comment les applications web sont rendues accessibles aux utilisateur⋅ices. Ce sujet est directement lié au rôle d'**administrateur⋅ice système**, une figure clé dans la chaîne de production logicielle. Bien que nous ne nous attardions pas sur des notions de base comme la configuration de pare-feux ou le routage réseau, nous allons nous concentrer sur les concepts modernes qui lient le développement à l'infrastructure.

* La **cybersécurité** : Loin d'être une simple couche de protection à ajouter en fin de projet, la sécurité sera étudiée sous l'angle du **développeur**. Nous apprendrons à concevoir des applications robustes et à intégrer les bonnes pratiques de sécurité directement dans notre code, afin de prévenir les failles dès leur conception.

* L'**intelligence artificielle** : Nous analyserons les concepts fondamentaux de l'IA, mais nous nous concentrerons également sur la manière dont elle s'intègre au cycle de vie du développement logiciel.

Ensemble, nous allons nous éloigner des approches traditionnelles pour embrasser une vision plus agile et collaborative. Le but de ce cours est de vous donner les clés pour comprendre et naviguer dans un environnement technique en constante évolution, en y intégrant les aspects de qualité logiciel et les aspects humains du développement.

---

## L'hébergement sous l'angle du DevOps

### Du fossé entre les métiers à l'émergence du DevOps

Historiquement, le développement et l'administration système étaient deux mondes distincts. Les équipes travaillaient souvent en silos, parfois même dans des services ou des bâtiments séparés, ce qui créait une déconnexion profonde entre la conception d'un logiciel et sa mise en production.

Face à ce constat, le mouvement **DevOps** a émergé. Bien plus qu'un simple poste, il s'agit d'un ensemble de pratiques, d'une culture et d'outils visant à créer une collaboration et une intégration continue entre les équipes de développement (**Dev**) et d'opérations (**Ops**).

Sans une approche DevOps, le déploiement d'un logiciel, d'un site web ou d'une nouvelle fonctionnalité peut rapidement devenir une source de frictions. C'est le moment où les objectifs, parfois contradictoires, des deux équipes entrent en collision.

* Les **développeur⋅euses** se concentrent sur la création de valeur, c'est-à-dire l'ajout de nouvelles fonctionnalités, et cherchent à livrer rapidement.
* Les **administrateur⋅ices système** ont pour mission de garantir la stabilité, la sécurité et la performance de l'application en production. Elles⋅ils sont donc naturellement prudent⋅es face aux changements susceptibles d'introduire des bugs ou des vulnérabilités.

![Sans le DevOps]

Cette séparation stricte, où le code était "jeté par-dessus le mur", entraînait des retards, des incompréhensions et des conflits de responsabilité. Le DevOps cherche à briser ce mur en favorisant la collaboration, l'automatisation et le partage des responsabilités. Il ne s'agit pas de fondre les rôles, mais de construire des ponts entre eux.

![Conflit de responsabilité]

Voici comment cette approche se concrétise :

#### Une culture de responsabilité partagée et de collaboration

Les rôles traditionnels se transforment. Les développeur⋅euses ne se contentent plus de coder, elles⋅ils s'impliquent dans le déploiement, le suivi de leur application en production et la gestion des incidents. Symétriquement, les administrateur⋅ices système participent plus en amont au cycle de vie du développement pour s'assurer que l'infrastructure est prête à accueillir les nouvelles fonctionnalités.

Cette collaboration se manifeste par la mise en place de rituels et de pratiques, tels que la revue de code croisée ou le partage de la gestion des alertes de production, afin que chacun⋅e ait une meilleure compréhension des contraintes et des besoins de l'autre. Le but n'est pas de tout savoir, mais de mieux se comprendre pour travailler ensemble plus efficacement.

![Avec le DevOps]

#### Une philosophie d'automatisation

L'automatisation est au cœur du DevOps. L'objectif est de réduire les tâches manuelles et répétitives, sources d'erreurs et de frustrations.

* Les développeur⋅euses automatisent la construction, les tests et le déploiement de leurs applications grâce à des outils d'**Intégration et de Déploiement Continu** (**CI/CD**).
* Les administrateur⋅ices système, quant à elles⋅eux, adoptent des principes de **Infrastructure as Code** (**IaC**). Au lieu de configurer manuellement les serveurs, elles⋅ils les décrivent dans des scripts versionnés, traitant l'infrastructure comme s'il s'agissait de code applicatif. Cela permet de provisionner, de mettre à jour et de détruire des environnements de manière rapide et reproductible.

**Exemple concret :**
Imaginons un⋅e développeur⋅euse web qui crée une nouvelle API. Sans DevOps, elle⋅il pourrait simplement dire à l'équipe Ops : "J'ai besoin de Node.js, d'une base de données PostgreSQL et de Nginx configuré comme ceci". L'équipe Ops devrait alors tout installer et configurer manuellement, avec le risque d'oublier une étape ou d'introduire une erreur.

Avec une approche DevOps, le⋅la développeur⋅euse inclut dans son projet un simple fichier de configuration Docker (`Dockerfile`). Ce fichier décrit l'environnement requis (Node.js, les dépendances), et un second fichier (par exemple, `docker-compose.yml`) spécifie la base de données et les autres services nécessaires. L'équipe Ops peut alors lancer l'application et son environnement complet en une seule commande, sans se soucier des détails d'installation manuelle. De plus, un pipeline de CI/CD automatisé peut tester et déployer automatiquement cette application sur un serveur de production en utilisant un script IaC (comme Terraform ou Ansible) qui provisionne l'environnement en quelques minutes.

#### Le partage de compétences

Le DevOps encourage le développement de compétences croisées. Les développeur⋅euses apprennent les bases de l'administration système, de la sécurité et du déploiement. Les administrateur⋅ices, de leur côté, se familiarisent avec les pratiques de développement, les langages de scripting et l'intégration de leur travail dans les chaînes d'automatisation. Il ne s'agit pas de devenir des expert⋅es dans l'autre domaine, mais d'acquérir une connaissance suffisante pour fluidifier la communication et anticiper les problématiques.

En définitive, le DevOps est un cheminement vers plus de collaboration et de robustesse. Il ne s'agit pas de sacrifier la qualité au profit de la rapidité, mais de l'inclure dès le départ dans un processus de livraison continu et fiable, en remettant l'humain au centre des interactions techniques.

---

### Un exemple concret : Le mythe du "Ça marche sur ma machine"

Ce scénario est un grand classique du développement et de l'administration système :

* Une développeuse a créé une nouvelle fonctionnalité et se sent prête à la déployer.
* Elle sollicite l'administrateur système qui, par prudence, demande : "As-tu bien testé l'application ? Es-tu sûre qu'il n'y a pas de bug ?"
* La développeuse, après avoir testé l'application sur son poste, répond en toute bonne foi : "Oui, j'ai testé, il n'y a pas de bug".

L'administrateur système procède au déploiement, et c'est la catastrophe : l'application en production plante, les utilisateur⋅ices voient une page d'erreur 500.

Pourtant, le problème n'est pas lié à la compétence individuelle, mais au manque de **continuité** et de **collaboration** entre les environnements de travail.

La cause principale de ce type de bug est une **incohérence entre les environnements**. Le code qui fonctionne parfaitement sur la machine de développement se comporte différemment en production, car les conditions ne sont pas identiques.

Cela peut provenir de :
* **Versions logicielles différentes** : la version de PHP, de Node.js, ou de la base de données (ex. : PostgreSQL) sur la machine de développement n'est pas la même que celle utilisée en production.
* **Configurations non synchronisées** : les chemins d'accès aux fichiers, les variables d'environnement, les configurations de la mémoire allouée ou l'accès à des services externes ne sont pas les mêmes.
* **Dépendances manquantes** : une bibliothèque ou un package nécessaire au bon fonctionnement de l'application a été installé manuellement sur le poste de développement, mais n'a pas été explicitement inclus dans le processus de déploiement en production.

Ces décalages, souvent considérés comme de la "faute à pas de chance", sont en réalité des failles dans le processus. Les **pratiques DevOps** visent justement à prévenir ces mauvaises surprises en construisant un pont fiable entre le développement et la production.

#### L'approche collaborative du DevOps

Le DevOps propose une solution qui dépasse la simple technique : il s'agit de s'assurer que l'environnement de développement soit aussi proche que possible de l'environnement de production.

Pour cela, une culture de l'entraide est essentielle. Le⋅la développeur⋅euse et l'administrateur⋅ice système travaillent main dans la main pour s'assurer que tout changement dans l'infrastructure est communiqué et que la configuration est bien standardisée.

**Exemple concret de solution :**

Pour éviter ces problèmes d'environnements, une solution courante est l'utilisation de **conteneurs** avec des technologies comme **Docker**.

* Le⋅la développeur⋅euse définit son application et ses dépendances dans un **Dockerfile**. Ce fichier devient une "recette" pour construire une image de conteneur.
* Cette image, une fois construite, contient l'application et toutes ses dépendances logicielles (la bonne version de Node.js, les bibliothèques spécifiques, etc.).
* C'est cette même image qui sera utilisée sur l'environnement de test et, surtout, en production.

De cette manière, on ne déploie plus le code de l'application, mais un **conteneur** qui inclut le code et son environnement complet. L'adage "Ça marche sur ma machine" devient alors "Ça marche dans le conteneur", et comme le conteneur est le même partout, l'application se comportera de la même manière en production. C'est l'un des piliers du déploiement fiable.

Cette approche met en lumière un des principes forts du DevOps : la **robustesse est une responsabilité partagée**. Le déploiement n'est pas une simple étape technique, mais une collaboration continue pour s'assurer que le logiciel est opérationnel de manière fiable et prévisible, pour le bien des utilisateur⋅ices.

---

### La chaîne CI/CD et l'industrialisation des processus

Le cœur des pratiques DevOps est la mise en place d'une chaîne d'**Intégration Continue et de Déploiement Continu** (**CI/CD**). C'est le moteur qui transforme une nouvelle fonctionnalité en une mise en production de manière fluide et automatisée. C'est l'automatisation qui garantit la fiabilité et la rapidité des livraisons, évitant les erreurs manuelles et les retards.

Cependant, il est crucial de comprendre que le DevOps ne se résume pas à un simple pipeline d'automatisation. Il s'agit d'une approche globale qui couvre l'intégralité du cycle de vie du logiciel, en intégrant les aspects humains et techniques à chaque étape.

Pour une collaboration complète et une véritable industrialisation des processus, deux autres piliers sont essentiels :

![Chaîne CI/CD]

#### La Developer eXperience (DX)

La **Developer eXperience** (**DX**) est une notion souvent sous-estimée. Il s'agit de s'assurer que l'environnement de développement et les outils mis à disposition des développeur⋅euses sont performants, cohérents et agréables à utiliser. Cela passe par :
* Une configuration de l'environnement de développement qui soit aussi proche que possible de l'environnement de production.
* Des outils de développement qui permettent de reproduire localement les bugs de production, de tester facilement et de réduire le temps de mise en place d'un nouveau projet.

Une bonne DX est le fondement d'une collaboration efficace. Si le processus de développement est fluide, les équipes sont plus rapides, et peuvent se concentrer d'autres aspects comme la qualité du code et l'innovation. Un⋅e développeur⋅euse qui passe des heures à configurer son environnement de travail ne peut pas être pleinement productif⋅ve. La DX n'est pas un luxe, c'est une nécessité pour la performance et le bien-être des équipes.

#### L'observabilité

Une fois l'application en production, la chaîne CI/CD est utile pour le déploiement, mais n'est pas suffisante pour assurer la qualité. C'est là qu'intervient l'**observabilité**.

L'observabilité est la capacité de comprendre l'état interne d'un système à partir de ses données externes. Elle se base sur trois piliers :
* Les **métriques** : des données numériques (ex. : temps de réponse d'une API, utilisation du CPU).
* Les **traces** : le chemin complet d'une requête à travers les différents services de l'application.
* Les **logs** : des événements chronologiques enregistrés par l'application (ex. : messages d'erreur, succès de connexion).

Avec de l'observabilité, une alerte n'est plus un simple "page d'erreur 500", mais une opportunité de comprendre rapidement ce qui se passe. Les équipes Dev et Ops travaillent alors ensemble pour surveiller, détecter et résoudre les problèmes en se basant sur des données précises et partagées.

![DevOps de bout en bout]

**Exemple concret de collaboration :**

Imaginons un bug en production. Sans DevOps et sans observabilité, un⋅e administrateur⋅ice système pourrait constater une alerte et dire au⋅à la développeur⋅euse : "L'API est lente." La communication s'arrête là, le problème reste vague.

Avec une culture DevOps et de l'observabilité, la conversation change : "L'API `POST /nouvel-utilisateur` a un temps de réponse qui dépasse 5 secondes depuis le dernier déploiement. Les logs montrent des erreurs de connexion à la base de données après 10 tentatives, et une trace indique un ralentissement au niveau de la requête `INSERT`."

Cette précision permet de résoudre le problème beaucoup plus rapidement et de renforcer la collaboration, car tout le monde parle le même langage, celui des données.

En couvrant l'ensemble de ces pratiques, du développement à la production et à la surveillance, le DevOps vise à créer une **continuité** entre toutes les phases du cycle de vie d'un logiciel. Il ne s'agit plus de passer le relais d'une équipe à l'autre, mais de construire ensemble, de bout en bout, un produit robuste et fiable.

---

### Quel place pour l'intelligence artificielle

L'intelligence artificielle (**IA**) est un ensemble de technologies capables d'imiter les capacités cognitives humaines comme le langage, la vision ou le raisonnement. Sa particularité est d'aller au-delà de l'exécution de tâches prédéfinies pour traiter, analyser et générer du texte, des images ou du son. C'est cette capacité à simuler les processus **cognitifs** qui marque une rupture.

Aujourd'hui, l'IA permet de découper des tâches intellectuelles complexes en sous-tâches simples et de les automatiser à grande échelle. Cette industrialisation des processus cognitifs, alimentée par de l'énergie non-humaine, accélère considérablement la production et l'analyse de données.

On peut considérer l'IA sous deux angles complémentaires dans le monde de l'informatique :

1.  **L'IA en tant que discipline** : il s'agit du développement des technologies d'IA elles-mêmes. Cela implique la recherche et la conception de modèles d'apprentissage automatique, de réseaux de neurones ou d'algorithmes de traitement du langage naturel. C'est le travail des ingénieur⋅es en IA et des chercheur⋅euses, qui créent les outils de base.

2.  **L'IA en tant qu'outil** : il s'agit de l'intégration de ces technologies pour résoudre des problèmes concrets dans le développement logiciel. L'IA devient alors une aide pour l'ensemble du cycle de vie d'une application, de sa conception à sa maintenance.


### L'IA et le cycle de vie d'un logiciel

* **Dans le développement (Dev)** : des outils d'assistance au code (type GitHub Copilot) peuvent suggérer des lignes de code, des fonctions entières ou détecter des bugs potentiels en temps réel. Cela accélère la production et aide les développeur⋅euses à écrire un code plus propre et plus sécurisé, tout en leur laissant le contrôle final.
* **Dans les opérations (Ops)** : l'IA peut analyser en continu les données d'observabilité (logs, métriques) pour détecter des anomalies, prédire des pannes avant qu'elles ne surviennent ou optimiser les performances d'un système. Elle permet aux administrateur⋅ices système d'être plus proactif⋅ives et de résoudre les problèmes plus rapidement.

Les progrès sont constants, mais l'intégration de l'IA dans tous les cycles de vie des logiciels est encore loin d'être complète. L'IA s'inscrit dans la continuité du **DevOps**, car elle prolonge l'industrialisation des processus de développement logiciel.


---

### L'IA au service de la qualité

Plutôt que de la considérer comme un simple outil d'accélération dont la seule finalité serait la productivité, l'**intelligence artificielle** peut être perçue comme une aide d'une nouvelle nature. Mais cela demande une démarche particulière. Car c'est seulement en refusant l'augmentation des cadences que le temps gagné peut alors être réinvesti dans ce qui fait la force du développement humain :

* **La résolution de problèmes complexes** : se concentrer sur l'architecture, le design et les défis logiques qui demandent créativité et réflexion critique.
* **La créativité et l'innovation** : explorer de nouvelles solutions, concevoir des fonctionnalités uniques qui répondent à des besoins non encore exprimés.
* **La montée en compétences** : utiliser le temps gagné pour se former, apprendre de nouvelles technologies et approfondir son expertise, favorisant ainsi l'épanouissement personnel et professionnel.
* **Les interactions humaines** : renforcer la collaboration au sein de l'équipe, partager les connaissances et les expériences, et améliorer la communication.

En intégrant l'IA dans la culture **DevOps**, on ne vise pas seulement à produire plus vite, mais à renforcer la **robustesse** et la **qualité** du logiciel. L'IA devient un levier pour construire des systèmes plus fiables et plus utiles. C'est en préservant et en valorisant les compétences humaines que l'on peut véritablement tirer le meilleur parti de cette technologie.


---

### Les grands enjeux posés par l'IA

L'intelligence artificielle ouvre la porte à des usages et services d'une ampleur sans précédent, transformant en profondeur des secteurs allant de la médecine à l'art, en passant par les opérations militaires. Elle permet de déléguer des comportements intelligents, autrefois l'apanage des êtres vivants, à des machines.

Cette révolution s'accompagne de questions fondamentales, tant pour notre société que pour le développement logiciel. Les enjeux sont de taille et dépassent la simple adoption d'une nouvelle technologie.

#### Enjeux sociétaux et éthiques

L'industrialisation des processus cognitifs, bien qu'extraordinairement puissante, soulève des préoccupations majeures :

* **Contrôle et responsabilité** : La délégation de décisions à des systèmes autonomes, notamment dans des domaines critiques comme les opérations militaires ou la cybersécurité, pose la question de la perte de contrôle et de la responsabilité en cas d'erreur.
* **Impact environnemental** : Le développement et l'entraînement de modèles d'IA de grande taille nécessitent des infrastructures informatiques massives et une consommation d'énergie considérable. La durabilité de cette trajectoire est une question majeure, notamment au regard de l'urgence climatique.
* **Préservation des capacités humaines** : À mesure que nous déléguons des fonctions cognitives, il est essentiel de s'interroger sur les capacités que nous souhaitons conserver et continuer à cultiver de manière subjective. La pensée critique, la créativité et l'empathie ne doivent pas être perdues au profit d'une simple efficacité.
* **Accélération et manipulation** : Une accélération constante des processus décisionnels n'est pas toujours une bonne chose. Dans des domaines comme la désinformation, elle peut aggraver les problèmes au lieu de les résoudre, rendant la prise de recul plus difficile. De plus, les systèmes de recommandation de contenu, optimisés par l'IA, peuvent exploiter nos biais cognitifs et nos préférences pour nous maintenir dans des boucles d'engagement, voire créer des phénomènes d'addiction. La conception de ces systèmes pose des questions éthiques sur la manipulation et la responsabilité des plateformes.

---

### Les enjeux spécifiques au développement logiciel

Dans le domaine du développement, l'IA est une force de transformation majeure qui soulève également des questions essentielles sur le rôle du développeur·euse et l'avenir de la création logicielle.

* **Qualité vs. Quantité** : L'un des risques majeurs est la tentation de prioriser la vitesse de production permise par l'IA au détriment de la qualité logicielle. Il est essentiel de rappeler que l'objectif principal reste de concevoir des systèmes robustes, maintenables et sécurisés, et non de produire du code à la chaîne.
* **Prise de décision et sens critique** : L'IA peut proposer des solutions techniques et architecturales ou même générer du code. Face à ces suggestions, il est crucial de garder un esprit critique. L'humain doit rester le décideur final, capable de comprendre les implications des choix, d'évaluer la robustesse des solutions proposées et de les adapter au contexte spécifique du projet.
* **Évolution des compétences** : Si l'écriture de code et les tâches de routine sont de plus en plus industrialisées, les compétences attendues des développeur·euses se transforment. L'accent se déplacera vers la **conception architecturale**, l'**analyse de problèmes complexes**, la **collaboration** et la **compréhension des besoins utilisateurs**. Les compétences humaines, telles que l'esprit critique, l'intelligence collective, relationnelle et créatives deviendront encore plus précieuses.

La transformation numérique actuelle est largement façonnée par les géants comme les GAFAM. Leurs intérêts économiques ne s'alignent pas toujours avec ceux de la société. En tant qu'acteurs du numérique, nous avons la responsabilité de dépasser notre rôle de consommateurs pour développer un esprit critique. Il nous appartient de construire une approche de l'IA qui soit profitable à tous, en faisant de cette technologie un outil convivial, et non une force d'asservissement.

![Les trajectoires de l'IA]

---

## La sécurité des applications modernes

### L'approche portail de sécurité

La sécurité logicielle est un défi complexe et en constante évolution. Historiquement, elle a souvent été traitée comme une étape finale, une sorte de contrôle de qualité appliqué juste avant le déploiement en production. C'est l'approche que l'on nomme le **"security gate"** (le portail de sécurité), où une équipe de spécialistes vérifie l'application et la valide, ou non, avant sa mise en ligne.

Cette méthode est aujourd'hui considérée comme insuffisante pour plusieurs raisons :

* **Un goulot d'étranglement** : Le processus de validation peut ralentir considérablement le cycle de déploiement et créer des frictions, notamment dans les environnements où la livraison continue est la norme.
* **Une vision fragmentée** : La sécurité n'est pas intégrée dès le début du processus, ce qui rend la correction des failles beaucoup plus coûteuse et difficile une fois le code déjà écrit.
* **Une responsabilité isolée** : Elle repose sur une seule équipe, ce qui la décharge du reste des contributeurs au projet.

---

### La sécurité en profondeur (Defense in Depth)

Pour pallier ces faiblesses, la cyberdéfense a adopté le principe de la **"défense en profondeur"**. Ce n'est pas une technologie, mais une philosophie de conception. L'idée est de ne pas se fier à une seule ligne de défense, mais de créer plusieurs couches de sécurité indépendantes et redondantes. Si une couche est compromise, les suivantes sont là pour la contenir.

Imaginons une application web :
* Une première couche pourrait être l'utilisation de **pare-feux** (firewalls) pour bloquer les tentatives d'intrusion.
* Une deuxième couche serait une **gestion des identités et des accès** robuste (IAM), s'assurant que seul⋅es les utilisateur⋅ices autorisé⋅es peuvent accéder à certaines parties de l'application.
* Une troisième couche pourrait consister en un **chiffrage** fort des données, même si la base de données est compromise.
* Une quatrième couche serait un **système de surveillance** capable de détecter et d'alerter en cas de comportement anormal.

Chaque couche a pour but de rendre l'accès aux données de plus en plus difficile pour un⋅e attaquant⋅e, renforçant la résilience globale du système.

---

### Du DevOps au DevSecOps

Le **DevSecOps** est l'application du principe de la sécurité en profondeur à la culture DevOps. Au lieu de considérer la sécurité comme une étape finale, le DevSecOps l'intègre à chaque phase du cycle de vie du logiciel : dès la conception, pendant le développement, et tout au long de la production et de la maintenance.

Le slogan "Shift Left" (décaler à gauche) est souvent utilisé pour résumer cette idée. Il signifie que la sécurité doit être intégrée le plus tôt possible dans le processus de développement.

Voici comment le DevSecOps se manifeste concrètement :

* **Développement sécurisé** : Les développeur⋅euses sont formé⋅es aux bonnes pratiques de sécurité (par exemple, comment prévenir les injections SQL ou les attaques XSS). Les outils d'analyse de code statique (SAST) et dynamique (DAST) sont intégrés directement dans les pipelines de CI/CD pour détecter les vulnérabilités en temps réel, sans attendre la fin du projet.
* **Infrastructure sécurisée** : Les administrateur⋅ices système et les équipes Ops utilisent l'**Infrastructure as Code (IaC)** pour que l'infrastructure soit configurée de manière sécurisée et reproductible, minimisant le risque d'erreurs humaines.
* **Responsabilité partagée** : La sécurité n'est plus la seule préoccupation d'une équipe dédiée, mais une responsabilité collective. Tout le monde, des développeur⋅euses aux administrateur⋅ices, est impliqué⋅e dans la création d'un logiciel sûr.

L'objectif du DevSecOps est de rendre la sécurité **robuste et transparente**, non pas en ajoutant des obstacles, mais en l'intégrant de manière continue dans les processus de développement et de déploiement, pour le bien des utilisateur⋅ices et la fiabilité de l'application.
