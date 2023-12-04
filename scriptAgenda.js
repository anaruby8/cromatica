var allEvents = [
  // Evento próximo
  {
      id: 'upcoming',
      title: 'Luz y Sombra: Arte Contemporáneo',
      time: '12:00 PM',
      startDate: '20 de diciembre',
      endDate: '20 de enero de 2024',
      location: 'Museo Tamayo Arte Contemporáneo, Paseo de la Reforma, Ciudad de México',
      locationUrl: 'https://www.google.com/maps/search/?api=1&query=Museo+Tamayo+Arte+Contemporáneo',
      artists: 'Sofía Táboas, Gabriel Orozco, Tatiana Bilbao',
      totalWorks: '30',
      costo: '0 MXM',
      image: 'https://image.lexica.art/full_webp/57741a1a-df6b-4ce2-aeb4-34a12bca3f36'
    },
    {
      id: 'upcoming',
      title: 'Historias Mágicas: Arte Popular Mexicano',
      time: '11:00 AM',
      startDate: '1 de febrero',
      endDate: '1 de abril de 2024',
      location: 'Museo de Arte Popular, Centro Histórico, Ciudad de México',
      locationUrl: 'https://www.google.com/maps/search/?api=1&query=Museo+de+Arte+Popular',
      artists: 'Carmen Lomas Garza, Rufino Tamayo, Francisco Toledo',
      totalWorks: '45',
      costo: '0 MXM',
      image: 'https://image.lexica.art/full_webp/1d018b1f-78b6-4306-b6c3-243f6322d430'
    },
    {
      id: 'upcoming',
      title: 'Reflejos del Tiempo: Fotografía Mexicana',
      time: '10:00 AM',
      startDate: '10 de marzo',
      endDate: '10 de mayo de 2024',
      location: 'Centro de la Imagen, Plaza de la Ciudadela, Ciudad de México',
      locationUrl: 'https://www.google.com/maps/search/?api=1&query=Centro+de+la+Imagen',
      artists: 'Enrique Metinides, Graciela Iturbide, Manuel Álvarez Bravo',
      totalWorks: '50',
      costo: '100 MXM',
      image: 'https://image.lexica.art/full_webp/06e805e4-c05d-476c-b569-f16cecea1534'
    },
 // Evento pasado
  {
      id: 'past',
      title: 'Murales del Ayer: Orozco y Rivera',
      time: '09:00 AM',
      startDate: '1 de enero',
      endDate: '1 de marzo de 2023',
      location: 'Palacio de Bellas Artes, Centro Histórico, Ciudad de México',
      locationUrl: 'https://www.google.com/maps/search/?api=1&query=Palacio+de+Bellas+Artes',
      artists: 'Diego Rivera, José Clemente Orozco',
      totalWorks: '20',
      costo: '0 MXM',
      image: 'https://image.lexica.art/full_webp/2132472e-ffa3-4979-a3c0-e2c8e1454ff3'
  },
  {
      id: 'past',
      title: 'Colores de la Tierra: Arte Cerámico',
      time: '02:00 PM',
      startDate: '15 de octubre',
      endDate: '15 de diciembre de 2023',
      location: 'Museo Nacional de Antropología, Ciudad de México',
      locationUrl: 'https://www.google.com/maps/search/?api=1&query=Museo+Nacional+de+Antropología',
      artists: 'Juan Quezada, Doña Rosa',
      totalWorks: '60',
      costo: '0 MXM',
      image: 'https://image.lexica.art/full_webp/76086b5f-1e50-4545-b3b6-1d3672845012'
  },
  {
      id: 'past',
      title: 'Sonidos de México: Instrumentos Prehispánicos',
      time: '01:00 PM',
      startDate: '20 de julio',
      endDate: '20 de septiembre de 2023',
      location: 'Museo Nacional de las Culturas, Ciudad de México',
      locationUrl: 'https://www.google.com/maps/search/?api=1&query=Museo+Nacional+de+las+Culturas',
      artists: 'Artistas Anónimos Prehispánicos',
      totalWorks: '35',
      costo: '0 MXM',
      image: 'https://image.lexica.art/full_webp/4a4c4f98-bb09-46a1-b521-923dc98afcad'
  },
      
  
];

// Función para filtrar eventos basada en el tipo seleccionado
function filterEvents(filter) {
  var eventsToShow;
  if (filter === 'all') {
    eventsToShow = allEvents;
  } else {
    eventsToShow = allEvents.filter(function(event) {
      return filter === 'upcoming' ? !event.id.includes('past') : event.id.includes('past');
    });
  }
  displayEvents(eventsToShow);
}

function displayEvents(events) {
  var eventsContainer = document.getElementById('events');
  eventsContainer.innerHTML = ''; // Limpiar eventos anteriores
  events.forEach(function(event) {
    var eventHtml = `
      <div class="event ${event.id === 'past' ? 'event-past' : ''}">
        <img src="${event.image}" alt="${event.title}">
        <div class="event-info">
          <div class="event-title">${event.title}</div>
          <div class="event-date">${event.time} - ${event.startDate} al ${event.endDate}</div> 
          <div class="event-artists">Artistas: ${event.artists}</div>
          <div class="event-works">Total de Obras: ${event.totalWorks}</div>
          <div class="event-costo">Costo: $ ${event.costo}</div>
          <a href="${event.locationUrl}" target="_blank" class="event-location">${event.location}</a>
        </div>
      </div>
    `;
    eventsContainer.innerHTML += eventHtml;
  });
}

// Inicializar con todos los eventos
displayEvents(allEvents);
