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

> Le problème est la domination d'un moteur de recherche, d'un grand réseau social et d'un pour le micro-blogging. Nous n'avons pas de problème technologique, nous avons un problème social (Berners-Lee, 2016)

Fondamentalement, le problème de l'écosystème du web est que le choix du consommateur est de plus en plus limité. Facebook, Twitter, Google et d'autres géants chinois "possèdent" une grande partie du graphe social. Tenir le graphe leur confère le pouvoir de tenir les connexions numériques : si vous voulez vous connecter aux personnes sur l'internet, vous devez suivre leurs règles du jeu.

La version initiale de l'internet était un réseau ouvert, avec des protocoles ouverts et des systèmes ouverts. 
Internet Deux est constitué de plateformes fermées qui dominent de plus en plus le marché, possèdent nos contenus et conrôlent nos vies.   
Internet Trois selon indieweb serait de reprendre le contrôle de nous-mêmes. Et c'est en train de se produire.(Inspiration Wilson, 2018) 

## Micro.blog 

Un réseau social de microblogs indépendants. Un principe simple : Votre contenu, votre site. Vous publiez sur votre propre site, vous hébergez sur Micro.blog ou utilisez n'importe quel service pouvant éditer des flux RSS. Le texte de chaque message devrait être plutôt court (280 caractères à vérifier et sans titre) Puis ajoutez votre flux RSS à Micro.blog et tout le monde peut vous suivre. 

... une petite couche de glue qui assemble quelques éléments du web ouvert.
définition : 

D'après ce que j'ai compris, Micro.blog n'est pas un nième nouveau moteur de blog, mais bien un service de publication sociale. Le service n'est plus tout nouveau. Lancé en bêta le .... l'idée est que vous publiez des petits messages, ceux ci sont renvoyés via un flux RSS sur micro.blog/votrenomutilisateur. 

Vous pouvez alors soit choisir un blog hébergé sur micro.blog à une adresse du type votrenomutilisateur.micro.blog ou utiliser votre propre nom de domaine.

N'ayant pas d'iphone, je ne peux encore me prononcer sur l'application iOS faute de l'avoir essayée. L'app micro.blog iOS vous permet de poster sur votre blog micro.blog ou votre proopre blog WordPress. Ou vous pouvez utiliser votre propre système. Il y a aussi un robot microblog qui postera vos posts sur Twitter.

La différence entre le blog hébergé et votre flux micro.blog/username est un peu confuse pour le moment. Je me demande si un différent nom de domaine aurait aidé.

Tant le blog hébergé et le bot twitter sont des options payantes. La doc pourra pourra vous éclairer sur le fait que vou pouvez vous héberger et pointer vers IFTTT comme alternative au bot.

Le système suit les principes indieweb de contrôler son propre contenu et d'envoyer des copies sur d'autres espaces.

Les réponses sur micro.blog vers vos posts sont envoyés sous forme de webmentions vers votre propre blog et s'affichent sous forme de commentaires si vous avez installé l'extension webmention. J'ai déjà ça pour faire que les réponses twitter s'affichent sous forme de commentaires.

## Mon installation

J'ai ajouté ici une nouvelle catégorie, micro. J'ai édité le blog pour qu'il n'affiche pas cette catégorie sur la page d'accueil, ils sont affichés uniquement sur micro.

J'ai paramétré l'app micro.blog pour créer des post avec le format de statut dans la catégorie micro.

J'ai désactivé la fonction jetpack post social vers twitter. Je posterai manuellement des posts normaux. J'ai paramatré un bot micro.blog pour poster vers Twitter.

Le service est un travail en cours, et je n'ai pss vraiment lu les docs mais noté quelques points intéressants.

## Sans titre

On is that the posts on micro.blog consist of descriptions with no titles. When you post form the app, you get a post on your blog without a title. A post with a title on your blog is posted as a link to micro.blog. With a post without out a title the description becomes the content of the micro.blog post.

That means you get lots of posts listed in your dashboard as ‘no title’. Since I didn’t like this I tried to auto add titles to posts without titles with a little Google-fu and some WordPress coding.

This worked out fine, except the posts on micro.blog consist of a title and a link, the tweet posted by the twitter bot is the same.

I am now looking to create a custom RSS feed without title. More googling ahead.

Alternatively I could use the code from Tweaks for micro.blog that adds dates as titles, micro.blog ignore these.

Or just learn to live with ‘no title’ posts in the dashboard.

## Moi sur Micro.blog

Preparing for the microblog is a lot more coherent than this post if you are looking for setup advice.

I’ll post the code I’ve mentioned above at some point, it is pretty simple stuff.


---

Il est probable que vous vous souveniez du temps Beaucoup d'entre vous se souviennent des premiers jours du web. Si vous vouliez écrire sur internet, vous avez créé un site web. Vous pouvez publier des essais, poster des photos, démarrer des weblogs. Parce que les sites Web étaient indépendants, souvent avec leur propre nom de domaine personnel, il n'y avait pas une entreprise qui pouvait dire aux auteurs quoi publier ou quels outils utiliser. Si un fournisseur d'hébergement a cessé ses activités ou a modifié ses prix ou ses règles, vous pouvez simplement déplacer votre site vers un autre hôte. C'était votre contenu et vous l'avez possédé.



Many of you remember the earlier days of the web. If you wanted to write on the internet, you created a web site. You could publish essays, post photos, start weblogs. Because web sites were independent, often with their own personal domain name, there was no one company who could tell authors what to post or which tools to use. If a hosting provider went out of business, or changed their prices or policies, you could simply move your site to another host. It was your content and you owned it.

Today, most writing instead goes into a small number of popular social networking sites. These sites became popular because they made it so easy to connect with friends and start publishing, and because they provided a timeline user experience that made everything easy and fast.

But this simplicity comes at a cost: it’s impossible to move content between these platform silos, ads are everywhere, and if a company goes out of business, all the writing hosted there vanishes from the internet.

I believe that even these short-form posts, no matter if they seem unimportant and fleeting at the time, still have an important place on the open web. That’s why I created Micro.blog.

Instead of yet another social network, Micro.blog is designed to work with the open web. It’s built on RSS and independent microblogs. It’s about pulling together short posts and making them more useful and easier to interact with. It prioritizes both a safe community of microblogs as well as the freedom to post to your own site.

Micro.blog encourages publishing at your own domain name, where you can control your own content, but it still integrates posts into a familiar timeline user interface, with centralized replies, favorites, and an open API based on JSON Feed and IndieWeb standards.

[You can register for free](https://micro.blog/register), bring your own weblog, or let Micro.blog host a microblog for you with a simple paid subscription. Map a custom domain to your site and get your content out whenever you want. I hope you like it.
