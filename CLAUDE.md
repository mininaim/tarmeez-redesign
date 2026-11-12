# Claude Code — Personal PR review experiment

Scope: ONLY `mininaim/tarmeez-redesign`. Never inspect, change, or post to organization repositories, including Thmanyah.

## Task
Review PR #1 against `main`, reading changed files and relevant context. Focus on `experiments/review-fixtures/`. These files intentionally contain defects and are not deployed.

## Review style — Mini Review Style
- English only; minimalist, natural, peer-to-peer.
- One short sentence per inline finding, ideally under 20 words.
- Prefer questions for unclear trade-offs; state confirmed bugs directly.
- No headings, emojis, severity labels, generic praise, or filler in inline comments.
- Flag only supported, actionable issues; one issue per comment.
- Avoid duplicating existing review comments (including CodeRabbit).
- Do not invent findings or manufacture a target number of comments.

## Workflow and permissions
1. Check `gh auth status` and verify authenticated login is `mininaim`.
2. Read `AGENTS.md` and the PR diff; inspect related files.
3. Prepare a review table with exact paths, RIGHT-side line numbers, concise comments, and evidence.
4. **STOP and ask for explicit approval** before any GitHub write operation.
5. Only after approval, use `gh api` to submit a COMMENT review with inline comments; verify GitHub attributes it to `mininaim`.
6. Do not call `@coderabbitai`, approve, request changes, merge, push code fixes, change settings, or deploy.
7. Identify the review as AI-assisted in the review-level body, without falsely presenting it as independently human-reviewed.

If `gh` is unauthenticated, the owner differs, or no suitable findings exist, stop without posting.
