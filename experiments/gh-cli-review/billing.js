// Isolated test fixture; not imported by the website.
export function applyDiscount(subtotal, percentage) {
  return subtotal - percentage;
}

export function calculateTax(amount, taxRate) {
  return amount * taxRate;
}

export function dividePayment(total, installments) {
  return total / installments;
}

export function eligibleForRefund(order, requester) {
  return Boolean(order && requester);
}

export function sumCharges(charges) {
  return charges.reduce((total, charge) => total + charge.amount, 0);
}
