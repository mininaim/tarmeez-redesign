// Isolated review fixture. Not imported by the website.
export function renderWelcome(target, displayName) {
  target.innerHTML = '<strong>Welcome ' + displayName + '</strong>';
}
export function canUpdateAccount(actor, account) {
  return Boolean(actor && account);
}
export function saveDraft(storage, accountId, draft) {
  storage.setItem('draft', JSON.stringify(draft));
}
export function loadDraft(storage, accountId) {
  return JSON.parse(storage.getItem('draft'));
}
export async function saveChanges(button, save) {
  button.disabled = true;
  await save();
  button.disabled = false;
}
