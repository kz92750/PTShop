// Products page - filtering, search, cart integration
const API_BASE = 'http://localhost:5000/api'; // Update to your API URL

// Sample mock data (will be replaced by API calls)
const mockProducts = [
	{
		id: 1,
		name: 'Przykładowy tuning',
		category: 'suspension',
		price: 349,
		originalPrice: 449,
		description: 'Część do zawieszenia, wysoka jakość',
		image: 'https://via.placeholder.com/300x200?text=Tuning+Part',
		badge: 'Promocja'
	},
	{
		id: 2,
		name: 'Spoiler przedni',
		category: 'styling',
		price: 599,
		description: 'Element stylizacyjny, czarny mat',
		image: 'https://via.placeholder.com/300x200?text=Styling',
		badge: null
	},
	{
		id: 3,
		name: 'Tłumik sportowy',
		category: 'exhaust',
		price: 899,
		originalPrice: 1299,
		description: 'Wydech o agresywnym brzmieniu',
		image: 'https://via.placeholder.com/300x200?text=Exhaust',
		badge: '-30%'
	}
];

let currentFilters = {
	category: null,
	searchQuery: '',
	priceMin: 0,
	priceMax: Infinity,
	page: 1
};

// Initialize on load
document.addEventListener('DOMContentLoaded', function() {
	setupEventListeners();
	loadProducts();
});

function setupEventListeners() {
	// Category filters
	document.querySelectorAll('.category-filter').forEach(checkbox => {
		checkbox.addEventListener('change', handleCategoryFilter);
	});

	// Price filters
	document.getElementById('applyFilters').addEventListener('click', applyFilters);

	// Search
	const searchInput = document.getElementById('searchInput');
	let searchTimeout;
	searchInput.addEventListener('input', function() {
		clearTimeout(searchTimeout);
		searchTimeout = setTimeout(() => {
			currentFilters.searchQuery = this.value.toLowerCase();
			currentFilters.page = 1;
			loadProducts();
		}, 300); // Debounce search
	});
}

function handleCategoryFilter(e) {
	const allCheckbox = document.getElementById('cat-all');
	const otherCheckboxes = document.querySelectorAll('.category-filter:not(#cat-all)');

	if (e.target.id === 'cat-all') {
		// If "all" is checked, uncheck others
		otherCheckboxes.forEach(cb => cb.checked = false);
		currentFilters.category = null;
	} else {
		// If any category is checked, uncheck "all"
		allCheckbox.checked = false;
		// Get first checked category
		const checkedCategory = document.querySelector('.category-filter:not(#cat-all):checked');
		currentFilters.category = checkedCategory ? checkedCategory.value : null;
	}
}

function applyFilters() {
	currentFilters.priceMin = parseFloat(document.getElementById('priceMin').value) || 0;
	currentFilters.priceMax = parseFloat(document.getElementById('priceMax').value) || Infinity;
	currentFilters.page = 1;
	loadProducts();
}

function loadProducts() {
	// Mock: filter local data instead of calling API
	let filtered = mockProducts.filter(product => {
		const matchCategory = !currentFilters.category || product.category === currentFilters.category;
		const matchSearch = !currentFilters.searchQuery || 
			product.name.toLowerCase().includes(currentFilters.searchQuery) ||
			product.description.toLowerCase().includes(currentFilters.searchQuery);
		const matchPrice = product.price >= currentFilters.priceMin && product.price <= currentFilters.priceMax;
		return matchCategory && matchSearch && matchPrice;
	});

	// Render products
	const container = document.getElementById('productsContainer');
	container.innerHTML = filtered.length ? '' : '<div class="col-12"><p class="text-center text-secondary">Brak produktów spełniających kryteria.</p></div>';

	filtered.forEach(product => {
		const card = createProductCard(product);
		container.appendChild(card);
	});
}

function createProductCard(product) {
	const col = document.createElement('div');
	col.className = 'col-md-6 col-xl-4';

	const priceHtml = product.originalPrice ? 
		`<span class="h5 mb-0 fw-bold">${product.price} zł</span>
		 <span class="text-secondary text-decoration-line-through ms-2 small">${product.originalPrice} zł</span>` :
		`<span class="h5 mb-0 fw-bold">${product.price} zł</span>`;

	const badgeHtml = product.badge ? 
		`<div class="product-badge ${product.price <= 500 ? '' : 'bg-danger'}">${product.badge}</div>` : '';

	col.innerHTML = `
		<div class="card h-100 shadow-sm border-0 product-card">
			<div class="product-image-wrapper bg-light position-relative overflow-hidden">
				<img src="${product.image}" alt="${product.name}" class="card-img-top">
				${badgeHtml}
			</div>
			<div class="card-body d-flex flex-column">
				<h6 class="card-title fw-semibold mb-2">${product.name}</h6>
				<p class="text-secondary text-sm mb-3">${product.description}</p>
				<div class="d-flex justify-content-between align-items-center mt-auto">
					<div>${priceHtml}</div>
					<button class="btn btn-sm btn-primary" onclick="addToCart(${product.id})">+</button>
				</div>
			</div>
		</div>
	`;

	return col;
}

function addToCart(productId) {
	const product = mockProducts.find(p => p.id === productId);
	if (!product) return;

	console.log('Added to cart:', product.name);
	alert(`${product.name} dodany do koszyka`); // Placeholder

	// TODO: call API/cart endpoint or update session
	// fetch(`${API_BASE}/cart/add`, {
	//   method: 'POST',
	//   headers: { 'Content-Type': 'application/json' },
	//   body: JSON.stringify({ product_id: productId, qty: 1 })
	// }).then(r => r.json()).then(data => { ... });
}
