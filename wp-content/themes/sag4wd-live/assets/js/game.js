/**
 * SAG4WD Live Theme - Interactive Game/Gallery Module
 * 
 * This module handles interactive elements for the garage page,
 * including dynamic vehicle showcases and interactive features.
 */

(function($) {
    'use strict';

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initGarageGame();
        initPartsCatalog();
        initVehicleCards();
    });

    /**
     * Initialize Garage Game/Interactive Module
     */
    function initGarageGame() {
        const gameContainer = document.getElementById('garage-game-container');
        
        if (!gameContainer) {
            return;
        }

        // Clear loading message
        gameContainer.innerHTML = '';

        // Create game interface
        const gameHTML = `
            <div class="garage-game">
                <div class="game-header">
                    <h3>Explore Our 4x4 Builds</h3>
                    <p>Click on vehicles to see detailed modifications</p>
                </div>
                <div class="game-canvas">
                    <div class="vehicle-showcase">
                        <div class="showcase-item" data-vehicle="land-cruiser">
                            <div class="showcase-icon">🚙</div>
                            <h4>Land Cruiser</h4>
                        </div>
                        <div class="showcase-item" data-vehicle="patrol">
                            <div class="showcase-icon">🚗</div>
                            <h4>Patrol</h4>
                        </div>
                        <div class="showcase-item" data-vehicle="jeep">
                            <div class="showcase-icon">🚐</div>
                            <h4>Jeep Wrangler</h4>
                        </div>
                        <div class="showcase-item" data-vehicle="hilux">
                            <div class="showcase-icon">🛻</div>
                            <h4>Hilux</h4>
                        </div>
                    </div>
                </div>
                <div class="game-info">
                    <p>Select a vehicle to view build details</p>
                </div>
            </div>
        `;

        gameContainer.innerHTML = gameHTML;

        // Add event listeners
        const showcaseItems = gameContainer.querySelectorAll('.showcase-item');
        showcaseItems.forEach(item => {
            item.addEventListener('click', function() {
                const vehicle = this.dataset.vehicle;
                showVehicleDetails(vehicle, gameContainer);
            });
        });
    }

    /**
     * Show vehicle details when clicked
     */
    function showVehicleDetails(vehicle, container) {
        const infoDiv = container.querySelector('.game-info');
        
        const vehicleData = {
            'land-cruiser': {
                name: 'Toyota Land Cruiser 200',
                mods: ['3" Lift Kit', 'Steel Front Bumper', 'LED Light Bar', 'Snorkel', '35" All-Terrain Tires']
            },
            'patrol': {
                name: 'Nissan Patrol Y62',
                mods: ['2.5" Suspension Lift', 'Rock Sliders', 'Dual Battery System', 'Roof Rack', 'Recovery Points']
            },
            'jeep': {
                name: 'Jeep Wrangler JL',
                mods: ['4" Lift Kit', 'Fox Shocks', 'Steel Bumpers', '37" Mud Tires', 'Winch']
            },
            'hilux': {
                name: 'Toyota Hilux',
                mods: ['Sport Bar', 'LED Light Bar', 'Snorkel', 'Side Steps', 'Tonneau Cover']
            }
        };

        const data = vehicleData[vehicle] || { name: 'Unknown Vehicle', mods: [] };
        
        infoDiv.innerHTML = `
            <div class="vehicle-details">
                <h4>${data.name}</h4>
                <ul class="mods-list">
                    ${data.mods.map(mod => `<li>${mod}</li>`).join('')}
                </ul>
            </div>
        `;
    }

    /**
     * Initialize Parts Catalog interactions
     */
    function initPartsCatalog() {
        const partCards = document.querySelectorAll('.part-card');
        
        partCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    }

    /**
     * Initialize Vehicle Cards with hover effects
     */
    function initVehicleCards() {
        const vehicleCards = document.querySelectorAll('.vehicle-card');
        
        vehicleCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    }

    /**
     * Image lazy loading for better performance
     */
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    observer.unobserve(img);
                }
            });
        });

        const lazyImages = document.querySelectorAll('img.lazy');
        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // Export functions for potential external use
    window.SAG4WD = {
        initGarageGame: initGarageGame,
        initPartsCatalog: initPartsCatalog,
        initVehicleCards: initVehicleCards
    };

})(window.jQuery || function() { 
    // Fallback if jQuery is not loaded
    return {
        ready: function(fn) { 
            if (document.readyState !== 'loading') {
                fn();
            } else {
                document.addEventListener('DOMContentLoaded', fn);
            }
        }
    };
});

// Additional CSS for game elements (will be injected)
const gameStyles = `
.garage-game {
    padding: 2rem;
}

.game-header {
    margin-bottom: 2rem;
}

.game-header h3 {
    margin-bottom: 0.5rem;
    color: #c7923e;
}

.game-canvas {
    margin-bottom: 2rem;
}

.vehicle-showcase {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
}

.showcase-item {
    background: #1b1d21;
    border: 2px solid #1e2126;
    border-radius: 10px;
    padding: 2rem 1rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.showcase-item:hover {
    border-color: #c7923e;
    transform: scale(1.05);
}

.showcase-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.showcase-item h4 {
    margin: 0;
    font-size: 1rem;
}

.game-info {
    min-height: 100px;
    padding: 1.5rem;
    background: #1b1d21;
    border-radius: 10px;
}

.vehicle-details h4 {
    margin-bottom: 1rem;
    color: #c7923e;
}

.mods-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mods-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #1e2126;
}

.mods-list li:last-child {
    border-bottom: none;
}

.mods-list li:before {
    content: "✓ ";
    color: #c7923e;
    font-weight: bold;
    margin-right: 0.5rem;
}
`;

// Inject styles
if (typeof document !== 'undefined') {
    const styleElement = document.createElement('style');
    styleElement.textContent = gameStyles;
    document.head.appendChild(styleElement);
}
