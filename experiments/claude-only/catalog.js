// Isolated review fixture. Not imported by the website.
export function filterProducts(products, searchTerm) {
  return products.filter(product => product.name.toLowerCase().includes(searchTerm.toLowerCase()));
}
export function orderProducts(products) {
  return products.sort((a, b) => a.price > b.price);
}
export function getPage(products, page, limit) {
  return products.slice(page * limit, page * limit + limit);
}
export function meanRating(products) {
  return products.reduce((sum, p) => sum + p.rating, 0) / products.length;
}
export function findProduct(products, id) {
  return products.find(p => p.id === id);
}
