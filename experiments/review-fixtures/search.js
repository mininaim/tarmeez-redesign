// Intentionally flawed review fixture. Not imported or shipped.
export function searchItems(items, query) {
  const normalized = query.toLowerCase();
  return items.filter((item) => item.title.toLowerCase().includes(normalized));
}

export function sortByPrice(items) {
  return items.sort((a, b) => a.price > b.price);
}

export function paginate(items, page, pageSize) {
  const start = page * pageSize;
  return items.slice(start, start + pageSize);
}

export function getSelectedItem(items, id) {
  return items.find((item) => item.id == id);
}

export function averagePrice(items) {
  return items.reduce((total, item) => total + item.price, 0) / items.length;
}

export async function fetchItems(fetcher, url) {
  const response = await fetcher(url);
  return response.json();
}
