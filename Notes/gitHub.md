# Git-Commands-Practice

This repository contains a collection of common Git commands and practice exercises for mastering version control concepts. Each section includes a task description and the corresponding Git command(s) to perform the task.

---

## 📌 Git Practice Questions

### 1. Clone an Existing Repository

**Task:** Clone a repository from a URL into your local machine.
**Command:**

```bash
git clone <repository-url>
```

---

### 2. Initialize a New Git Repository

**Task:** Turn the current directory "project" into a Git repository.
**Command:**

```bash
git init
```

---

### 3. Stage and Commit Changes

**Task:** You modified `index.html`. Stage it and commit with the message "Initial commit".
**Command:**

```bash
git add index.html
git commit -m "Initial commit"
```

---

### 4. Create and Switch to a New Branch

**Task:** Create a new branch called `feature-xyz` and switch to it.
**Command:**

```bash
git branch feature-xyz  # create the branch
git checkout feature-xyz  # switch to it
```

or

```bash
git checkout -b feature-xyz
```

---

### 5. Push Changes to a Remote Repository

**Task:** Push your current branch to a remote repository with alias `origin` and branch `main`.
**Command:**

```bash
git push origin main
```

##### Notes:

1. If this is your **first push** and the remote branch doesn’t exist yet, you may need:

```bash
git push -u origin main
```

- `-u` sets `origin/main` as the **upstream** for your local `main` branch.
- Later, you can simply do `git push` without specifying the branch.

2. If you’re pushing a **new branch**, replace `main` with your branch name:

```bash
git push -u origin feature-xyz
```

---

### 6. View the Current Status of Your Repository

**Task:** Check the status of your repository to see modified, staged, or untracked files.
**Command:**

```bash
git status
```

---

### 7. Unstage a File

**Task:** You staged a file but want to unstage it while keeping the changes.
**Command:**

```bash
git reset HEAD <file-name>
```

**Explanation:**

- `git reset HEAD <file-name>` moves the file out of the staging area (unstages it).
- **Important:** Your changes in the file **remain intact**; nothing is lost.
- Useful when you staged a file **by mistake** or want to **commit only certain files**.

**Example Scenario:**

1. You modify `main.py` and `utils.py`.
2. You run:

   ```bash
   git add main.py utils.py
   ```

3. Oops! `utils.py` isn’t ready yet. To unstage it:

   ```bash
   git reset HEAD utils.py
   ```

4. Now only `main.py` is staged, and `utils.py` is back in your working directory with your changes preserved.

```bash
git commit -m "Commit only main.py changes"
```

---

### 8. View Commit History

**Task:** View the commit history of the current branch, showing each commit's hash and message.
**Command:**

```bash
git log
```

---

### 9. Rename a File

**Task:** Rename `home.html` to `index.html` and stage the change.
**Command:**

```bash
git mv home.html index.html
git commit -m "Rename home.html to index.html"
```

---

### 10. Check Differences Between Branches

**Task:** View the differences between two branches, `main` and `dev`.
**Command:**

```bash
git diff main dev
```

---

### 11. Merge a Branch Into the Current Branch

**Task:** Merge a branch named `feature-login` into the current branch.
**Command:**

```bash
git merge feature-login
```

---

### 12. Delete a Branch

**Task:** Delete a branch named `old-feature` after it has been merged.
**Command:**

```bash
git branch -d old-feature
```

---

## 🔑 Setting Git Username & Credentials

When you first use Git on a new machine, you usually need to set your **username** and **email** so Git knows who is making the commits.

There are **two kinds of usernames** in Git setup:

1. **Commit Author Identity (local Git username & email)** → This is stored inside Git history to mark who made the commit.
2. **Authentication Credentials (GitHub username/token)** → This is used to log in and push/pull from GitHub.

---

### 1. Setting Your Commit Author Identity

This is required for every commit you make. Run these commands:

```bash
# Set your name (this will appear in commits)
git config --global user.name "Your Name"

# Set your email (must match your GitHub email for commits to show properly)
git config --global user.email "your_email@example.com"
```

👉 The `--global` flag means this applies to all repos on your machine.
👉 If you want to set it only for one repo, remove `--global`.

---

If you want to set them only for a **specific local project (repository)**, you should **remove the `--global` flag**.

Here’s how:

```bash

# Set your name for this repo only
git config user.name "Your Name"

# Set your email for this repo only
git config user.email "your_email@example.com"
```

👉 These values will be stored inside that repository’s `.git/config` file, not the global `~/.gitconfig`.

---

### 1. `git checkout <commit-hash>`

- Moves you into a **detached HEAD state** (you’re not on a branch, just looking at a snapshot).
- Your files become exactly how they looked at that commit.
- **No history is deleted**.

### Example:

```bash
git checkout 06748c0fe30
```

👉 You’re now “time traveling” to that commit.
👉 But you’re not on `main` (or any branch). Git will warn you:

---

### 2. `git reset --hard <commit-hash>`

- Moves your current branch pointer back to the given commit.
- **Deletes all commits after that point** in history (⚠️ permanent if they’re not pushed anywhere).
- Also resets your working directory and staging area to match that commit.

### Example:

```bash
git reset --hard 06748c0fe3
```

👉 Now `main` points to that commit, and everything after it is gone (locally).

---

### 🔒 Safer Alternatives

Instead of `reset --hard`, you can use:

1. **`git revert`** → Creates a new commit that undoes the changes, but keeps history.

   ```bash
   git revert <commit-hash>
   ```

   👉 Best if you’ve already pushed.

2. **`git reset --soft`** → Moves branch back, but **keeps changes in staging** (you can recommit differently).

3. **`git reset --mixed`** (default) → Moves branch back, **keeps changes in working directory** but unstaged.

---

### 🔍 Visual Example

Imagine commit history:

```
A → B → C → D (HEAD)
```

- `git checkout B` → You are “looking at B”, not on a branch.
- `git reset --hard B` → History becomes `A → B`, and `C`, `D` are **gone**.

---

✅ **Golden Rule**:

- If commits are **already pushed** → use `git revert`.
- If commits are **only local** → `git reset --hard` is fine (but risky).

---

Got it 👍 Let me prepare a **clean note-style summary** for you on _branch difference with `git diff`_. You can keep this as a reference.

---

## Git Branch Comparison

### Compare Two Branches

```bash
git diff branch1 branch2
```

- Shows **line-by-line differences** between the tips of two branches.
- Added lines → **green**
- Removed lines → **red**

---

## 🔹 Common Use Cases

1. **Check changes between branches**

```bash
git diff main feature-login
```

2. **Show only filenames (no content):**

```bash
git diff --name-only main feature-login
```

3. **Show summary of changes per file:**

```bash
git diff --stat main feature-login
```

4. **See commits unique to a branch:**

```bash
git log main..feature-login --oneline
```

5. **Compare with remote branch:**

```bash
git diff origin/main feature-login
```

6. **Use external tool for better visualization:**

```bash
git difftool main feature-login
```

---

## Contributing

Feel free to submit pull requests if you want to add more Git exercises or improve explanations.

---

## Contact

**Tashin Parvez**
Email: [tashinparvez2002@gmail.com](mailto:tashinparvez2002@gmail.com)
LinkedIn: [linkedin.com/in/tashinparvez](https://www.linkedin.com/in/tashinparvez/)
