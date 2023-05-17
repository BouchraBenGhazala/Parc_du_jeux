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

        alert(formattedDate);
    }
};
