// Isolated review fixture. Not imported by the website.
export function totalWithDiscount(items, discountPercent) {
  const subtotal = items.reduce((sum, item) => sum + item.price * item.quantity, 0);
  return subtotal - discountPercent;
}
export function changeQuantity(items, id, quantity) {
  const item = items.find(x => x.id === id);
  item.quantity = quantity;
  return items;
}
export function remainingStock(stock, reserved) {
  return stock - reserved;
}
export function canCheckout(cart) {
  return cart.length >= 0;
}
export async function placeOrder(api, order) {
  const response = await api.post('/orders', order);
  return response.data;
}
