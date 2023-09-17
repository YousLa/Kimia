# Comprendre PHP

## Les requêtes préparées

Les requêtes préparées sont des requêtes qui vont être créées en trois temps : la préparation, la compilation et l’exécution.

Tout d’abord, une première phase de préparation dans laquelle nous allons créer un template ou schéma de requête, en ne précisant pas les valeurs réelles dans notre requête mais en utilisant plutôt des marqueurs nommés (sous le forme :nom) ou des marqueurs interrogatifs (sous la forme ?).

Ces marqueurs nommés ou interrogatifs (qu’on peut plus globalement nommer marqueurs de paramètres) vont ensuite être remplacés par les vraies valeurs lors de l’exécution de la requête. Notez que vous ne pouvez pas utiliser les marqueurs nommés et les marqueurs interrogatifs dans une même requête SQL, il faudra choisir l’un ou l’autre.

Une fois le template créé, la base de données va analyser, compiler, faire des optimisations sur notre template de requête SQL et va stocker le résultat sans l’exécuter.

Finalement, nous allons lier des valeurs à nos marqueurs et la base de données va exécuter la requête. Nous allons pouvoir réutiliser notre template autant de fois que l’on souhaite en liant de nouvelles valeurs à chaque fois.
