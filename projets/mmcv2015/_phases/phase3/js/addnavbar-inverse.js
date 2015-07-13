       /* Detecte la hauteur de section , et ajoute la class navbar iverse quand le scroll depasse cette hauteur*/
       
       fiixDiv();

        function fiixDiv() {
            var header = document.querySelector('section');
            var header_height = getComputedStyle(header).height.split('px')[0];
            var monLien = document.querySelector("nav");

            if ($(window).scrollTop() > header_height - 40 )
            monLien.classList.add("navbar-inverse");
            else
            monLien.classList.remove("navbar-inverse"); 
        }
        $(window).scroll(fiixDiv);