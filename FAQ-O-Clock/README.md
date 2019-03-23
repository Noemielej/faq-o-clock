Dans le dossier doc, j'ai joins ma bibliothèque de données ainsi que les wireframes que j'ai réalisé.
J'ai utilisé des fixtures pour remplir mes tables mais j'ai importé mon sql également.
Les utilisateurs et mot de passe sont :
`admin -> admin
user -> user
modera -> modera`

## Beug ou difficultés :

### Page accueil:
Il manque la fonctionnalité suivantes : _Les modérateurs peuvent bloquer une question ou une réponse non-conforme_.

### Page listes des réponses:
Il manque la fonctionnalité qui permet de valider une réponse (seule utilisateur à l'origine de celle-ci).

### Page Question/Tag:
Les Tag sont accessible également depuis un nuage de tags sur la page d'accueil ou dans une sidebar.
J'ai essayé le code suivant dans templates/Backend/question/index.html.twig,

  `{% for tag in questions.tags %}
        <small>#{{ tag.name}}</small>
     {% endfor %}`

Mais j'ai rencontré cette erreur:

  `Key "tags" for array with keys "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14" does not exist.`

### Soucis d'enregistrement en bdd
Je ne suis pas parvenue à mettre en valeur par défaut ROLE_USER à l'inscription j'ai essayé `$user->setRole('ROLE_USER');` _dans le UserCntroller_ ou de le mettre dans le constructeur de l'entity User table Role.
Et également un soucis avec le set user_id lorsque je soumets le formulaire (envoie d'une question ou réponse)
alors que dans _QuestionController_ je fais :
`$userIdConnect = $user->getId();
$question->setUser($userIdConnect);`
mais j'ai une erreur.

### Bonus:
Je n'ai pas fais les bonus :(

_Bon courage pour la correction ! :)_
