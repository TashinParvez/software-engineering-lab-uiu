### **GitHub & Git Task: CRM Project**

Perform the following tasks using Git and GitHub:

1. **Create a Repository:**

   - Log in to your GitHub account.
   - Create a new repository named `CRM`.

2. **Clone Repository:**

   - Clone the newly created `CRM` repository to your local computer.

   ```bash
   git clone https://github.com/TashinParvez/CRM.git
   ```

3. **Create Project Structure:**

   - Inside the cloned directory, create a folder named `sre`.
   - Inside `src`, create a file named `readme.txt` and write the text: `Welcome to CRM`

4. **Stage and Commit:**

   - Stage the changes.
   - Commit the changes with the message: `Create project structure`

   ```bash
   git add .
   git commit -m "Feat: added readme.md file"
   ```

5. **Push to Remote:**

   - Push the changes to the remote repository (`main` branch).

   ```bash
   git commit -u origin main
   ```

6. **Create a New Branch:**

   - Create a branch named `task-1`.

   ```bash
   git branch task-1
   ```

7. **Add Files in task-1 Branch:**

   - Inside `sre`, create a file named `customers.txt` and write your **name and ID** in it.
   - Inside `src`, create a file named `reports.txt`.

   ```bash
   git checkout task-1
   ```

8. **Stage and Commit Selectively:**

   - Stage **only** `customers.txt`.
   - Commit with the message: `Add customers.txt`

   ```bash
   git add src/customers.txt
   git commit -m "feat: Add customers.txt"
   ```

9. **Push task-1 Branch:**

   - Push the `task-1` branch to the remote repository.

   ```bash
   git push -u origin task-1
   ```

10. **Merge task-1 into Main:**

    - Checkout the `main` branch.
    - Merge the `task-1` branch into `main`.
    - Push the updated `main` branch to the remote repository.

      ```bash
         git chekout main
         git merge task-1
         git add .
         git commit -m "mege task-1 with main"
         git push
      ```

---
