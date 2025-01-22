document.addEventListener('DOMContentLoaded', function() {
    const priceRange = document.getElementById('price-range');
    const priceValue = document.getElementById('price-value');
    const filterForm = document.getElementById('filter-form');
    const sortSelect = document.getElementById('sort-hotels');
    const hotelGrid = document.querySelector('.hotel-grid');

    // Update price display
    priceRange.addEventListener('input', function() {
        priceValue.textContent = `${this.value} ETB`;
    });

    // Sample hotel data (keeping the original list)
    const hotelsList = [
        {
            id: 'sheraton-addis',
            name: 'Sheraton Addis',
            location: 'Addis Ababa',
            price: 15000,
            rating: 5,
            image: 'src/images/sheraton-addis.jpg',
            amenities: ['wifi', 'pool', 'spa', 'restaurant']
        },
        {
            id: 'hyatt-addis',
            name: 'Hyatt Regency',
            location: 'Addis Ababa',
            price: 12000,
            rating: 5,
            image: 'src/images/hyatt-addis.jpg',
            amenities: ['wifi', 'pool', 'restaurant']
        },
        {
            id: 'kuriftu-resort',
            name: 'Kuriftu Resort',
            location: 'Bahir Dar',
            price: 8000,
            rating: 4,
            image: 'src/images/kuriftu-resort.jpg',
            amenities: ['wifi', 'pool', 'spa']
        },
        {
            id: 'goha-hotel',
            name: 'Goha Hotel',
            location: 'Gondar',
            price: 5000,
            rating: 4,
            image: 'src/images/goha-hotel.jpg',
            amenities: ['wifi', 'restaurant']
        },
        {
            id: 'haile-resort',
            name: 'Haile Resort',
            location: 'Hawassa',
            price: 6500,
            rating: 4,
            image: 'src/images/haile-resort-hawassa.jpg',
            amenities: ['wifi', 'pool', 'restaurant']
        },
        {
            id: 'maribela-hotel',
            name: 'Maribela Hotel',
            location: 'Lalibela',
            price: 4500,
            rating: 4,
            image: 'src/images/maribela-lalibela.jpg',
            amenities: ['wifi', 'restaurant']
        },
        {
            id: 'lewi-resort',
            name: 'Lewi Hotels and Resorts',
            location: 'Wolaita Sodo',
            price: 3500,
            rating: 4,
            image: 'src/images/lewi-resort.jpg',
            amenities: ['WiFi', 'Restaurant', 'Conference Hall'],
            description: 'Nestled in the heart of Wolaita Sodo, offering modern amenities and traditional hospitality.',
            filters: {
                city: 'wolaita-sodo',
                stars: 4,
                amenities: ['wifi', 'restaurant', 'conference']
            }
        }
    ];

    function renderHotelCard(hotel) {
        return `
            <div class="hotel-card">
                <img src="${hotel.image}" alt="${hotel.name}">
                <h3>${hotel.name}</h3>
                <p>${hotel.location}</p>
                <p class="price">From ${hotel.price.toLocaleString()} ETB/night</p>
                <div class="hotel-preview">
                    <div class="rating">${'★'.repeat(hotel.rating)}</div>
                    <p class="amenities">${hotel.amenities.join(' • ')}</p>
                </div>
                <div class="hotel-actions">
                    <a href="/hotel-details?hotel=${hotel.id}" class="view-details-btn">View Details</a>
                    <button class="book-now-btn" data-hotel="${hotel.id}" data-price="${hotel.price}">Book Now</button>
                </div>
            </div>
        `;
    }

    function renderHotels(hotels) {
        hotelGrid.innerHTML = hotels.map(hotel => renderHotelCard(hotel)).join('');
        
        // Add event listeners to book now buttons
        document.querySelectorAll('.book-now-btn').forEach(button => {
            button.addEventListener('click', function() {
                const hotelName = this.dataset.hotel;
                const price = this.dataset.price;
                const checkIn = '2024-02-20'; // Default date
                const checkOut = '2024-02-22'; // Default date

                window.location.href = '/payment?hotel=${hotelName}&price=${price}&checkin=${checkIn}&checkout=${checkOut}';
            });
        });
    }

    // Initial render
    renderHotels(hotelsList);

    // Filter functionality
    filterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const maxPrice = parseInt(priceRange.value);
        const location = document.getElementById('location-filter').value;
        const selectedStars = [...document.querySelectorAll('input[type="checkbox"]:checked')]
            .filter(cb => cb.id.includes('star'))
            .map(cb => parseInt(cb.value));
        const selectedAmenities = [...document.querySelectorAll('input[type="checkbox"]:checked')]
            .filter(cb => !cb.id.includes('star'))
            .map(cb => cb.value);

        const filteredHotels = hotelsList.filter(hotel => {
            const matchesPrice = hotel.price <= maxPrice;
            const matchesLocation = !location || hotel.location.toLowerCase().includes(location.toLowerCase());
            const matchesStars = selectedStars.length === 0 || selectedStars.includes(hotel.rating);
            const matchesAmenities = selectedAmenities.length === 0 || 
                selectedAmenities.every(amenity => hotel.amenities.includes(amenity));

            return matchesPrice && matchesLocation && matchesStars && matchesAmenities;
        });

        renderHotels(filteredHotels);
    });

    // Sorting functionality
    sortSelect.addEventListener('change', function() {
        const sortedHotels = [...hotelsList];
        switch(this.value) {
            case 'price-low':
                sortedHotels.sort((a, b) => a.price - b.price);
                break;
            case 'price-high':
                sortedHotels.sort((a, b) => b.price - a.price);
                break;
            case 'rating':
                sortedHotels.sort((a, b) => b.rating - a.rating);
                break;
        }
        renderHotels(sortedHotels);
    });
}); 