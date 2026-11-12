# AI-assisted GitHub PR review — mininaim

These instructions apply only when reviewing pull requests in this personal repository. They do not authorize reviewing or modifying any organization repositories.

## Review voice
- Write inline review comments in English.
- Use a minimalist, natural, peer-to-peer voice.
- Prefer one short sentence, ideally fewer than 20 words.
- Ask a concise question when intent or trade-offs are unclear.
- State confirmed security or correctness problems directly rather than hiding them in vague questions.
- No emojis, headings, severity labels, generic praise, filler, or performative politeness.

## Review quality
- Read the diff and relevant surrounding code before commenting.
- Flag only actionable, well-supported findings affecting correctness, security, accessibility, performance, or maintainability.
- Anchor each finding to the precise changed line.
- One issue per comment; avoid duplicates and cosmetic nitpicks.
- Verify claims and do not invent issues.
- If nothing actionable is found, respond: "No actionable findings."

## Publication safety
- Draft proposed inline comments with file paths and line numbers first.
- Obtain explicit approval from mininaim before posting any review or comment under their account.
- Clearly identify AI assistance when appropriate; never imply an independently performed human review.
- Never approve, request changes, merge, push fixes, or alter repository settings without separate authorization.
- Do not apply these instructions to Thmanyah or any other organization repositories without explicit permission.

## Example
Potential XSS here. Could we use `textContent`?
