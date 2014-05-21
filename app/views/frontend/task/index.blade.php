@extends('layout/frontend/layout')
@section('content')
<section id="main">
        <div class="container_12">
                <header>
                    <h1 class="page_title">Takenverdeling</h1>
                </header>
            <div class="takentable">
                <table>
    <tr>
        <td>ref</td>
        <td>Beschrijving             </td>
        <td>persoon</td>
        <td>Tijd besteden</td>
        <td>af?</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Operationele / organisatorische eisen: </td>
        <td></td>
        <td></td>
        <td class=""></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Op tijd ingeleverd en voldoet aan algemene voorwaarden (zie hierboven) </td>
        <td>Rick/Louis</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Ontwerp webshop (Schets duidelijk beeld: DKD?, EER in jpg vorm, Sitemap?)</td>
        <td>Rick</td>
        <td>2 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Modulair opgebouwd</td>
        <td>N.V.T</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>6</td>
        <td>Opmaak in css </td>
        <td>Rick</td>
        <td>1 dag</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>7</td>
        <td>HTML moet W3C-validated zijn</td>
        <td>Rick</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>8</td>
        <td>HTML / code moet voor een developer goed te lezen zijn</td>
        <td>Rick</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>9</td>
        <td>Database met zinnige entries (en ook een zinnig aantal. Bijv: min. 10 producten, etc.)</td>
        <td>N.V.T</td>
        <td>1 dag</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>10</td>
        <td>Zinnige klassen in PHP (in hun eigen .inc.php file) </td>
        <td>N.V.T</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>11</td>
        <td>Hou je aan de regels zoals gesteld in “WEBS2_algemene_instructie.pdf”.</td>
        <td>N.V.T</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>12</td>
        <td>De winkelwagen en CMS maakt gebruik van sessies! </td>
        <td>Louis</td>
        <td>8uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>72</td>
        <td>Header / About / Home / Product elementen minstens aanwezig volgens opdracht  </td>
        <td>Rick</td>
        <td>1 dag</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>73</td>
        <td> Een “Breadcrumb trail”</td>
        <td>Rick</td>
        <td>4 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>74</td>
        <td>Navigatiemenu van de webshop gegenereerd vanuit de database</td>
        <td>Rick</td>
        <td>5 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>75</td>
        <td>Apart admin gedeelte (nu inloggen uiteraard wél vereist!)</td>
        <td>Louis</td>
        <td>1 dag</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>76</td>
        <td>Scherm het admin gedeelte af met een wachtwoord </td>
        <td>Louis</td>
        <td>1 uur</td>
        <td class="ja"></td>
    </tr>
        <tr>
        <td>77</td>
        <td>Zorg dat een gebruiker zich kan registreren en kan inloggen</td>
        <td>Louis</td>
        <td>1 dag</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>78</td>
        <td>Een afgeschermd CMS waarin producten, orders, (sub)categorieën beheerd worden. 
Inlog zoals bekend: admin, admin </td>
        <td>Louis</td>
        <td>3 dagen</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>79</td>
        <td>Een product heeft minstens de volgende 5 eigenschappen op de site: <br>
            <ul>
<li>- Een korte omschrijving (max 200 tekens) EN een lange omschrijving </li>
<li>- Plaatje groot EN Plaatje klein </li>
<li>- Prijs</li>
            </ul>
        </td>
        <td>Rick</td>
        <td>2 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>80</td>
        <td>Een product valt onder één categorie.</td>
        <td>Louis</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>81</td>
        <td>Een categorie bestaat uit subcategorie </td>
        <td>Louis</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>82</td>
        <td>De indeling in categorieën moet in het menu van de webshop zichtbaar zijn.</td>
        <td>Rick</td>
        <td>2 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>83</td>
        <td>Zoeken op willekeurige tekst in productcatalogus en het tonen van de resultaten 
moet mogelijk zijn. 
</td>
        <td>Louis</td>
        <td>5 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>84</td>
        <td>Een product kan vanuit de productcatalogus of vanuit de zoekresultaten worden 
toegevoegd aan de winkelwagen. 
</td>
        <td>Louis</td>
        <td>3 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>85</td>
        <td>Tonen inhoud winkelwagen inclusief totaalprijs.</td>
        <td>Louis</td>
        <td>5 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>86</td>
        <td>Klant moet inhoud van de winkelwagen kunnen beheren (Edit, delete)</td>
        <td>Louis</td>
        <td>2 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>87</td>
        <td>Het plaatsen van een bestelling tot aan het betalen, de betaling hoeft niet echt te 
gebeuren natuurlijk. Het tonen van de order is voldoende. De winkelwagen moet na 
het tonen van de order wel LEEG zijn. 
</td>
        <td>Louis</td>
        <td>3 uur</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>88</td>
        <td>De shop moet een aantal jQuery elementen bevatten (ja, dit is vaag!).</td>
        <td>Rick</td>
        <td>N.V.T</td>
        <td class="ja"></td>
    </tr>
    <tr>
        <td>90</td>
        <td>Een single entry point voor de complete website. Dat betekent dat telkens de 
index.php wordt gebruikt, waarmee je de complete site rendert/bouwt</td>
        <td>Rick</td>
        <td>N.V.T</td>
        <td class="nee"></td>
    </tr>
    <tr>
        <td>91</td>
        <td>Een product heeft kenmerken en per kenmerk kun je filteren.</td>
        <td>Louis</td>
        <td>N.V.T</td>
        <td class="nee"></td>
    </tr>
    <tr>
        <td>92</td>
        <td>Of: productvergelijker waarmee je maximaal 3 producten naast elkaar kunt zetten.</td>
        <td>Rick</td>
        <td>N.V.T</td>
        <td class="nee"></td>
    </tr>
    <tr>
        <td>100</td>
        <td>Verfraaiingen / zinnige extra features die je zelf mag verzinnen. Verras ons! </td>
        <td>Rick</td>
        <td>N.V.T</td>
        <td class="nee"></td>
    </tr>
</table>
            
            </div>
        </div>
</section>
@stop