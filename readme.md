# Demo SCSS
Quand vous utilisez du SCCS/SASS, vous ne devez plus modifier vos fichiers CSS vous même! 

## Lancer le pré-processeur SCSS

## Pré-requis: 
- Installer NodeJS (Version LTS) https://nodejs.org/en


# Dans le terminal :

- Pour un fichier :

<!-- npx sass << Le fichier de départ>>  et le << fichier d'arrivé >> -->

     npx sass source/styles/style.scss build/assets/styles/style.css

- Pour un dossier : 

<!-- npx sass << Le dossier de départ>>  et le << dossier d'arrivé >>  -->

    npx sass source/styles:build/assets/styles

## Lancer le pré-processeur SCSS en continue (watch-mode) :

    npx sass --watch source/styles:build/assets/styles


