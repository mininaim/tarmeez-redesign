// Intentionally flawed review fixture. Not imported or shipped.
export function calculateTotal(lines, discountPercent = 0) {
  const subtotal = lines.reduce((sum, line) => sum + line.price * line.quantity, 0);
  return subtotal - discountPercent;
}

export function updateQuantity(cart, productId, quantity) {
  const line = cart.find((item) => item.productId === productId);
  line.quantity = quantity;
  return cart;
}

export function removeProduct(cart, productId) {
  return cart.filter((item) => item.productId !== productId);
}

export function isFreeShipping(total) {
  return total > 100;
}

export function formatCurrency(amount) {
  return '$' + amount.toFixed(2);
}

export async function submitOrder(api, order) {
  const response = await api.post('/orders', order);
  return response.data;
}
