---
title: Embarquement sur "micro.blog"
subtitle: "..."
slug: "microblog"
date: "2018-03-29T10:32:45+02:00"
categories: []
tags: [microblog]
bigimg: [{src: "/img/microblog.jpg", desc: "micro.blog"}]
draft: true
---

Image : interface conversationnelle

> Le problème c'est la domination d'un moteur de recherche, d'un grand réseau social et d'un pour le micro-blogging. Nous n'avons pas de problème technologique, nous avons un problème social (Berners-Lee, 2016)

Fondamentalement, le problème de l'écosystème du web c'est que le choix du consommateur est de plus en plus limité. Facebook, Twitter, Google et d'autres géants chinois "possèdent" une grande partie du graphe social. Tenir le graphe leur confère le pouvoir de tenir les connexions numériques : si vous voulez vous connecter aux personnes sur l'internet, vous devez suivre leurs règles du jeu.

La version initiale de l'internet était un réseau ouvert, avec des protocoles ouverts et des systèmes ouverts. Internet Deux s'est constitué de plateformes fermées qui dominent de plus en plus le marché, possèdent nos contenus et conrôlent nos vies.   
Internet Trois selon l'indieweb serait de reprendre le contrôle de nous-mêmes. Et c'est en train de se produire.(Inspiration Wilson, 2018) 

## Micro.blog 

Un réseau social de microblogs indépendants. Un principe simple : Votre contenu, votre site. Vous publiez sur votre propre site, vous hébergez sur Micro.blog ou utilisez n'importe quel service pouvant éditer des flux RSS. Le texte de chaque message devrait être plutôt court (280 caractères à vérifier et sans titre) Puis vous ajoutez votre flux RSS à Micro.blog et tout le monde peut vous suivre. 

... une petite couche de glue qui assemble quelques éléments du web ouvert.

Définition : 

D'après ce que je commence à capter, Micro.blog n'est pas un nième nouveau moteur de blog, mais bien un service de publication sociale. Le service n'est plus tout nouveau. Lancé en bêta le  (à compléter), l'idée est que vous publiez des petits messages, ceux ci sont renvoyés via un flux RSS sur micro.blog/votrenomutilisateur. 

Vous pouvez alors soit choisir un blog hébergé sur micro.blog à une adresse du type votrenomutilisateur.micro.blog ou utiliser votre propre nom de domaine.

N'ayant pas d'iphone, je ne peux encore me prononcer sur l'application iOS faute de l'avoir essayée. L'app micro.blog iOS vous permet de poster sur votre blog micro.blog ou votre propre blog WordPress. Ou vous pouvez utiliser votre propre système. Il existe aussi un robot microblog qui postera vos posts sur Twitter (et Medium).

La différence entre le blog hébergé et votre flux micro.blog/nomutilisateur est confuse pour le moment. Je me demande si un différent nom de domaine aurait aidé.

Le blog hébergé et le bot twitter sont des options payantes. La doc vous éclairera sur le fait que vou pouvez vous héberger et pointer vers IFTTT comme alternative au bot.

Le système suit les principes indieweb de contrôler son propre contenu et d'envoyer des copies sur d'autres espaces.

Les réponses sur micro.blog vers vos posts sont envoyés sous forme de webmentions vers votre propre blog et s'affichent sous forme de commentaires si vous avez installé l'extension webmention. J'ai déjà ça pour faire que les réponses twitter s'affichent sous forme de commentaires.

## Mon installation

J'ai ajouté ici une nouvelle catégorie, micro. J'ai édité le blog pour qu'il n'affiche pas cette catégorie sur la page d'accueil, ils sont affichés uniquement sur micro.

J'ai paramétré l'app micro.blog pour créer des post avec le format de statut dans la catégorie micro.

J'ai désactivé la fonction jetpack post social vers twitter. Je posterai manuellement des posts normaux. J'ai paramétré un robot micro.blog pour poster vers Twitter.

Le service est un travail en cours, et je n'ai pss vraiment lu les docs mais noté quelques points intéressants.

## Sans titre

Les messages sur micro.blog se composent de descriptions sans titres. Lorsque vous publiez à partir de l'application, vous recevez un post sur votre blog sans titre. Un post avec un titre sur votre blog est publié en tant que lien vers micro.blog. Avec un post sans titre, la description devient le contenu du post de micro.blog.

Cela signifie que vous obtenez beaucoup de messages répertoriés dans votre tableau de bord en tant que «aucun titre». Comme je n'aimais pas cela, j'ai essayé d'ajouter automatiquement des titres aux articles sans titre avec un peu de Google-fu et du codage WordPress.

Cela a bien fonctionné, à l'exception des posts sur micro.blog consistant en un titre et un lien, le tweet posté par le bot twitter est le même.

Je cherche maintenant à créer un flux RSS personnalisé sans titre. Plus de googling à venir.

Sinon, je pourrais utiliser le code de Tweaks pour micro.blog qui ajoute des dates en tant que titres, micro.blog les ignore.

Ou tout simplement apprendre à vivre avec des messages `no title` dans le tableau de bord.



## Moi sur Micro.blog

Preparing for the microblog is a lot more coherent than this post if you are looking for setup advice.

I’ll post the code I’ve mentioned above at some point, it is pretty simple stuff.


---

Beaucoup d'entre vous se souviennent des premiers jours du web. Si vous vouliez écrire sur internet, vous avez créé un site web. Vous pouviez y publier des essais, poster des photos, démarrer des weblogs. Parce que les sites Web étaient indépendants, souvent avec leur propre nom de domaine personnel, il n'y avait pas une entreprise qui pouvait dire aux auteurs quoi publier ou quels outils utiliser. Si un fournisseur d'hébergement cessait ses activités ou modifiait ses prix ou ses règles, vous pouviez simplement déplacer votre site vers un autre hébergeur. C'était votre contenu et vous le possédiez.

Aujourd'hui, la plupart des écrits vont dans un petit nombre de sites de réseaux sociaux populaires. Ces sites sont devenus populaires parce qu'ils ont grandement facilité la connexion avec les amis et le démarrage de publications, et parce qu'ils fournissaient une expérience utilisateur sous forme d'une  timeline qui faisait que tout était simple et rapide.

Mais cette simplicité a un coût : il est impossible de déplacer le contenu entre ces plates-formes en silos, les publicités sont partout, et si une entreprise fait faillite, tous les écrits hébergés disparaissent de l'Internet.

Je crois que même ces messages courts, peu importe s'ils vous semblent insignifiants et éphémères, ont toujours une place importante sur le web ouvert. C'est pourquoi j'ai créé Micro.blog.

Au lieu d'être un autre réseau social, Micro.blog est conçu pour fonctionner avec le web ouvert. Il est construit sur RSS et des  microblogs indépendants. Il s'agit de rassembler des messages courts et de les rendre plus utiles et plus faciles pour l'interaction. Il donne la priorité à la fois à une communauté sécurisée de microblogs et à la liberté de publier sur votre propre site.

Micro.blog encourage la publication sur votre propre nom de domaine, où vous pouvez contrôler votre propre contenu, mais il intègre toujours les messages dans une interface utilisateur familière, avec des réponses centralisées, des favoris et une API ouverte basée sur les standards JSON Feed et IndieWeb.

[Vous pouvez vous inscrire gratuitement](https://micro.blog/register), apportez votre propre blog, ou laissez Micro.blog vous héberger un microblog avec un simple abonnement payant. Mappez un domaine personnalisé sur votre site et sortez votre contenu quand vous le souhaitez. J'espère que tu aimes.