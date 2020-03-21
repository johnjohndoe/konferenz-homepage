<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>OSM-Daten verarbeiten mit Python und Pyosmium – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_GYWH39">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>OSM-Daten verarbeiten mit Python und Pyosmium</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Sarah Hoffmann</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 09:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

                        <div class="video-container">
                <a href="https://media.ccc.de/v/fossgis2020-3104-osm-daten-verarbeiten-mit-python-und-pyosmium">
                    <img class="video-preview" src="video_previews/3104-hd.jpg" alt="Vorschaubild des Videos">
                    <div class="video-preview-overlay"></div>
                </a>
            </div>
                        <p><a href="/2020/attachments/GYWH39_fossgis2020_pyosmium_V3aopbl.pdf">Vortragsfolien (PDF) </a></p>
            <p>Die OpenStreetMap-Software-Welt bietet eine reiche Auswahl an Tools, um
OSM-Daten für bestimmte Verwendungszwecke aufzubereiten. Es gibt zum Beispiel
osm2pgsql oder Imposm für die Kartenerstellung, osm2pgrouting für Routing oder
Nominatim für Geocoding. Außerhalb ihrer Anwendungen stößt man mit so aufbereiteten Daten
jedoch schnell an Grenzen, da diese Tools die OSM-Daten in eine bestimmte Struktur
zwingen. Oft ist dies das Simple-Feature-Modell. Das OSM-Daten-Modell mit seinen
topologischen Informationen und Relationen ist hier wesentlich mächtiger. Wer
mehr aus den Daten holen will, zum Beispiel für statistische Analysen oder
komplexere Routinganwendungen, arbeitet besser direkt mit den OSM-Rohdaten.</p>
<p>Pyosmium bietet eine Möglichkeit OSM-Rohdaten schnell in Python zu verarbeiten.
Dieser Vortrag demonstriert anhand von praktischen Beispielen, wie man eigene Tools zur
Datenaufbereitung schreiben kann. Er erklärt die Besonderheiten des
OSM-Datenmodells und zeigt Techniken auf, wie man effizient mit den Daten umgeht.</p>
<p>Dieser Vortrag ist für jene gedacht, die schon mal ein wenig mit OpenStreetMap-
Daten gearbeitet haben, vielleicht mit einem der genannten Tools und die nun
gerne besser verstehen möchten, was hinter den Daten steht. Minimale
Programmierkenntnisse sind von Vorteil.</p>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Sarah Hoffmann</h3>
            <p>Sarah ist seit vielen Jahren aktiver Mapper und Entwickler für OpenStreetMap. Sie ist Maintainer für osm2pgsql, Nominatim und Pyosmium und betreibt die Wanderkarte waymarkedtrails.org.</p>
        </div>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>