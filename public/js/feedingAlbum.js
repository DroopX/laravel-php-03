const data = {
    "albumArr": [
        {
            "album": "Álbum: Rei do Gado, 1961",
            "musicArr": [
                {
                    "numero": "11",
                    "music": "Minas Gerais",
                    "tempo": "3:47"
                }
            ]
        },
        {
            "album": "Álbum: Linha de Frente, 1964",
            "musicArr": [
                {
                    "numero": "1",
                    "music": "O Mineiro e o Italiano",
                    "tempo": "3:21"
                },
                {
                    "numero": "8",
                    "music": "Minha prece",
                    "tempo": "2:42"
                }
            ]
        }
    ]
}

export default function generateHTML(data) {
    
    let html = '<table>';
    // html += '<tr class="test"><th  >Nome do Álbum</th><th>Número da Música</th><th>Música</th><th>Tempo da Música</th></tr>';

    data.albumArr.forEach((albums) => {
        // html += `<tr class="name-album" > ${albums.album} </tr>`
        albums.musicArr.forEach((musicArr) => {
            html += '<tr>';
            html += `<td class="name-album" >${albums.album}</td>`;
            html += `<td>${musicArr.numero}</td>`;
            html += `<td class="name-music" > <p> ${musicArr.music} </p> </td>`;
            html += `<td>${musicArr.tempo}</td>`;
            html += '</tr>';
        });
    });

    html += '</table>';
    return html;
}

const container = document.querySelector('.container-albums')
container.innerHTML = generateHTML(data)
