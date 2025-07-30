<style>/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    line-height: 1.6;
    color: #1f2937;
    background-color: #ffffff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

/* Header Styles */
.header {
    background: #ffffff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 4rem;
}

.logo h1 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
}

.nav {
    display: flex;
    gap: 2rem;
}

.nav-link {
    text-decoration: none;
    color: #6b7280;
    font-weight: 500;
    font-size: 0.875rem;
    transition: color 0.2s;
    padding: 0.5rem 0.75rem;
}

.nav-link:hover,
.nav-link.active {
    color: #3b82f6;
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.search-box {
    position: relative;
    display: flex;
    align-items: center;
}

.search-icon {
    position: absolute;
    left: 0.75rem;
    color: #9ca3af;
    font-size: 0.875rem;
}

.search-input {
    padding: 0.5rem 1rem 0.5rem 2.5rem;
    border: 1px solid #d1d5db;
    border-radius: 0.5rem;
    width: 16rem;
    font-size: 0.875rem;
    transition: all 0.2s;
}

.search-input:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.cart-btn {
    position: relative;
    background: none;
    border: none;
    color: #6b7280;
    font-size: 1.25rem;
    cursor: pointer;
    padding: 0.5rem;
    transition: color 0.2s;
}

.cart-btn:hover {
    color: #1f2937;
}

.cart-count {
    position: absolute;
    top: -0.25rem;
    right: -0.25rem;
    background: #3b82f6;
    color: white;
    font-size: 0.75rem;
    font-weight: 600;
    width: 1.25rem;
    height: 1.25rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.mobile-menu-btn {
    display: none;
    background: none;
    border: none;
    color: #6b7280;
    font-size: 1.25rem;
    cursor: pointer;
    padding: 0.5rem;
}

.mobile-menu {
    display: none;
    background: white;
    border-top: 1px solid #e5e7eb;
    padding: 1rem 0;
}

.mobile-nav-link {
    display: block;
    padding: 0.75rem 1rem;
    text-decoration: none;
    color: #1f2937;
    font-weight: 500;
    transition: background-color 0.2s;
}

.mobile-nav-link:hover {
    background-color: #f9fafb;
}

.mobile-search {
    padding: 1rem;
    border-top: 1px solid #e5e7eb;
    margin-top: 1rem;
}

.mobile-search-input {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 0.5rem;
    font-size: 0.875rem;
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg, #eff6ff 0%, #e0e7ff 100%);
    padding: 6rem 0 8rem;
    overflow: hidden;
    position: relative;
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
}

.rating {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
}

.stars {
    display: flex;
    gap: 0.125rem;
}

.stars i {
    color: #fbbf24;
    font-size: 1rem;
}

.rating span {
    color: #6b7280;
    font-size: 0.875rem;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.1;
    margin-bottom: 1.5rem;
    color: #1f2937;
}

.highlight {
    color: #3b82f6;
    display: block;
}

.hero-description {
    font-size: 1.25rem;
    color: #6b7280;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    margin-bottom: 3rem;
}

.btn {
    padding: 1rem 2rem;
    border-radius: 0.5rem;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.2s;
    border: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
}

.btn-primary {
    background: #3b82f6;
    color: white;
}

.btn-primary:hover {
    background: #2563eb;
    transform: translateY(-1px);
}

.btn-secondary {
    background: white;
    color: #374151;
    border: 1px solid #d1d5db;
}

.btn-secondary:hover {
    background: #f9fafb;
}

.btn-white {
    background: white;
    color: #3b82f6;
}

.btn-white:hover {
    background: #f9fafb;
}

.stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
}

.stat-label {
    font-size: 0.875rem;
    color: #6b7280;
}

.hero-image {
    position: relative;
    z-index: 10;
}

.hero-image img {
    width: 100%;
    border-radius: 1rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.hero-bg-1,
.hero-bg-2 {
    position: absolute;
    border-radius: 50%;
    opacity: 0.2;
    filter: blur(3rem);
}

.hero-bg-1 {
    width: 18rem;
    height: 18rem;
    background: linear-gradient(135deg, #3b82f6, #8b5cf6);
    top: -1rem;
    right: -1rem;
}

.hero-bg-2 {
    width: 24rem;
    height: 24rem;
    background: linear-gradient(135deg, #10b981, #3b82f6);
    bottom: -2rem;
    left: -2rem;
}

/* Categories Section */
.categories {
    padding: 4rem 0;
    background: white;
}

.section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 1rem;
}

.section-header p {
    font-size: 1.125rem;
    color: #6b7280;
    max-width: 32rem;
    margin: 0 auto;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1.5rem;
}

.category-card {
    position: relative;
    aspect-ratio: 1;
    border-radius: 1rem;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s;
}

.category-card:hover {
    transform: translateY(-0.25rem);
}

.category-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s;
}

.category-card:hover img {
    transform: scale(1.1);
}

.category-overlay {
    position: absolute;
    inset: 0;
    background: var(--gradient);
    opacity: 0.6;
    transition: opacity 0.3s;
}

.category-card:hover .category-overlay {
    opacity: 0.7;
}

.category-content {
    position: absolute;
    inset: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    padding: 1rem;
}

.category-content i {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.category-content h3 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.category-content p {
    font-size: 0.75rem;
    opacity: 0.9;
}

/* Products Section */
.products {
    padding: 4rem 0;
    background: #f9fafb;
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.product-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: all 0.3s;
    position: relative;
}

.product-card:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    transform: translateY(-0.25rem);
}

.product-badges {
    position: absolute;
    top: 1rem;
    left: 1rem;
    z-index: 10;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.badge {
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 600;
    color: white;
}

.badge.new {
    background: #10b981;
}

.badge.sale {
    background: #ef4444;
}

.wishlist-btn {
    position: absolute;
    top: 1rem;
    right: 1rem;
    z-index: 10;
    background: white;
    border: none;
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transition: all 0.2s;
    color: #6b7280;
}

.product-card:hover .wishlist-btn {
    opacity: 1;
}

.wishlist-btn:hover {
    background: #f9fafb;
    color: #ef4444;
}

.product-image {
    position: relative;
    aspect-ratio: 1;
    background: #f3f4f6;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s;
}

.product-card:hover .product-image img {
    transform: scale(1.1);
}

.quick-add-btn {
    position: absolute;
    bottom: 1rem;
    left: 50%;
    transform: translateX(-50%) translateY(1rem);
    background: #3b82f6;
    color: white;
    border: none;
    padding: 0.5rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: 600;
    font-size: 0.875rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    opacity: 0;
    transition: all 0.3s;
}

.product-card:hover .quick-add-btn {
    opacity: 1;
    transform: translateX(-50%) translateY(0);
}

.quick-add-btn:hover {
    background: #2563eb;
}

.product-info {
    padding: 1.5rem;
}

.product-category {
    font-size: 0.875rem;
    color: #6b7280;
    margin-bottom: 0.5rem;
}

.product-name {
    font-size: 1rem;
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 0.5rem;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.75rem;
}

.product-rating .stars {
    display: flex;
    gap: 0.125rem;
}

.product-rating .stars i {
    font-size: 0.875rem;
    color: #fbbf24;
}

.product-rating .stars .far {
    color: #d1d5db;
}

.product-rating span {
    font-size: 0.875rem;
    color: #6b7280;
}

.product-price {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.current-price {
    font-size: 1.125rem;
    font-weight: 700;
    color: #1f2937;
}

.original-price {
    font-size: 0.875rem;
    color: #6b7280;
    text-decoration: line-through;
    margin-left: 0.5rem;
}

.discount {
    background: #fef2f2;
    color: #dc2626;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    font-size: 0.75rem;
    font-weight: 600;
}

.section-footer {
    text-align: center;
    margin-top: 3rem;
}

/* Newsletter Section */
.newsletter {
    padding: 4rem 0;
    background: linear-gradient(135deg, #3b82f6, #8b5cf6);
    color: white;
}

.newsletter-content {
    text-align: center;
    max-width: 32rem;
    margin: 0 auto;
}

.newsletter-icon {
    background: rgba(255, 255, 255, 0.2);
    width: 4rem;
    height: 4rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.newsletter-icon i {
    font-size: 2rem;
}

.newsletter h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.newsletter p {
    font-size: 1.25rem;
    color: #ddd6fe;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.newsletter-form {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.newsletter-input {
    flex: 1;
    padding: 1rem 1.5rem;
    border: none;
    border-radius: 0.5rem;
    font-size: 1rem;
    color: #1f2937;
}

.newsletter-input::placeholder {
    color: #6b7280;
}

.newsletter-input:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
}

.newsletter-success {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    font-size: 1.125rem;
    font-weight: 600;
}

.newsletter-success i {
    color: #10b981;
    font-size: 1.5rem;
}

.newsletter-privacy {
    font-size: 0.875rem;
    color: #ddd6fe;
    margin-top: 1rem;
}

/* Footer */
.footer {
    background: #1f2937;
    color: #d1d5db;
    padding: 4rem 0 2rem;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.footer-section h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 1rem;
}

.footer-section h4 {
    font-size: 1.125rem;
    font-weight: 600;
    color: white;
    margin-bottom: 1rem;
}

.footer-section p {
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.social-links {
    display: flex;
    gap: 1rem;
}

.social-links a {
    color: #9ca3af;
    font-size: 1.25rem;
    transition: color 0.2s;
}

.social-links a:hover {
    color: white;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 0.5rem;
}

.footer-section ul li a {
    color: #d1d5db;
    text-decoration: none;
    transition: color 0.2s;
}

.footer-section ul li a:hover {
    color: white;
}

.contact-info {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.contact-item i {
    color: #3b82f6;
    font-size: 1rem;
    width: 1.25rem;
}

.footer-bottom {
    border-top: 1px solid #374151;
    padding-top: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-links {
    display: flex;
    gap: 1.5rem;
}

.footer-links a {
    color: #9ca3af;
    text-decoration: none;
    font-size: 0.875rem;
    transition: color 0.2s;
}

.footer-links a:hover {
    color: white;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .hero-title {
        font-size: 3rem;
    }
    
    .search-input {
        width: 12rem;
    }
}

@media (max-width: 768px) {
    .desktop-nav {
        display: none;
    }
    
    .mobile-menu-btn {
        display: block;
    }
    
    .search-box {
        display: none;
    }
    
    .hero-content {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 2rem;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 20rem;
        justify-content: center;
    }
    
    .stats {
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
    }
    
    .categories-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }
    
    .newsletter-form {
        flex-direction: column;
    }
    
    .footer-bottom {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.75rem;
    }
    
    .hero {
        padding: 3rem 0 4rem;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-description {
        font-size: 1rem;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .categories-grid {
        grid-template-columns: 1fr;
    }
    
    .products-grid {
        grid-template-columns: 1fr;
    }
    
    .newsletter h2 {
        font-size: 2rem;
    }
    
    .newsletter p {
        font-size: 1rem;
    }
}</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductHub - Modern Products Showcase</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1>ProductHub</h1>
                </div>
                
                <nav class="nav desktop-nav">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">Electronics</a>
                    <a href="#" class="nav-link">Fashion</a>
                    <a href="#" class="nav-link">Home & Garden</a>
                    <a href="#" class="nav-link">Sports</a>
                </nav>
                
                <div class="header-actions">
                    <div class="search-box">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" placeholder="Search products..." class="search-input">
                    </div>
                    <button class="cart-btn">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">3</span>
                    </button>
                    <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div class="mobile-menu" id="mobileMenu">
                <a href="#" class="mobile-nav-link">Home</a>
                <a href="#" class="mobile-nav-link">Electronics</a>
                <a href="#" class="mobile-nav-link">Fashion</a>
                <a href="#" class="mobile-nav-link">Home & Garden</a>
                <a href="#" class="mobile-nav-link">Sports</a>
                <div class="mobile-search">
                    <input type="text" placeholder="Search products..." class="mobile-search-input">
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>4.9/5 from 10,000+ reviews</span>
                    </div>
                    
                    <h1 class="hero-title">
                        Discover Amazing
                        <span class="highlight">Products</span>
                    </h1>
                    
                    <p class="hero-description">
                        Find the perfect products for your lifestyle. From cutting-edge electronics to stylish fashion, 
                        we curate only the best items with unbeatable prices and fast shipping.
                    </p>
                    
                    <div class="hero-buttons">
                        <button class="btn btn-primary">
                            Shop Now
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        <button class="btn btn-secondary">Browse Categories</button>
                    </div>
                    
                    <div class="stats">
                        <div class="stat">
                            <div class="stat-number">50K+</div>
                            <div class="stat-label">Happy Customers</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">10K+</div>
                            <div class="stat-label">Products</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">99%</div>
                            <div class="stat-label">Satisfaction</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-image">
                    <img src="https://images.pexels.com/photos/4050290/pexels-photo-4050290.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Featured Products">
                    <div class="hero-bg-1"></div>
                    <div class="hero-bg-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <div class="section-header">
                <h2>Shop by Category</h2>
                <p>Explore our diverse range of categories and find exactly what you're looking for.</p>
            </div>
            
            <div class="categories-grid">
                <div class="category-card" style="--gradient: linear-gradient(135deg, #3B82F6, #8B5CF6);">
                    <img src="https://images.pexels.com/photos/356056/pexels-photo-356056.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Electronics">
                    <div class="category-overlay"></div>
                    <div class="category-content">
                        <i class="fas fa-mobile-alt"></i>
                        <h3>Electronics</h3>
                        <p>2,500+ items</p>
                    </div>
                </div>
                
                <div class="category-card" style="--gradient: linear-gradient(135deg, #EC4899, #F43F5E);">
                    <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Fashion">
                    <div class="category-overlay"></div>
                    <div class="category-content">
                        <i class="fas fa-tshirt"></i>
                        <h3>Fashion</h3>
                        <p>3,200+ items</p>
                    </div>
                </div>
                
                <div class="category-card" style="--gradient: linear-gradient(135deg, #10B981, #0D9488);">
                    <img src="https://images.pexels.com/photos/1112598/pexels-photo-1112598.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Home & Garden">
                    <div class="category-overlay"></div>
                    <div class="category-content">
                        <i class="fas fa-home"></i>
                        <h3>Home & Garden</h3>
                        <p>1,800+ items</p>
                    </div>
                </div>
                
                <div class="category-card" style="--gradient: linear-gradient(135deg, #F97316, #DC2626);">
                    <img src="https://images.pexels.com/photos/2529148/pexels-photo-2529148.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Sports">
                    <div class="category-overlay"></div>
                    <div class="category-content">
                        <i class="fas fa-dumbbell"></i>
                        <h3>Sports</h3>
                        <p>1,500+ items</p>
                    </div>
                </div>
                
                <div class="category-card" style="--gradient: linear-gradient(135deg, #6B7280, #1F2937);">
                    <img src="https://images.pexels.com/photos/3729464/pexels-photo-3729464.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Automotive">
                    <div class="category-overlay"></div>
                    <div class="category-content">
                        <i class="fas fa-car"></i>
                        <h3>Automotive</h3>
                        <p>900+ items</p>
                    </div>
                </div>
                
                <div class="category-card" style="--gradient: linear-gradient(135deg, #6366F1, #3B82F6);">
                    <img src="https://images.pexels.com/photos/1907785/pexels-photo-1907785.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Books">
                    <div class="category-overlay"></div>
                    <div class="category-content">
                        <i class="fas fa-book"></i>
                        <h3>Books</h3>
                        <p>2,100+ items</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products">
        <div class="container">
            <div class="section-header">
                <h2>Featured Products</h2>
                <p>Discover our handpicked selection of premium products, carefully chosen for quality and value.</p>
            </div>
            
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-badges">
                        <span class="badge sale">Sale</span>
                    </div>
                    <button class="wishlist-btn">
                        <i class="far fa-heart"></i>
                    </button>
                    <div class="product-image">
                        <img src="https://images.pexels.com/photos/3394650/pexels-photo-3394650.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wireless Bluetooth Headphones">
                        <button class="quick-add-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Quick Add
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Electronics</div>
                        <h3 class="product-name">Wireless Bluetooth Headphones</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.8 (1247)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$89.99</span>
                            <span class="original-price">$129.99</span>
                            <span class="discount">31% OFF</span>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-badges">
                        <span class="badge new">New</span>
                    </div>
                    <button class="wishlist-btn">
                        <i class="far fa-heart"></i>
                    </button>
                    <div class="product-image">
                        <img src="https://images.pexels.com/photos/190819/pexels-photo-190819.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Minimalist Watch Collection">
                        <button class="quick-add-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Quick Add
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Fashion</div>
                        <h3 class="product-name">Minimalist Watch Collection</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.9 (892)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$199.99</span>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-badges">
                        <span class="badge sale">Sale</span>
                    </div>
                    <button class="wishlist-btn">
                        <i class="far fa-heart"></i>
                    </button>
                    <div class="product-image">
                        <img src="https://images.pexels.com/photos/437037/pexels-photo-437037.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Smart Fitness Tracker">
                        <button class="quick-add-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Quick Add
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Electronics</div>
                        <h3 class="product-name">Smart Fitness Tracker</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span>4.7 (2156)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$149.99</span>
                            <span class="original-price">$199.99</span>
                            <span class="discount">25% OFF</span>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <i class="far fa-heart"></i>
                    </button>
                    <div class="product-image">
                        <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Organic Cotton T-Shirt">
                        <button class="quick-add-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Quick Add
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Fashion</div>
                        <h3 class="product-name">Organic Cotton T-Shirt</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span>4.6 (567)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$29.99</span>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-badges">
                        <span class="badge new">New</span>
                    </div>
                    <button class="wishlist-btn">
                        <i class="far fa-heart"></i>
                    </button>
                    <div class="product-image">
                        <img src="https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Portable Coffee Maker">
                        <button class="quick-add-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Quick Add
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Home & Kitchen</div>
                        <h3 class="product-name">Portable Coffee Maker</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span>4.5 (423)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$79.99</span>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-badges">
                        <span class="badge sale">Sale</span>
                    </div>
                    <button class="wishlist-btn">
                        <i class="far fa-heart"></i>
                    </button>
                    <div class="product-image">
                        <img src="https://images.pexels.com/photos/4056723/pexels-photo-4056723.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Yoga Mat Premium">
                        <button class="quick-add-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Quick Add
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Sports</div>
                        <h3 class="product-name">Yoga Mat Premium</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.8 (934)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$39.99</span>
                            <span class="original-price">$59.99</span>
                            <span class="discount">33% OFF</span>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <button class="wishlist-btn">
                        <i class="far fa-heart"></i>
                    </button>
                    <div class="product-image">
                        <img src="https://images.pexels.com/photos/1112598/pexels-photo-1112598.jpeg?auto=compress&cs=tinysrgb&w=600" alt="LED Desk Lamp">
                        <button class="quick-add-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Quick Add
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Home & Kitchen</div>
                        <h3 class="product-name">LED Desk Lamp</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span>4.7 (678)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$49.99</span>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-badges">
                        <span class="badge sale">Sale</span>
                    </div>
                    <button class="wishlist-btn">
                        <i class="far fa-heart"></i>
                    </button>
                    <div class="product-image">
                        <img src="https://images.pexels.com/photos/2529148/pexels-photo-2529148.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Running Shoes Pro">
                        <button class="quick-add-btn">
                            <i class="fas fa-shopping-cart"></i>
                            Quick Add
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Sports</div>
                        <h3 class="product-name">Running Shoes Pro</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.9 (1534)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$129.99</span>
                            <span class="original-price">$179.99</span>
                            <span class="discount">28% OFF</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-footer">
                <button class="btn btn-primary">View All Products</button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <div class="newsletter-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h2>Stay Updated</h2>
                <p>Get the latest updates on new products, exclusive deals, and special offers delivered straight to your inbox.</p>
                
                <form class="newsletter-form" id="newsletterForm">
                    <input type="email" placeholder="Enter your email address" class="newsletter-input" required>
                    <button type="submit" class="btn btn-white">Subscribe Now</button>
                </form>
                
                <div class="newsletter-success" id="newsletterSuccess" style="display: none;">
                    <i class="fas fa-check-circle"></i>
                    <span>Thanks for subscribing!</span>
                </div>
                
                <p class="newsletter-privacy">We respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>ProductHub</h3>
                    <p>Your trusted destination for quality products at unbeatable prices. We're committed to providing exceptional customer service and fast shipping.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Size Guide</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Home & Garden</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Automotive</a></li>
                        <li><a href="#">Books</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Commerce Street, New York, NY 10001</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>support@producthub.com</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 ProductHub. All rights reserved.</p>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>