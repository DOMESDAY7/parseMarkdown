# Fiche de partiel de réseaux

===

## Comment repéré les trames de connexion ?

**FTP** utilise **TCP** comme couche de transport
Pour repéré de nouvelle trame de connexion :
→regardé si il n'y a pas de *SYN* dedans
→repéré les trames de connexion de départ

le _mode actif_ est défini celon *qui initie la connexion*

` si c'est le _serveur_ qui initie la connexion alors

    c'est le _mode actif_ 

 sinon

    il s'agit du mode passif`

mode binaire ne modifie pas le code ascii d'un fichier doc

### Les services d'emails

**POP & IMAP** →premettent de relever à distance sa boite au lettre
**IMAP** dispose de plus de fonctionnalités comme la gestion de dossiers
**SMTP** permet d'envoyer des message d'un client vers un serveur ou entre deux serveur

## Quelques  définitions

**FEAT**= affiche les processus supporté par le serveur

**PWD**= affiche le repertoire actuel sur le serveur

**le quote printable**
remplace un caractère ascii8 par le signe = suivi de son code hexadécimal
__exemple__
**=20:** retour à la ligne
**=E9** pour le *é*

**UDP**: user datagram protocole

**requête de type A**: Une requête de type A est une demande d'adresse IP par rapport à un nom de machine
**Authoritatives RR**: les machines peuvent faire entre elles des requête cependant seule certaines ont autorité sur une zone dédié. Ainsi, une machine dira toujours quel machines à autorités sur cette zone.
