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

## Contributing

Feel free to submit pull requests if you want to add more Git exercises or improve explanations.

---

## Contact

**Tashin Parvez**
Email: [tashinparvez2002@gmail.com](mailto:tashinparvez2002@gmail.com)
LinkedIn: [linkedin.com/in/tashinparvez](https://www.linkedin.com/in/tashinparvez/)
