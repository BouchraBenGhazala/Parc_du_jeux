
window.onload = function() {
    var calendar = document.getElementById('calendar');
    var currentDate = new Date();

    var month = currentDate.getMonth();
    var year = currentDate.getFullYear();

    renderCalendar(month, year);

    function renderCalendar(month, year) {
        var daysInMonth = new Date(year, month + 1, 0).getDate();
        var firstDay = new Date(year, month, 1).getDay();

        var monthNames = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

        var table = document.createElement('table');

        var caption = document.createElement('caption');
        caption.innerHTML = monthNames[month] + ' ' + year;
        table.appendChild(caption);

        var headerRow = document.createElement('tr');
        var daysOfWeek = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];

        for (var i = 0; i < 7; i++) {
            var th = document.createElement('th');
            th.innerHTML = daysOfWeek[i];
            headerRow.appendChild(th);
        }

        table.appendChild(headerRow);

        var date = 1;

        for (var i = 0; i < 6; i++) {
            var row = document.createElement('tr');

            for (var j = 0; j < 7; j++) {
                if (i === 0 && j < firstDay) {
                    var td = document.createElement('td');
                    row.appendChild(td);
                } else if (date > daysInMonth) {
                    break;
                } else {
                    var td = document.createElement('td');
                    td.innerHTML = date;
                    td.addEventListener('click', displayDate);
                    row.appendChild(td);
                    date++;
                }
            }

            table.appendChild(row);
        }

        calendar.innerHTML = '';
        calendar.appendChild(table);
    }

    function displayDate() {
        var day = this.innerHTML;
        var selectedDate = new Date(year, month, day);
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var formattedDate = selectedDate.toLocaleDateString('fr-FR', options);
    
        var jour_char = formattedDate.split(' ')[0];
        var jour_int = day;
        var mois = formattedDate.split(' ')[2];
        var annee = formattedDate.split(' ')[4];
    
        // Création de l'URL avec les paramètres
        var url = 'horaire.php' + '?jour_char=' + encodeURIComponent(jour_char) +
                  '&jour_int=' + encodeURIComponent(jour_int) +
                  '&mois=' + encodeURIComponent(mois) +
                  '&annee=' + encodeURIComponent(annee);
    
        // Création de l'objet XMLHttpRequest
        var xhr = new XMLHttpRequest();
    
        // Spécification de la méthode et de l'URL de la requête
        xhr.open('GET', url, true);
    
        // Gestionnaire d'événement pour la réponse de la requête
        xhr.onload = function() {
            // Votre code pour traiter la réponse du fichier PHP
            console.log(xhr.responseText);
        };
    
        // Envoi de la requête
        xhr.send();
    }
    
    
    
    
};

