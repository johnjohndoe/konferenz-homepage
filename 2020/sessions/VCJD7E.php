<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>GeoPython mit dem Jupyter Notebook - Rasterdaten – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/mittwoch.php#session_VCJD7E">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>GeoPython mit dem Jupyter Notebook - Rasterdaten</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Workshop</span> von                <span class='abstract-speakers'>Christian Strobl</span></p>
                <p class='abstract-is-workshop'>Bitte melden Sie sich im <a href="https://pretix.eu/fossgis/2020/">Ticketshop</a> für diesen Workshop an, wenn Sie daran teilnehmen möchten.</p>            <p><span class='abstract-time-heading'>Zeit: </span>Mittwoch 11. März 10:30 Uhr<br><span class='abstract-room-heading'>Ort: </span>SR R-100</p>

            
            <p>Python wird immer wichtiger als Programmiersprache im GIS-Bereich. Dies liegt zum einem an der klaren und leicht zu lernenden Sprachsyntax von Python, die v.a. für Programmieranfänger einen großen Vorteil darstellt, als auch an der Verfügbarkeit für alle geläufigen Betriebssysteme, wie z.b. Windows, Linux oder Mac OS. Zum anderen existiert inzwischen eine kaum mehr zu überschauenden Vielfalt an Bibliotheken für den Bereich der Geodatenverarbeitung. Neben APIs für Grass GIS, QGIS, ArcGIS und vielen anderen Desktop GIS Systemen, gibt es eine Vielzahl von Standalone Bibliotheken, mit denen sich vielfältige Aufgaben aus der Geodatenverarbeitung mit Python auf einfache Weise automatisieren lassen. Ziel dieses Kurses ist es einen Überblick über die vorhandenen Python-Bibliotheken für Geodaten im <strong>Rasterformaten</strong> zu geben. 
An einfachen Beispielen sollen erste kleine Schritte für Aufgaben aus dem Bereich der Rasterdatenverarbeitung demonstriert und erlernt werden. Die Beispiele sollen überwiegend der Einführung in die vorgestellten Bibliotheken (GDAL/OGR, Rasterio, NumPy, SciPy, Matplotlib, Folium, CartoPy, BaseMap, ...) dienen und können mit wenigen Zeilen in Jupyter-Notebooks ausgeführt werden. Dieser Kurs ist eine Einführung in die Verarbeitung von Rasterdaten mit Python.
Die Teilnehmer werden am Ende des Kurses grundlegende Funktionen kennen, um Rasterdaten in Python einzulesen, zu verarbeiten und wieder abzuspeichern. Sie bekommen einen Überblick über verschiedene Bibliotheken und wissen, wie sie diese verwenden können.</p>
<p>Geplant ist u.a. folgender Ablauf:</p>
<ul>
<li>Fernerkundungsdaten / DGM-Daten / Landbedeckungsdaten  mit GDAL / Rasterio einlesen</li>
<li>Untersuchung / Darstellung der Fernerkundungsdaten (Histogrammanalyse, Darstellung unterschiedlicher Bandkombinationen, ...)</li>
<li>Einfache Rasteralgebra mit NumPy: Berechnung des NDVI für ein Beispielbild</li>
<li>Kostenanalyse auf Basis eines digitalen Geländemodells (DGM)</li>
<li>Einfache Standortanalyse auf Basis der Landbedeckungsdaten und eines digitalen Geländemodells (DGM)</li>
<li>Darstellung der Ergebnisse mit matplotlib, Folium und/oder Basemap, CartoPy</li>
</ul>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>