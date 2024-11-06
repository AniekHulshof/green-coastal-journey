if (document.getElementById('map') !== null) {

    const map = L.map('map').setView([58.62, 7.16], 5);
    
    L.tileLayer('https://api.maptiler.com/maps/basic-v2/{z}/{x}/{y}.png?key=TvQVnO2VwuMG1pURr8Dm', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    }).addTo(map);
    
    async function getLocation() {
        const response = await fetch("json/locations.json");
        const locations = await response.json();   
        let i = 0;
        for (let location of locations.locations) {
        let marker = L.marker(location.coordinates).addTo(map);
    
        marker.bindPopup(`
                <p> Name: ${location.name} <br>
                    Type: ${location.type} <br>
                    Address: ${location.address} <br>
                    Contact: ${location.contact} <br>
                    Rating: ${location.rating} <br>
                </p>
            `);
        }
    }
    
    getLocation();
    
    // const marker1 = L.latLng(53.174452070794516, 6.629784988255506);
    
    // L.Routing.control({
    //     waypoints: [
    //         marker1,
    //         marker2,
    //         marker3
    //     ],
    //     draggableWaypoints: false,
    //     routeWhileDragging: false,
    //     dragWaypoints: false,
    //     addWaypoints: false
    // }).addTo(map);
    
    }
    
    async function getJSON(url) {
        const response = await fetch(url);
        const json = await response.json();
        console.log(json);
        return json;
    }
    
    const menuButton = document.querySelector('[aria-controls="mobile-menu"]');
    
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenu.hidden = true;
    menuButton.setAttribute('aria-expanded', 'false');
    
    menuButton.addEventListener('click', function () {
       
        const expanded = this.getAttribute('aria-expanded') === 'true' || false;
        this.setAttribute('aria-expanded', !expanded);
        mobileMenu.hidden = expanded;
    });
    
    const dropdownButtons = document.querySelectorAll('.dropdown-button');
    
    dropdownButtons.forEach(button => {
        button.addEventListener('click', function () {
            const dropdownMenu = this.nextElementSibling;
            dropdownMenu.classList.toggle('hidden');
        });
    });
    
    // const taalSelect = document.querySelectorAll('.taal');
    // let taal;
    
    // taalSelect.forEach(button => {
    //     button.addEventListener('click', async () => {
    //         if (button.className.includes("nederlands")) {
    //             taal = await getJSON("json/nl.json");
    //             console.log(taal);
    //         } else {
    //             console.log("failure");
    //         }
    //     });
    // });