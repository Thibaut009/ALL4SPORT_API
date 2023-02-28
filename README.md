Description du besoin :


Ci-après désigné « Le demandeur » la société ALL4SPORT et toutes personnes la représentant.

Ci-après désigné « Le candidat », l’entreprise ou le groupement d’entreprise et toutes personnes la/les représentants proposant une réponse au présent appel d’offre.


ALL4SPORT souhaite la mise en place d’un système d’information basé sur les dernières technologies, et privilégie les développements web et mobile (natif ANDROID) .

Il est interdit de communiquer directement avec la base de données, l’application doit utiliser un webservice.
Le code du webservice sera rattaché au projet PPE3-lot A


Connexion des clients

Un formulaire de connexion doit permettre uniquement à des comptes “clients” d’accéder à l’application.
Un webservice vérifiera les informations reçues et autorisera ou non la connexion.

Module de flash des QR code / ou code barre

L’objectif du module est de scanner un Qr code / ou code barre dans les rayons du magasin ou dans la catalogue des article afin de connaître  , sa description son prix et surtout la disponibilités des produits dans les différents magasins

Le QR code / ou code barre  représente la référence produit.

Doc : https://developers.google.com/vision/android/barcodes-overview
https://developers.google.com/ml-kit/vision/barcode-scanning


Géolocalisation

On considère que le smartphone des clients est géolocalisé et possède une connexion réseau .
Il vous faudra récupérer la ville actuelle.

A partir de cette donnée vous pourrez passer la commande directement dans le magasin ( voir point suivant )

Passage de la commande

Depuis l’application mobile , il faut créer une interface afin de saisir la quantité du produit.
Le formulaire contiendra :
Un champs de saisie numérique 
La référence du produit récupéré précédemment grâce au QR code / ou code barre.
Le magasin concerné ( récupérer grâce à la géolocalisation )

Attention, le client ne peut commander que s'il reste suffisamment de stock du produit.
Le client valide la commande ou annule et revient sur la page d’accueil lui permettant de scanner un nouvel article ( car il est déjà connecté à l’application )



OBJECTIFS

Vous devez créer un webservice à partir du code source de votre projet web AP 3.
L’objectif est de récupérer les informations envoyées par l’application mobile afin de mettre à jour la liste des commandes du magasin


Contrainte technique webservice : les données doivent être récupérées en format JSON puis affichée dans l’application mobile 
