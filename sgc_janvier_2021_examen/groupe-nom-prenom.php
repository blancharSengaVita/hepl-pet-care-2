<?php

/*
 *  Modifiez ce fichier afin d'y injecter les résultats de la requête
 *  que vous avez rédigée dans le fichier <groupe>_<nom>_<prenom>.sql.
 *
 *  --
 *  INFORMATIONS IMPORTANTES :
 *      - Cette vue n'accède qu'à une seule variable PHP qui a été définie pour vous :
 *        $results - Un tableau contenant les résultats de votre requête SQL
 *      - Tout ce qu'il faut modifier se trouve dans div.results
 *      - Faites bien attention à tous les détails prévus dans la structure HTML ci-dessous
 *      - Une seule fonction spéciale PHP est utilisée : 
          number_format($number, $decimals_count, $decimals_separator, $thousands_separator)
 *        Retourne un nombre donné au format souhaité
 *          - $number - représente le nombre "brut" à formater
 *          - $decimals_count - représente le nombre de décimales après la virgule
 *          - $decimals_separator - représente le caractère à utiliser en tant que "virgule"
 *          - $thousands_separator - représente le caractère à utiliser entre les milliers
 *      - Pour afficher les étoiles remplies, il faut injecter le pourcentage correspondant
          à la moyenne des "rate" pour chaque recette dans l'attribut style de div.stars__filler
 *  --
 *
 *  Renommez ce fichier comme il se doit (<groupe>_<nom>_<prenom>.php).
 *  N'ayez crainte, le système continuera à fonctionner malgré le renommage.
 */

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de recettes contenant "Vin blanc" et "Tomate" • Marmiton</title>
    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>
    <div class="brand">
        <a href="#content" class="brand__logo">
            <span class="sro">Marmiton</span>
        </a>
    </div>
    <main class="content" id="content">
        <header class="header">
            <h1 class="header__title">
                <span class="sro">Marmiton -</span>
                Résultats de recherche
            </h1>
            <div class="header__details">
                <p class="header__containing">Les 6 recettes les plus populaires contenant au moins un des ingrédients suivants&nbsp;:</p>
                <ul class="header__tags">
                    <li class="header__tag">Vin blanc</li>
                    <li class="header__tag">Tomate</li>
                    <li class="header__tag">Lait</li>
                </ul>
            </div>
        </header>
        <p class="breadcrumbs">
            <a href="#" class="breadcrumbs__item breadcrumbs__item--link">Accueil</a>
            <span class="breacrumbs__separator">/</span>
            <strong class="breadcrumbs__item">Recherche</strong>
        </p>
        <div class="results">

                <!-- DEBUT DE LA ZONE À ÉDITER -->

                <article class="recipe">
                    <a href="https://www.marmiton.org/recettes/rapide-et-facile/plat/linguine-oignons-caramelises" class="recipe__link">
                        <span class="sro">Découvrir la recette "Linguine aux oignons caramélisés"</span>
                    </a>
                    <header class="recipe__info">
                        <h2 class="recipe__title">Linguine aux oignons caramélisés</h2>
                        <div class="recipe__rating">
                            <div class="recipe__stars stars">
                                <div class="stars__filler" style="width: 60.434%">&nbsp;</div>
                            </div>
                            <div class="recipe__popularity">
                                <strong class="recipe__avg">3,0/5</strong>
                                sur
                                <em class="recipe__raters">46 avis</em>
                            </div>
                        </div>
                    </header>
                    <figure class="recipe__fig">
                        <img src="./storage/linguine.jpg" alt="Linguine aux oignons caramélisés" class="recipe__img" />
                    </figure>
                    <dl class="recipe__taxonomies">
                        <dt class="sro">Thème</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/rapide-et-facile" class="recipe__theme">Rapide et facile</a>
                        </dd>
                        <dt class="sro">Catégorie</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/rapide-et-facile/plat" class="recipe__category">Plat</a>
                        </dd>
                    </dl>
                </article>
                
                <article class="recipe">
                    <a href="https://www.marmiton.org/recettes/inde/dessert/gateau-carottes-indien" class="recipe__link">
                        <span class="sro">Découvrir la recette "Gâteau de carottes indien"</span>
                    </a>
                    <header class="recipe__info">
                        <h2 class="recipe__title">Gâteau de carottes indien</h2>
                        <div class="recipe__rating">
                            <div class="recipe__stars stars">
                                <div class="stars__filler" style="width: 63.53%">&nbsp;</div>
                            </div>
                            <div class="recipe__popularity">
                                <strong class="recipe__avg">3,2/5</strong>
                                sur
                                <em class="recipe__raters">34 avis</em>
                            </div>
                        </div>
                    </header>
                    <figure class="recipe__fig">
                        <img src="./storage/gateau.png" alt="Gâteau de carottes indien" class="recipe__img" />
                    </figure>
                    <dl class="recipe__taxonomies">
                        <dt class="sro">Thème</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/inde" class="recipe__theme">Inde</a>
                        </dd>
                        <dt class="sro">Catégorie</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/inde/dessert" class="recipe__category">Dessert</a>
                        </dd>
                    </dl>
                </article>
                
                <article class="recipe">
                    <a href="https://www.marmiton.org/recettes/debutants/apero/croissants-aperitifs" class="recipe__link">
                        <span class="sro">Découvrir la recette "Croissants apéritifs"</span>
                    </a>
                    <header class="recipe__info">
                        <h2 class="recipe__title">Croissants apéritifs</h2>
                        <div class="recipe__rating">
                            <div class="recipe__stars stars">
                                <div class="stars__filler" style="width: 64.848%">&nbsp;</div>
                            </div>
                            <div class="recipe__popularity">
                                <strong class="recipe__avg">3,2/5</strong>
                                sur
                                <em class="recipe__raters">33 avis</em>
                            </div>
                        </div>
                    </header>
                    <figure class="recipe__fig">
                        <img src="./storage/croissants.png" alt="Croissants apéritifs" class="recipe__img" />
                    </figure>
                    <dl class="recipe__taxonomies">
                        <dt class="sro">Thème</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/debutants" class="recipe__theme">Je débute</a>
                        </dd>
                        <dt class="sro">Catégorie</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/debutants/apero" class="recipe__category">Apéro</a>
                        </dd>
                    </dl>
                </article>
                
                <article class="recipe">
                    <a href="https://www.marmiton.org/recettes/espagne/plat/magra-con-tomate" class="recipe__link">
                        <span class="sro">Découvrir la recette "Magra con tomate"</span>
                    </a>
                    <header class="recipe__info">
                        <h2 class="recipe__title">Magra con tomate</h2>
                        <div class="recipe__rating">
                            <div class="recipe__stars stars">
                                <div class="stars__filler" style="width: 66.666%">&nbsp;</div>
                            </div>
                            <div class="recipe__popularity">
                                <strong class="recipe__avg">3,3/5</strong>
                                sur
                                <em class="recipe__raters">18 avis</em>
                            </div>
                        </div>
                    </header>
                    <figure class="recipe__fig">
                        <img src="./storage/3009_w600.jpg" alt="Magra con tomate" class="recipe__img" />
                    </figure>
                    <dl class="recipe__taxonomies">
                        <dt class="sro">Thème</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/espagne" class="recipe__theme">Espagne</a>
                        </dd>
                        <dt class="sro">Catégorie</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/espagne/plat" class="recipe__category">Plat</a>
                        </dd>
                    </dl>
                </article>
                
                <article class="recipe">
                    <a href="https://www.marmiton.org/recettes/italie/apero/bruschetta-tomates" class="recipe__link">
                        <span class="sro">Découvrir la recette "Bruschetta aux tomates"</span>
                    </a>
                    <header class="recipe__info">
                        <h2 class="recipe__title">Bruschetta aux tomates</h2>
                        <div class="recipe__rating">
                            <div class="recipe__stars stars">
                                <div class="stars__filler" style="width: 65.882%">&nbsp;</div>
                            </div>
                            <div class="recipe__popularity">
                                <strong class="recipe__avg">3,3/5</strong>
                                sur
                                <em class="recipe__raters">17 avis</em>
                            </div>
                        </div>
                    </header>
                    <figure class="recipe__fig">
                        <img src="./storage/bruschetta.jpg" alt="Bruschetta aux tomates" class="recipe__img" />
                    </figure>
                    <dl class="recipe__taxonomies">
                        <dt class="sro">Thème</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/italie" class="recipe__theme">Italie</a>
                        </dd>
                        <dt class="sro">Catégorie</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/italie/apero" class="recipe__category">Apéro</a>
                        </dd>
                    </dl>
                </article>
                
                <article class="recipe">
                    <a href="https://www.marmiton.org/recettes/espagne/entree/gaspacho-andalousie" class="recipe__link">
                        <span class="sro">Découvrir la recette "Gaspacho (Andalousie)"</span>
                    </a>
                    <header class="recipe__info">
                        <h2 class="recipe__title">Gaspacho (Andalousie)</h2>
                        <div class="recipe__rating">
                            <div class="recipe__stars stars">
                                <div class="stars__filler" style="width: 60%">&nbsp;</div>
                            </div>
                            <div class="recipe__popularity">
                                <strong class="recipe__avg">3,0/5</strong>
                                sur
                                <em class="recipe__raters">16 avis</em>
                            </div>
                        </div>
                    </header>
                    <figure class="recipe__fig">
                        <img src="./storage/35057_w600.jpg" alt="Gaspacho (Andalousie)" class="recipe__img" />
                    </figure>
                    <dl class="recipe__taxonomies">
                        <dt class="sro">Thème</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/espagne" class="recipe__theme">Espagne</a>
                        </dd>
                        <dt class="sro">Catégorie</dt>
                        <dd class="recipe__taxonomy">
                            <a href="https://www.marmiton.org/recettes/espagne/entree" class="recipe__category">Entrée</a>
                        </dd>
                    </dl>
                </article>

                <!-- FIN DE LA ZONE À ÉDITER -->
            
        </div>
    </main>
    <footer class="footer">
        <p>Le faux Marmiton, exercice pratique de l'examen de Janvier 2021 pour le cours d'SGC.</p>
        <p>Toon Van den Bos • Haute-École de la Province de Liège</p>
    </footer>
</body>
</html>