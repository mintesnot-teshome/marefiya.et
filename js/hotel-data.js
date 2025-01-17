const hotels = {
    'sheraton-addis': {
        name: 'Sheraton Addis',
        location: 'Taitu Street, Addis Ababa, Ethiopia',
        price: 15000,
        rating: 5,
        description: 'Located in the heart of Ethiopia\'s capital, Sheraton Addis is a luxurious 5-star hotel offering world-class amenities and spectacular city views. The hotel features elegant rooms, multiple dining options, and extensive recreational facilities.',
        images: [
            'sheraton-addis.jpg',
            'sheraton-room.jpg',
            'sheraton-pool.jpg',
            'sheraton-restaurant.jpg'
        ],
        amenities: [
            { icon: '🏊‍♂️', name: 'Swimming Pool' },
            { icon: '🍽️', name: 'Restaurant' },
            { icon: '💆‍♀️', name: 'Spa' },
            { icon: '📶', name: 'Free WiFi' },
            { icon: '🅿️', name: 'Free Parking' },
            { icon: '🏋️‍♂️', name: 'Fitness Center' }
        ],
        rooms: [
            {
                type: 'Deluxe Room',
                description: 'Spacious room with city view',
                price: 15000,
                image: 'sheraton-deluxe.jpg'
            },
            {
                type: 'Executive Suite',
                description: 'Luxury suite with separate living area',
                price: 25000,
                image: 'sheraton-suite.jpg'
            }
        ],
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
        description: 'Hyatt Regency Addis Ababa is ideally located in the heart of the capital city of Ethiopia. The hotel features contemporary guestrooms, four dining options, a bar and coffee lounge.',
        images: [
            'hyatt-addis.jpg',
            'hyatt-room.jpg',
            'hyatt-pool.jpg',
            'hyatt-restaurant.jpg'
        ],
        amenities: [
            { icon: '🏊‍♂️', name: 'Swimming Pool' },
            { icon: '🍽️', name: 'Restaurant' },
            { icon: '📶', name: 'Free WiFi' },
            { icon: '🅿️', name: 'Free Parking' },
            { icon: '🏋️‍♂️', name: 'Fitness Center' }
        ],
        rooms: [
            {
                type: 'Standard Room',
                description: 'Modern room with city view',
                price: 12000,
                image: 'hyatt-standard.jpg'
            },
            {
                type: 'Regency Suite',
                description: 'Spacious suite with living room',
                price: 20000,
                image: 'hyatt-suite.jpg'
            }
        ],
        contact: {
            phone: '+251 11 517 1234',
            email: 'addis.regency@hyatt.com',
            website: 'www.hyatt.com/addis'
        }
    },
    'kuriftu-resort': {
        name: 'Kuriftu Resort',
        location: 'Bahir Dar, Ethiopia',
        price: 8000,
        rating: 4,
        description: 'Kuriftu Resort & Spa is a luxury resort located on the shores of Lake Tana. The resort offers stunning views, traditional architecture, and world-class amenities.',
        images: [
            'kuriftu-resort.jpg',
            'kuriftu-room.jpg',
            'kuriftu-pool.jpg',
            'kuriftu-spa.jpg'
        ],
        amenities: [
            { icon: '🏊‍♂️', name: 'Swimming Pool' },
            { icon: '🍽️', name: 'Restaurant' },
            { icon: '💆‍♀️', name: 'Spa' },
            { icon: '📶', name: 'Free WiFi' },
            { icon: '🅿️', name: 'Free Parking' }
        ],
        rooms: [
            {
                type: 'Lake View Room',
                description: 'Spacious room with lake view',
                price: 8000,
                image: 'kuriftu-lake-view.jpg'
            },
            {
                type: 'Garden Suite',
                description: 'Suite with private garden',
                price: 12000,
                image: 'kuriftu-suite.jpg'
            }
        ],
        contact: {
            phone: '+251 11 618 4444',
            email: 'info@kuriftu.com',
            website: 'www.kuriftu.com'
        }
    },
    'goha-hotel': {
        name: 'Goha Hotel',
        location: 'Gondar, Ethiopia',
        price: 5000,
        rating: 4,
        description: 'Perched on a hill overlooking the historic city of Gondar, Goha Hotel offers comfortable accommodations with panoramic views of the city and its ancient castles.',
        images: [
            'goha-hotel.jpg',
            'goha-room.jpg',
            'goha-restaurant.jpg',
            'goha-view.jpg'
        ],
        amenities: [
            { icon: '🍽️', name: 'Restaurant' },
            { icon: '📶', name: 'Free WiFi' },
            { icon: '🅿️', name: 'Free Parking' },
            { icon: '🌄', name: 'City View' }
        ],
        rooms: [
            {
                type: 'Standard Room',
                description: 'Comfortable room with city view',
                price: 5000,
                image: 'goha-standard.jpg'
            },
            {
                type: 'Deluxe Room',
                description: 'Spacious room with panoramic view',
                price: 7000,
                image: 'goha-deluxe.jpg'
            }
        ],
        contact: {
            phone: '+251 58 111 1111',
            email: 'info@gohahotel.com',
            website: 'www.gohahotel.com'
        }
    }

}; 