cmake_minimum_required(VERSION 3.8)
project(public_html)

set(CMAKE_CXX_STANDARD 11)

set(SOURCE_FILES
        Actividades/95/2,12.html
        Actividades/95/2,16.html
        Actividades/95/2,17.html
        Actividades/95/fondo.gif
        Actividades/95/the_spooky_page.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_1/index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_11/index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_12/index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_2/Index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_3/image.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_3/imagen1.jpg
        Actividades/Actividades_Propuestas/ActividadPropuesta2_3/Index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_3/yousayrun.mp3
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/A.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/B.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/Back.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/C.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/D.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/E.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/F.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/FA.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/FB.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/FC.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/G.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/Up.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/Y.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Images/Z.gif
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/subreferencias/a.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/subreferencias/b.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_4/Index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_5/Index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_6/Index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_7/Index.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_7/Index2.html
        Actividades/Actividades_Propuestas/ActividadPropuesta2_8/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_1/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_11/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_12/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_13/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_14/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_15/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_16/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_17/flecha_activa.png
        Actividades/Actividades_Resueltas/ActividadResuelta2_17/flecha_inactiva.png
        Actividades/Actividades_Resueltas/ActividadResuelta2_17/index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_18/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_19/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_19/one.css
        Actividades/Actividades_Resueltas/ActividadResuelta2_2/index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_20/gredos.jpg
        Actividades/Actividades_Resueltas/ActividadResuelta2_20/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_20/logocabecera.jpg
        Actividades/Actividades_Resueltas/ActividadResuelta2_20/two.css
        Actividades/Actividades_Resueltas/ActividadResuelta2_21/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_3/index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_4/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_5/index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_5/index.txt
        Actividades/Actividades_Resueltas/ActividadResuelta2_6/index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_7/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_8/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_9/Index.html
        Actividades/Actividades_Resueltas/ActividadResuelta2_20.rar
        Actividades/ActividadResuelta1_2/images/111.jpg
        Actividades/ActividadResuelta1_2/images/back_all.gif
        Actividades/ActividadResuelta1_2/images/fondoama.jpg
        Actividades/ActividadResuelta1_2/images/header_top.gif
        Actividades/ActividadResuelta1_2/images/header_top_over.gif
        Actividades/ActividadResuelta1_2/images/white.gif
        Actividades/ActividadResuelta1_2/index.php
        Actividades/ActividadResuelta1_2/styles.css
        Actividades/Prueba1/Index.php
        Actividades/Prueba1/process.php
        "Actividades/El index de aqui es para ver todas las actividades.txt"
        Actividades/Index.html
        Actividades/main.html
        "Actividades/Plantilla 1.html"
        Noru/main/aram/annie/index.html
        Noru/main/aram/annie/stuff.jpg
        Noru/main/aram/ashe/index.html
        Noru/main/aram/cho/index.html
        Noru/main/aram/ezreal/index.html
        Noru/main/aram/fiddle/index.html
        Noru/main/aram/garen/index.html
        Noru/main/aram/lux/index.html
        Noru/main/aram/olaf/index.html
        Noru/main/aram/teemo/index.html
        Noru/main/aram/aram.jpg
        Noru/main/aram/index.html
        Noru/main/magicshit/index.html
        Noru/main/magicshit/maxresdefault.jpg
        Noru/main/shitposting/animestuff/index.html
        Noru/main/shitposting/catvid/index.html
        Noru/main/shitposting/dejavu/index.html
        Noru/main/shitposting/images/eab015eb9a0325d4c20c1daa387eed3c.jpg
        Noru/main/shitposting/images/ge4AEai.jpg
        Noru/main/shitposting/images/kirino_nazbol_by_comradepepe-dadmaan.jpg
        Noru/main/shitposting/images/maxresdefault.jpg
        Noru/main/shitposting/images/meme.jpg
        Noru/main/shitposting/images/memes.jpg
        Noru/main/shitposting/images/not.jpg
        Noru/main/shitposting/images/x1kTkzz.jpg
        Noru/main/shitposting/images/yes.jpg
        Noru/main/shitposting/memes/index.html
        Noru/main/shitposting/shit/index.html
        Noru/main/shitposting/vallhalla/index.html
        Noru/main/shitposting/index.html
        Noru/main/shitposting/one.css
        Noru/main/ditto.html
        Noru/main/fondo.gif
        Noru/main/konga.mp3
        Noru/main/one.css
        Noru/main/spin.min.js
        Noru/main/Spook.html
        Noru/main/the_spooky_page.html
        Noru/.ftpquota
        "Season 2/Guillem Burnlees Viada A/Imatges/logo.png"
        "Season 2/Guillem Burnlees Viada A/Guillem_burnlees_viada_parte_A.html"
        "Season 2/Guillem Burnlees viada B/Guillem_burnlees_viada_parte_b.html"
        "Season 2/Seguridad informatica/grups coop/Equip�.txt"
        "Season 2/Seguridad informatica/grups coop/Grup coop 1.doc"
        "Season 2/Seguridad informatica/grups coop/Seguritat inform�tica Tema 1 (Grup).pdf"
        "Season 2/Seguridad informatica/tema 1/Actividades/Actividad 1/Actividad parte-1/Actividad 1.doc"
        "Season 2/Seguridad informatica/tema 1/Actividades/Actividad 1/Actividad parte-2/Actividad 1 parte 2.doc"
        "Season 2/Seguridad informatica/tema 1/Actividades/Actividad 1/Actividad 1.doc"
        "Season 2/Seguridad informatica/tema 1/pdf/Actividades Tema 1 - Parte 1.pdf"
        "Season 2/Seguridad informatica/tema 1/pdf/Unidad 1 - parte 1.pdf"
        "Season 2/Serveis en Red/Tema 3/Actividades Unidad 3 DHCP.doc"
        "Season 2/Serveis en Red/Tema 3/Palabras clave DHCP 95.doc"
        "Season 2/Serveis en Red/~\$tividades pagina 35 y 64.doc"
        "Season 2/SOX/Activitats ampliacio.doc"
        "Season 2/SOX/Activitats dia 29-09-17.doc"
        "Season 2/SOX/comandos de linux.txt"
        "Season 2/SOX/Conceptos 1710.doc"
        "Season 2/SOX/Pagina 49 aplicaci�n.doc"
        "Season 2/SOX/Tema 2 Preguntas.doc"
        "Season 2/SOX/~\$gina 49 aplicaci�n.doc"
        "Season 2/Examenes.xls"
        "Season 2/main-20171011T062809Z-001.zip"
        index.html
        "Plantilla 1.html"
        test.html)

add_executable(public_html ${SOURCE_FILES})