/**
 * SAG4WD Live Theme - Interactive Game/Gallery Module
 * 
 * This module handles interactive elements for the garage page,
 * including dynamic vehicle showcases and interactive features.
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initMegaMenu();
        initGarageGame();
        initPartsCatalog();
        initVehicleCards();
    });

    /**
     * Initialize Mega Menu functionality
     */
    function initMegaMenu() {
        // Mobile menu toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navigation = document.querySelector('.main-navigation');
        
        if (menuToggle && navigation) {
            menuToggle.addEventListener('click', function() {
                navigation.classList.toggle('toggled');
                this.setAttribute('aria-expanded', 
                    this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
                );
            });
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (navigation && !navigation.contains(event.target) && !menuToggle.contains(event.target)) {
                navigation.classList.remove('toggled');
                if (menuToggle) {
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            }
        });

        // Add touch support for mobile submenus
        const menuItems = document.querySelectorAll('.primary-menu .menu-item-has-children > a');
        menuItems.forEach(function(item) {
            item.addEventListener('touchstart', function(e) {
                const parent = this.parentElement;
                if (!parent.classList.contains('touch-open')) {
                    e.preventDefault();
                    // Close other open menus
                    document.querySelectorAll('.primary-menu .touch-open').forEach(function(el) {
                        if (el !== parent) el.classList.remove('touch-open');
                    });
                    parent.classList.add('touch-open');
                }
            });
        });
    }

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
        initMegaMenu: initMegaMenu,
        initGarageGame: initGarageGame,
        initPartsCatalog: initPartsCatalog,
        initVehicleCards: initVehicleCards
    };

})();
