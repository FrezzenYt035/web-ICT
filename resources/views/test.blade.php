<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard E-Commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .cart-slide { transform: translateX(100%); transition: transform 0.3s ease-in-out; }
        .cart-slide.open { transform: translateX(0); }
        .banner-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .product-hover { transition: all 0.3s ease; }
        .product-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">🛍️ ShopDash</h1>
                </div>
                
                <div class="flex-1 max-w-lg mx-8">
                    <div class="relative">
                        <input type="text" placeholder="Cari produk..." 
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="relative p-2 text-gray-600 hover:text-gray-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5-5-5h5v-12"></path>
                        </svg>
                    </button>
                    
                    <button onclick="toggleCart()" class="relative p-2 text-gray-600 hover:text-gray-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        <span id="cartCount" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                    </button>
                    
                    <div class="flex items-center space-x-2">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='16' fill='%234F46E5'/%3E%3Ctext x='16' y='20' text-anchor='middle' fill='white' font-size='14' font-weight='bold'%3EU%3C/text%3E%3C/svg%3E" 
                             alt="User" class="h-8 w-8 rounded-full">
                        <span class="text-sm font-medium text-gray-700">User</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Banner -->
    <section class="banner-gradient text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold mb-4">Diskon Besar-Besaran!</h2>
                <p class="text-xl mb-8 opacity-90">Hemat hingga 70% untuk semua kategori produk</p>
                <button class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                    Belanja Sekarang
                </button>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-8">Kategori Populer</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <div class="text-center group cursor-pointer">
                    <div class="bg-blue-100 rounded-full p-6 mb-3 group-hover:bg-blue-200 transition duration-300">
                        <span class="text-3xl">📱</span>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Elektronik</p>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="bg-green-100 rounded-full p-6 mb-3 group-hover:bg-green-200 transition duration-300">
                        <span class="text-3xl">👕</span>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Fashion</p>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="bg-yellow-100 rounded-full p-6 mb-3 group-hover:bg-yellow-200 transition duration-300">
                        <span class="text-3xl">🏠</span>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Rumah</p>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="bg-pink-100 rounded-full p-6 mb-3 group-hover:bg-pink-200 transition duration-300">
                        <span class="text-3xl">💄</span>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Kecantikan</p>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="bg-purple-100 rounded-full p-6 mb-3 group-hover:bg-purple-200 transition duration-300">
                        <span class="text-3xl">📚</span>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Buku</p>
                </div>
                <div class="text-center group cursor-pointer">
                    <div class="bg-red-100 rounded-full p-6 mb-3 group-hover:bg-red-200 transition duration-300">
                        <span class="text-3xl">⚽</span>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Olahraga</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-2xl font-bold text-gray-900">Produk Terlaris</h3>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium">Semua</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-300">Terbaru</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-300">Termurah</button>
                </div>
            </div>
            
            <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Products will be generated by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Cart Sidebar -->
    <div id="cartSidebar" class="fixed inset-y-0 right-0 w-96 bg-white shadow-xl z-50 cart-slide">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-between p-6 border-b">
                <h3 class="text-lg font-semibold text-gray-900">Keranjang Belanja</h3>
                <button onclick="toggleCart()" class="text-gray-400 hover:text-gray-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div id="cartItems" class="flex-1 overflow-y-auto p-6">
                <div class="text-center text-gray-500 mt-20">
                    <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                    </svg>
                    <p>Keranjang Anda kosong</p>
                </div>
            </div>
            
            <div id="cartFooter" class="border-t p-6 hidden">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-lg font-semibold">Total:</span>
                    <span id="cartTotal" class="text-lg font-bold text-blue-600">Rp 0</span>
                </div>
                <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    Checkout
                </button>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden" onclick="toggleCart()"></div>

    <script>
        // Sample products data
        const products = [
            { id: 1, name: "Smartphone Premium", price: 5999000, image: "📱", category: "Elektronik", rating: 4.8 },
            { id: 2, name: "Laptop Gaming", price: 12999000, image: "💻", category: "Elektronik", rating: 4.7 },
            { id: 3, name: "Sepatu Sneakers", price: 899000, image: "👟", category: "Fashion", rating: 4.6 },
            { id: 4, name: "Tas Ransel", price: 299000, image: "🎒", category: "Fashion", rating: 4.5 },
            { id: 5, name: "Headphone Wireless", price: 1299000, image: "🎧", category: "Elektronik", rating: 4.9 },
            { id: 6, name: "Jam Tangan Smart", price: 2499000, image: "⌚", category: "Elektronik", rating: 4.4 },
            { id: 7, name: "Kamera DSLR", price: 8999000, image: "📷", category: "Elektronik", rating: 4.8 },
            { id: 8, name: "Jaket Hoodie", price: 399000, image: "🧥", category: "Fashion", rating: 4.3 }
        ];

        let cart = [];

        // Format currency
        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(amount);
        }

        // Generate stars
        function generateStars(rating) {
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 !== 0;
            let stars = '';
            
            for (let i = 0; i < fullStars; i++) {
                stars += '⭐';
            }
            if (hasHalfStar) {
                stars += '⭐';
            }
            
            return stars;
        }

        // Render products
        function renderProducts() {
            const productGrid = document.getElementById('productGrid');
            productGrid.innerHTML = products.map(product => `
                <div class="bg-white rounded-lg shadow-md overflow-hidden product-hover">
                    <div class="p-6 text-center">
                        <div class="text-6xl mb-4">${product.image}</div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">${product.name}</h4>
                        <p class="text-sm text-gray-600 mb-2">${product.category}</p>
                        <div class="flex justify-center items-center mb-3">
                            <span class="text-sm mr-1">${generateStars(product.rating)}</span>
                            <span class="text-sm text-gray-500">(${product.rating})</span>
                        </div>
                        <p class="text-xl font-bold text-blue-600 mb-4">${formatCurrency(product.price)}</p>
                        <button onclick="addToCart(${product.id})" 
                                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition duration-300">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            `).join('');
        }

        // Add to cart
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ ...product, quantity: 1 });
            }
            
            updateCartUI();
            showNotification('Produk ditambahkan ke keranjang!');
        }

        // Remove from cart
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartUI();
        }

        // Update quantity
        function updateQuantity(productId, change) {
            const item = cart.find(item => item.id === productId);
            if (item) {
                item.quantity += change;
                if (item.quantity <= 0) {
                    removeFromCart(productId);
                } else {
                    updateCartUI();
                }
            }
        }

        // Update cart UI
        function updateCartUI() {
            const cartCount = document.getElementById('cartCount');
            const cartItems = document.getElementById('cartItems');
            const cartFooter = document.getElementById('cartFooter');
            const cartTotal = document.getElementById('cartTotal');
            
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            
            cartCount.textContent = totalItems;
            
            if (cart.length === 0) {
                cartItems.innerHTML = `
                    <div class="text-center text-gray-500 mt-20">
                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        <p>Keranjang Anda kosong</p>
                    </div>
                `;
                cartFooter.classList.add('hidden');
            } else {
                cartItems.innerHTML = cart.map(item => `
                    <div class="flex items-center space-x-4 py-4 border-b">
                        <div class="text-2xl">${item.image}</div>
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-900">${item.name}</h4>
                            <p class="text-sm text-gray-600">${formatCurrency(item.price)}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button onclick="updateQuantity(${item.id}, -1)" 
                                    class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300">
                                <span class="text-sm font-bold">-</span>
                            </button>
                            <span class="w-8 text-center font-medium">${item.quantity}</span>
                            <button onclick="updateQuantity(${item.id}, 1)" 
                                    class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300">
                                <span class="text-sm font-bold">+</span>
                            </button>
                        </div>
                        <button onclick="removeFromCart(${item.id})" 
                                class="text-red-500 hover:text-red-700">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                `).join('');
                cartFooter.classList.remove('hidden');
                cartTotal.textContent = formatCurrency(totalPrice);
            }
        }

        // Toggle cart
        function toggleCart() {
            const cartSidebar = document.getElementById('cartSidebar');
            const cartOverlay = document.getElementById('cartOverlay');
            
            cartSidebar.classList.toggle('open');
            cartOverlay.classList.toggle('hidden');
        }

        // Show notification
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
            }, 100);
            
            setTimeout(() => {
                notification.classList.add('translate-x-full');
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            renderProducts();
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9681a034961efd37',t:'MTc1NDAxMjQwOS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>