// Define hotel data
const hotelData = {
    'sheraton-addis': {
        name: 'Sheraton Addis',
        location: 'Taitu Street, Addis Ababa, Ethiopia',
        price: 15000,
        rating: 5,
        description: 'Located in the heart of Ethiopia\'s capital, Sheraton Addis is a luxurious 5-star hotel offering world-class amenities and spectacular city views. The hotel features elegant rooms, multiple dining options, and extensive recreational facilities.',
        images: ['sheraton-addis.jpg', 'sheraton-room.jpg', 'sheraton-pool.jpg', 'sheraton-restaurant.jpg'],
        contact: {
            phone: '+251 11 517 1717',
            email: 'info@sheratonaddis.com',
            website: 'www.sheratonaddis.com'
        }
    },
    'hyatt-addis': {
        name: 'Hyatt Regency',
        location: 'Meskel Square, Addis Ababa, Ethiopia',
        price: 12000,
        rating: 5,
        description: 'Experience luxury at Hyatt Regency Addis Ababa, featuring contemporary design, premium amenities, and exceptional service in the heart of Ethiopia\'s capital.',
        images: ['hyatt-addis.jpg', 'hyatt-room.jpg', 'hyatt-pool.jpg', 'hyatt-restaurant.jpg'],
        contact: {
            phone: '+251 11 517 1234',
            email: 'info@hyattaddis.com',
            website: 'www.hyattaddis.com'
        }
    },
    'kuriftu-resort': {
        name: 'Kuriftu Resort',
        location: 'Lake Tana, Bahir Dar, Ethiopia',
        price: 8000,
        rating: 4,
        description: 'A stunning lakeside resort offering traditional Ethiopian hospitality with modern comforts, featuring spectacular views of Lake Tana.',
        images: ['kuriftu-resort.jpg', 'kuriftu-room.jpg', 'kuriftu-pool.jpg', 'kuriftu-restaurant.jpg'],
        contact: {
            phone: '+251 11 618 4444',
            email: 'info@kuriftu.com',
            website: 'www.kuriftu.com'
        }
    },
    'goha-hotel': {
        name: 'Goha Hotel',
        location: 'Castle View, Gondar, Ethiopia',
        price: 5000,
        rating: 4,
        description: 'Perched on a hill overlooking the historic city of Gondar, Goha Hotel offers comfortable accommodations with breathtaking views of the royal enclosure.',
        images: ['goha-hotel.jpg', 'goha-room.jpg', 'goha-view.jpg', 'goha-restaurant.jpg'],
        contact: {
            phone: '+251 11 771 1711',
            email: 'info@gohahotel.com',
            website: 'www.gohahotel.com'
        }
    },
    'haile-resort': {
        name: 'Haile Resort',
        location: 'Lake View, Hawassa, Ethiopia',
        price: 6500,
        rating: 4,
        description: 'Set on the shores of Lake Hawassa, this resort offers a perfect blend of comfort and nature, with excellent recreational facilities.',
        images: ['haile-resort-hawassa.jpg', 'haile-room.jpg', 'haile-pool.jpg', 'haile-restaurant.jpg'],
        contact: {
            phone: '+251 11 618 0000',
            email: 'info@haileresort.com',
            website: 'www.haileresort.com'
        }
    },
    'maribela-hotel': {
        name: 'Maribela Hotel',
        location: 'Church Road, Lalibela, Ethiopia',
        price: 4500,
        rating: 4,
        description: 'A charming hotel in the historic town of Lalibela, offering comfortable stays with easy access to the famous rock-hewn churches.',
        images: ['maribela-lalibela.jpg', 'maribela-room.jpg', 'maribela-view.jpg', 'maribela-restaurant.jpg'],
        contact: {
            phone: '+251 11 515 1515',
            email: 'info@maribelahotel.com',
            website: 'www.maribelahotel.com'
        }
    },
    'lewi-resort': {
        name: 'Lewi Hotels and Resorts',
        location: 'Wolaita Sodo, Southern Ethiopia',
        price: 3500,
        rating: 4,
        description: 'Nestled in the heart of Wolaita Sodo, Lewi Hotels and Resorts offers a serene escape with stunning views of the surrounding mountains. The hotel features modern amenities, traditional Ethiopian hospitality, and is conveniently located near Wolaita Sodo University and the city center.',
        images: ['lewi-resort.jpg', 'lewi-room.jpg', 'lewi-restaurant.jpg', 'lewi-view.jpg'],
        contact: {
            phone: '+251 46 551 4444',
            email: 'info@lewihotels.com',
            website: 'www.lewihotels.com'
        }
    },
};

document.addEventListener('DOMContentLoaded', function() {
    // Get hotel ID from URL
    const urlParams = new URLSearchParams(window.location.search);
    const hotelId = urlParams.get('hotel') || 'sheraton-addis';

    // Get hotel data
    const hotel = hotelData[hotelId];
    if (!hotel) {
        window.location.href = 'hotels.html';
        return;
    }

    // Update page title
    document.title = `${hotel.name} - Marefiya`;

    // Update hotel information
    document.querySelector('.hotel-header h1').textContent = hotel.name;
    document.querySelector('.location').innerHTML = `<i class="location-icon">📍</i> ${hotel.location}`;
    document.querySelector('.rating').textContent = '★'.repeat(hotel.rating);
    document.querySelector('.price').textContent = `From ${hotel.price.toLocaleString()} ETB/night`;
    document.querySelector('.description p').textContent = hotel.description;

    // Update gallery images
    const mainImage = document.getElementById('mainImage');
    const thumbnailGrid = document.querySelector('.thumbnail-grid');
    
    mainImage.src = `images/${hotel.images[0]}`;
    mainImage.alt = hotel.name;

    thumbnailGrid.innerHTML = hotel.images.map(image => `
        <img src="images/${image}" alt="${hotel.name}" class="thumbnail" onclick="changeImage('images/${image}')">
    `).join('');

    // Update contact information
    const contactDetails = document.querySelector('.contact-details');
    contactDetails.innerHTML = `
        <p><strong>Phone:</strong> ${hotel.contact.phone}</p>
        <p><strong>Email:</strong> ${hotel.contact.email}</p>
        <p><strong>Website:</strong> <a href="https://${hotel.contact.website}" target="_blank">${hotel.contact.website}</a></p>
    `;

    // Add event listener to book now button
    const bookNowBtn = document.querySelector('.book-now-btn');
    bookNowBtn.addEventListener('click', function() {
        window.location.href = `payment.html?hotel=${hotelId}&price=${hotel.price}`;
    });
});

function changeImage(src) {
    document.getElementById('mainImage').src = src;
} 