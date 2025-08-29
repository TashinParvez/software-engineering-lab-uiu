# CSE 3422 - Class Test 2 (Set A)

This repository contains the work for **Class Test 2 - Set A** of CSE 3422. The task focuses on practicing **Git commands** and basic version control operations.

All commands executed are saved in a file named `Commands.txt`.

## Task Description

1.  **Create a GitHub Repository**

    - Create a repository named `Cricket` on GitHub.

2.  **Clone Repository**

    - Clone the repository onto your local desktop using:

      ```bash
      git clone https://github.com/TashinParvez/Cricket.git
      ```

    - Configuration name & email

      ```bash
          git config user.name "tashin"
          git config user.email "tashinparvez@gmail.com"
      ```

3.  **Create Files**

    - Create two files:

      - `File1.txt`
      - `File2.txt`

    - Add some text content to both files.

4.  **Commit Changes**

    - Stage and commit the files:

      ```bash
      git status
      git add .
      git commit -m "feat: first push 2 files"
      ```

5.  **Check Repository Status**

    - Check the repository status:

      ```bash
      git status
      ```

6.  **Edit and Commit File1.txt**

    - Modify `File1.txt`.
    - Check status and commit changes:

      ```bash
      git status
      git add .
      git commit -m "feat: change in file 1"
      ```

7.  **Edit and Commit File2.txt**

    - Modify `File2.txt` and commit:

      ```bash
      git status
      git add "File2.txt"
      git commit -m "feat: chnage in file 2"
      ```

8.  View Logs

- **Show logs for `File1.txt`:**

  ```bash
  git log -- File1.txt
  ```

  **Example Output:**

  ```
  commit 9026e237f855b9358c2615c1a7e91388d498b9c5
  Author: tashin <tashinparvez2002@gmail.com>
  Date:   Wed Aug 27 14:29:04 2025 +0600

      feat: change in File1.txt
  ```

- **Show logs for `File2.txt`:**

  ```bash
  git log -- File2.txt
  ```

  **Example Output:**

  ```
  commit 844d2e3b69828092344b345d82536c41d247a497
  Author: tashin <tashinparvez2002@gmail.com>
  Date:   Wed Aug 27 14:29:53 2025 +0600

      feat: change in File2.txt
  ```

9.  **Create Branches**

    - Create two new branches:

      ```bash
      git branch Branch1
      git branch Branch2
      ```

10. **Work on Branch1**

    - Switch to Branch1, modify `File2.txt`, check logs, and commit:

      ```bash
      git checkout Branch1

      git status
      git add File2.txt
      git commit -m "Updated File2.txt in Branch1"

      git log -- File2.txt
      ```

    - **Example Output:**

      ```
      commit 844d2e3b69828092344b345d82536c41d247a497 (HEAD -> Branch1, main, Branch2)
      Author: tashin <tashinparvez2002@gmail.com>
      Date:   Wed Aug 27 14:29:53 2025 +0600

          feat: chnage in file 2
      ```

11. **Work on Branch2**

    - Switch to Branch2, modify `File1.txt`, and commit:

      ```bash
      git checkout Branch2

      git add File1.txt
      git commit -m "Updated File1.txt in Branch2"
      ```

    - **Example Output:**

      ```
      commit 9026e237f855b9358c2615c1a7e91388d498b9c5
        Author: tashin <tashinparvez2002@gmail.com>
        Date:   Wed Aug 27 14:29:04 2025 +0600

            feat: chnage in file 1
      ```

12. **Merge Branches to Master**

    - Switch to the Master branch and merge Branch1 and Branch2:

      ```bash
      git checkout master

      git merge Branch1
      git merge Branch2
      ```

13. **Sync with GitHub**

    - Push changes to the remote repository:

      ```bash
        git add .

        git status
        git commit -m "merge b1 and b2 with main"
        git push
      ```


