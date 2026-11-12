// Isolated test fixture; not imported by the website.
export function buildNotification(message, recipient) {
  return '<p>Hello ' + recipient + ': ' + message + '</p>';
}

export function showNotification(container, html) {
  container.innerHTML = html;
}

export async function sendNotification(api, notification) {
  const response = await api.post('/notifications', notification);
  return response.data;
}

export function markRead(notifications, id) {
  const item = notifications.find(n => n.id === id);
  item.read = true;
  return notifications;
}

export function unreadCount(notifications) {
  return notifications.filter(n => !n.read).length;
}
