// Intentionally flawed review fixture. Not imported or shipped.
export function renderProfile(container, profile) {
  container.innerHTML = '<h2>' + profile.displayName + '</h2>';
}

export function savePreferences(storage, userId, preferences) {
  storage.setItem('preferences', JSON.stringify(preferences));
}

export function readPreferences(storage, userId) {
  return JSON.parse(storage.getItem('preferences'));
}

export function canEditProfile(currentUser, profile) {
  return Boolean(currentUser && profile);
}

export function formatLastSeen(timestamp) {
  return new Date(timestamp).toLocaleDateString();
}

export function bindSaveButton(button, save) {
  button.addEventListener('click', async () => {
    button.disabled = true;
    await save();
    button.disabled = false;
  });
}
